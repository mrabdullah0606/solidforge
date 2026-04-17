<?php
$title = $content['title'] ?? '';
$bg_image = $content['bg_image'] ?? '';
$card_title = $content['card_title'] ?? '';
$card_image = $content['card_image'] ?? '';
$specs = $content['specs'] ?? [];
$footer_text = $content['footer_text'] ?? '';

$bg_style = $bg_image ? "background-image: url('{$bg_image}'); background-repeat: no-repeat; background-position: center; background-size: cover;" : "background-color: #1b1b1b;";
?>
<div class="container-fluid py-5" style="<?php echo $bg_style; ?>">
    <?php if($title): ?>
    <div class="col-md-5 px-md-4 mx-auto text-white text-center mb-5">
        <h2 class="display-4 fw-bold" style="text-shadow: 0 4px 10px rgba(0,0,0,0.6);"><?php echo htmlspecialchars($title); ?></h2>
    </div>
    <?php endif; ?>
    
    <div class="d-flex justify-content-center mb-5">
        <div class="card bg-dark text-center text-warning p-2 p-md-4" style="width: 35rem;">
            <?php if($card_title): ?><h3><?php echo htmlspecialchars($card_title); ?></h3><?php endif; ?>
            
            <div class="border-0 border-bottom">
                <?php if($card_image): ?>
                <img src="<?php echo htmlspecialchars($card_image); ?>" class="w-50 d-block mx-auto mb-4" alt="Product Image">
                <?php endif; ?>
            </div>
            
            <div class="card-body px-0">
                <?php foreach($specs as $spec): ?>
                <div class="border-0 border-bottom py-2">
                    <p class="fw-light mb-0 small text-white opacity-75"><?php echo htmlspecialchars($spec['label']); ?></p>
                    <h5><?php echo htmlspecialchars($spec['value']); ?></h5>
                </div>
                <?php endforeach; ?>
                
                <?php if($footer_text): ?>
                <h5 class="mt-3"><?php echo htmlspecialchars($footer_text); ?></h5>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
