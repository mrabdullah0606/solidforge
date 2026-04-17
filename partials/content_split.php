<?php
$title = $content['title'] ?? '';
$text = $content['subtitle'] ?? '';
$image = $content['product_image'] ?? '';
$layout = $content['layout'] ?? 'left'; // left: text left, right: text right
$bg_type = $content['bg_type'] ?? 'solid';
$bg_image = $content['bg_image'] ?? '';

$bg_style = "";
if($bg_type === 'gradient') {
    $bg_style = "background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(45,45,45,1) 100%);";
} elseif($bg_type === 'image' && $bg_image) {
    $bg_style = "background-image: url('{$bg_image}'); background-size: cover; background-position: center;";
} else {
    $bg_style = "background-color: #000;";
}
?>
<div class="container-fluid vh-80 px-0 d-md-flex align-items-center" style="<?php echo $bg_style; ?>">
    <div class="container">
        <div class="row align-items-center <?php echo $layout === 'right' ? 'flex-md-row-reverse' : ''; ?>">
            <div class="col-md-6">
                <div class="text-center text-md-start text-white pt-3 px-4">
                    <h2 class="display-5 fw-bold mb-3"><?php echo htmlspecialchars($title); ?></h2>
                    <p class="fw-light fs-24 lh-sm opacity-75"><?php echo nl2br(htmlspecialchars($text)); ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <?php if($image): ?>
                <img src="<?php echo htmlspecialchars($image); ?>" class="img-fluid d-block mx-auto" alt="<?php echo htmlspecialchars($title); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
