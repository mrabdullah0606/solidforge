<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// includes/functions.php - Helper functions for Solidforge

/**
 * Fetch all brands with their products for the navbar
 */
function getBrandsWithProducts($pdo) {
    $brands = $pdo->query("SELECT * FROM brands ORDER BY id ASC")->fetchAll();
    foreach ($brands as &$brand) {
        $stmt = $pdo->prepare("SELECT name, slug FROM products WHERE brand_id = ? AND is_active = 1 ORDER BY id ASC");
        $stmt->execute([$brand['id']]);
        $brand['products'] = $stmt->fetchAll();
        
        $stmt = $pdo->prepare("SELECT name, slug FROM categories WHERE brand_id = ? ORDER BY id ASC");
        $stmt->execute([$brand['id']]);
        $brand['categories'] = $stmt->fetchAll();
    }
    return $brands;
}

/**
 * Fetch a single product by its slug
 */
function getProductBySlug($pdo, $slug) {
    $stmt = $pdo->prepare("SELECT p.*, b.name as brand_name, b.slug as brand_slug 
                           FROM products p 
                           JOIN brands b ON p.brand_id = b.id 
                           WHERE p.slug = ? AND p.is_active = 1");
    $stmt->execute([$slug]);
    return $stmt->fetch();
}

/**
 * Fetch all sections for a specific product
 */
function getProductSections($pdo, $productId) {
    $stmt = $pdo->prepare("SELECT * FROM sections WHERE product_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$productId]);
    $sections = $stmt->fetchAll();
    
    foreach ($sections as &$section) {
        $section['content'] = json_decode($section['content'], true);
    }
    return $sections;
}

/**
 * Generate a clean slug from a string
 */
function createSlug($string) {
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return rtrim($string, '-');
}

/**
 * Customer Authentication Helpers
 */
function isCustomerLoggedIn() {
    return isset($_SESSION['customer_id']);
}

function getLoggedInCustomer($pdo) {
    if (!isCustomerLoggedIn()) return null;
    $stmt = $pdo->prepare("SELECT * FROM customers WHERE id = ?");
    $stmt->execute([$_SESSION['customer_id']]);
    return $stmt->fetch();
}

function isCustomerApproved($pdo) {
    $customer = getLoggedInCustomer($pdo);
    return ($customer && $customer['status'] === 'approved');
}

/**
 * Notification Helper
 */
function addNotification($pdo, $type, $reference_id) {
    $stmt = $pdo->prepare("INSERT INTO notifications (type, reference_id) VALUES (?, ?)");
    return $stmt->execute([$type, $reference_id]);
}

/**
 * Admin Authentication Helper
 */
function isAdminLoggedIn() {
    return isset($_SESSION['admin_id']);
}
?>
