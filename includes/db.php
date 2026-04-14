<?php
// includes/db.php - Database connection using PDO

$host = 'localhost';
$db   = 'solidforge';
$user = 'root';
$pass = ''; // Default Laragon password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // For initial setup, if DB doesn't exist, we might want to handle it or just let it fail
     // throw new \PDOException($e->getMessage(), (int)$e->getCode());
     die("Database connection failed: " . $e->getMessage());
}
?>
