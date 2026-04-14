<?php
// admin/ajax_media.php
require_once('../includes/db.php');
require_once('auth.php');

if (!isLoggedIn()) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$page = intval($_GET['page'] ?? 1);
$limit = 12;
$offset = ($page - 1) * $limit;

$stmt = $pdo->prepare("SELECT * FROM media ORDER BY id DESC LIMIT ? OFFSET ?");
$stmt->bindValue(1, $limit, PDO::PARAM_INT);
$stmt->bindValue(2, $offset, PDO::PARAM_INT);
$stmt->execute();
$mediaItems = $stmt->fetchAll();

$total = $pdo->query("SELECT COUNT(*) FROM media")->fetchColumn();

header('Content-Type: application/json');
echo json_encode([
    'items' => $mediaItems,
    'total' => $total,
    'pages' => ceil($total / $limit),
    'current_page' => $page
]);
?>
