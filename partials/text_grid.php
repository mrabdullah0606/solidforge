<?php
$title = $content['title'] ?? '';
$bg_image = $content['bg_image'] ?? '';
$columns = $content['columns'] ?? [];

$bg_style = $bg_image ? "background-image: url('{$bg_image}'); background-repeat: no-repeat; background-position: center; background-size: cover;" : "background-color: #111;";
?>
<div class="container-fluid vh-100 px-0 py-5 d-flex align-items-center" style="<?php echo $bg_style; ?>">
    <div class="col-11 col-md-11 mx-auto text-center text-white pt-3">
        <?php if($title): ?>
        <h2 class="display-4 fw-bold mb-5"><?php echo htmlspecialchars($title); ?></h2>
        <?php endif; ?>
        
        <div class="row mt-5">
            <?php foreach($columns as $col): ?>
            <div class="col-12 col-md-4 mb-4">
                <h4 class="fs-3 fw-bold text-warning"><?php echo htmlspecialchars($col['title']); ?></h4>
                <p class="fw-light fs-18 lh-sm opacity-75"><?php echo nl2br(htmlspecialchars($col['text'])); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
