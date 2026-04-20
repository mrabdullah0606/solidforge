<?php
/**
 * includes/session_init.php
 * This file should be included at the very top of all frontend PHP files
 * to ensure sessions are started before any HTML output.
 */

if (session_status() === PHP_SESSION_NONE) {
    // Ensure session cookie is accessible across the whole domain
    session_set_cookie_params(['path' => '/']);
    session_start();
}

require_once('db.php');
require_once('functions.php');
?>
