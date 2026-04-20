<!-- partials/hero.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: title, subtitle, bg_image, product_image, text_color
 */
$bgImage = $content['bg_image'] ?? '';
$productImage = $content['product_image'] ?? '';
$title = $content['title'] ?? '';
$subtitle = $content['subtitle'] ?? '';
$textColor = $content['text_color'] ?? 'white';
$titleColor = $content['title_color'] ?? 'warning';
?>
<section
  class="min-vh-100 d-flex flex-column align-items-center justify-content-start text-<?php echo $textColor; ?> text-center position-relative overflow-hidden"
  style="
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
      url('<?php echo $bgImage; ?>') center center / cover no-repeat;
    padding-top: 120px;
  "
>
  <!-- Background Effects -->
  <div class="position-absolute w-100 h-100 top-0 start-0" style="background: radial-gradient(circle, transparent 20%, rgba(0,0,0,0.8) 100%); pointer-events: none;"></div>

  <div class="container position-relative" style="z-index: 2;">
    <h1 class="display-3 fw-bold text-<?php echo $titleColor; ?> mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.6);">
        <?php echo htmlspecialchars($title); ?>
    </h1>
    <p class="fs-4 fw-light text-light mx-auto mb-5" style="max-width: 800px; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
      <?php echo nl2br(htmlspecialchars($subtitle)); ?>
    </p>

    <?php if ($productImage): ?>
        <div class="product-reveal mt-auto mb-4">
            <img src="<?php echo $productImage; ?>" 
                 class="img-fluid" 
                 style="max-height: 400px; filter: drop-shadow(0 20px 50px rgba(0,0,0,0.8));" 
                 alt="<?php echo htmlspecialchars($title); ?>">
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="quote.php?product_id=<?php echo $product['id'] ?? ''; ?>" class="btn btn-warning btn-lg px-5 py-3 fw-bold text-uppercase" style="border-radius: 50px; letter-spacing: 1px;">
            <i class="bi bi-chat-left-quote me-2"></i> Get a Quotation
        </a>
        <?php if (!isCustomerLoggedIn()): ?>
            <a href="register.php" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold text-uppercase" style="border-radius: 50px; letter-spacing: 1px;">
                Register for Access
            </a>
        <?php endif; ?>
    </div>
  </div>
</section>

<style>
.product-reveal img {
    animation: fadeInUp 1.2s ease-out;
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
