<?php
$title = $content['title'] ?? '';
$subtitle = $content['subtitle'] ?? '';
$bg_image = $content['bg_image'] ?? '';
$stats = $content['stats'] ?? [];

$bg_style = $bg_image ? "background-image: url('{$bg_image}'); background-repeat: no-repeat; background-position: center; background-size: cover;" : "background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);";
?>
<div class="container-fluid vh-100 px-0 py-5 d-flex align-items-center" style="<?php echo $bg_style; ?>">
    <div class="col-12 col-md-8 mx-auto text-center text-white pt-3">
        <?php if($title): ?>
        <h2 class="display-5 fw-bold mb-3"><?php echo htmlspecialchars($title); ?></h2>
        <?php endif; ?>
        
        <?php if($subtitle): ?>
        <h5 class="fs-4 text-warning mb-5"><?php echo htmlspecialchars($subtitle); ?></h5>
        <?php endif; ?>
        
        <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
            <?php foreach($stats as $stat): ?>
            <div class="col-5 col-md-3">
                <h4 class="display-5 fw-medium text-warning"><?php echo htmlspecialchars($stat['value']); ?></h4>
                <p class="fw-light fs-18 lh-sm opacity-75"><?php echo htmlspecialchars($stat['label']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
