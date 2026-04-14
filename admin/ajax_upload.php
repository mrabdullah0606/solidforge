<?php
// admin/ajax_upload.php
require_once('../includes/db.php');
require_once('auth.php');

if (!isLoggedIn()) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$targetDir = "../uploads/media/";
$chunkDir = "../uploads/chunks/";

if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
if (!file_exists($chunkDir)) mkdir($chunkDir, 0777, true);

$fileName = $_POST['fileName'] ?? '';
$fileId = $_POST['fileId'] ?? ''; // Unique ID for this file upload
$index = intval($_POST['index'] ?? 0);
$total = intval($_POST['total'] ?? 0);

if (!$fileName || !$fileId) {
    echo json_encode(['error' => 'Invalid parameters']);
    exit;
}

// Security: Clean filename
$fileName = preg_replace('/[^A-Za-z0-9._-]/', '_', $fileName);
$fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
$safeFileName = time() . '_' . $fileName;

$chunkFile = $chunkDir . $fileId . '_chunk_' . $index;

if (isset($_FILES['chunk']) && move_uploaded_file($_FILES['chunk']['tmp_name'], $chunkFile)) {
    // Check if all chunks are present
    $allReceived = true;
    for ($i = 0; $i < $total; $i++) {
        if (!file_exists($chunkDir . $fileId . '_chunk_' . $i)) {
            $allReceived = false;
            break;
        }
    }

    if ($allReceived) {
        $finalPath = $targetDir . $safeFileName;
        $out = fopen($finalPath, "wb");
        if ($out) {
            for ($i = 0; $i < $total; $i++) {
                $in = fopen($chunkDir . $fileId . '_chunk_' . $i, "rb");
                while ($buff = fread($in, 4096)) {
                    fwrite($out, $buff);
                }
                fclose($in);
                @unlink($chunkDir . $fileId . '_chunk_' . $i); // Delete chunk
            }
            fclose($out);

            // Save to database
            $dbPath = "uploads/media/" . $safeFileName;
            $fileType = mime_content_type($finalPath);
            $fileSize = filesize($finalPath);

            $stmt = $pdo->prepare("INSERT INTO media (filename, file_path, file_type, file_size) VALUES (?, ?, ?, ?)");
            $stmt->execute([$fileName, $dbPath, $fileType, $fileSize]);
            $mediaId = $pdo->lastInsertId();

            echo json_encode([
                'success' => true, 
                'file_path' => $dbPath, 
                'id' => $mediaId,
                'file_type' => $fileType
            ]);
        } else {
            echo json_encode(['error' => 'Failed to open final file for writing']);
        }
    } else {
        echo json_encode(['success' => true, 'status' => 'chunk_saved', 'index' => $index]);
    }
} else {
    echo json_encode(['error' => 'Failed to move uploaded chunk']);
}
?>
