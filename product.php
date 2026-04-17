<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$slug = $_GET['slug'] ?? '';
$product = getProductBySlug($pdo, $slug);

if (!$product) {
    // Redirect to 404 or home if product not found
    header("Location: index.php");
    exit();
}

$sections = getProductSections($pdo, $product['id']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($product['name']); ?> | Solidforge</title>
    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dropdown.css">
    <!-- Add any specific CSS for sections -->
    <style>
        nav{background-color: #000;}
        .bg-silver{background-color: #949597; color: #fff;border: none;}
        .text-yellow{color: #F5DD4C;}
        .vh-100 { height: 100vh; }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php require_once('navbar.php') ?>

    <main>
        <?php if (empty($sections)): ?>
            <div class="container py-5 text-center">
                <h1 class="display-4"><?php echo htmlspecialchars($product['name']); ?></h1>
                <p class="lead"><?php echo htmlspecialchars($product['subtitle']); ?></p>
                <div class="alert alert-info">Content for this product is coming soon.</div>
            </div>
        <?php else: ?>
            <?php foreach ($sections as $section): ?>
                <?php 
                $sectionFile = "partials/" . $section['type'] . ".php";
                if (file_exists($sectionFile)) {
                    $content = $section['content'];
                    include($sectionFile);
                }
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>

    <!-- footer -->
    <?php require_once('footer.php') ?>
  </body>
</html>
