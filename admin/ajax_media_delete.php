<?php
// admin/ajax_media_delete.php
require_once('../includes/db.php');
require_once('auth.php');

if (!isLoggedIn()) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$id = intval($_POST['id'] ?? 0);

if (!$id) {
    echo json_encode(['error' => 'Invalid ID']);
    exit;
}

// 1. Get file info
$stmt = $pdo->prepare("SELECT file_path FROM media WHERE id = ?");
$stmt->execute([$id]);
$file = $stmt->fetch();

if ($file) {
    $filePath = "../" . $file['file_path'];
    
    // 2. Delete from filesystem
    if (file_exists($filePath)) {
        @unlink($filePath);
    }
    
    // 3. Delete from database
    $stmt = $pdo->prepare("DELETE FROM media WHERE id = ?");
    $stmt->execute([$id]);
    
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'File not found']);
}
?>
