<?php
require_once('includes/functions.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Clear customer session
unset($_SESSION['customer_id']);
unset($_SESSION['customer_name']);

// If we want to logout from admin as well, we can session_destroy()
// but typically they are separate.

header("Location: index.php");
exit();
?>
