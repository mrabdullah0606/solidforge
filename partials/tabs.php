<!-- partials/tabs.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: title, tabs (array of objects: title, content, image/video)
 */
$sectionTitle = $content['title'] ?? '';
$tabs = $content['tabs'] ?? [];
$sectionId = "tabs-" . uniqid();
?>
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <?php if($sectionTitle): ?>
            <h2 class="text-center mb-5"><?php echo htmlspecialchars($sectionTitle); ?></h2>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php foreach($tabs as $index => $tab): ?>
                        <button class="nav-link mb-3 text-start <?php echo $index === 0 ? 'active' : ''; ?> p-3 border" 
                                id="v-pills-<?php echo $sectionId . $index; ?>-tab" 
                                data-bs-toggle="pill" 
                                data-bs-target="#v-pills-<?php echo $sectionId . $index; ?>" 
                                type="button" role="tab">
                            <?php echo htmlspecialchars($tab['title']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <?php foreach($tabs as $index => $tab): ?>
                        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?> p-4 bg-white shadow-sm rounded" 
                             id="v-pills-<?php echo $sectionId . $index; ?>" 
                             role="tabpanel">
                            <h3><?php echo htmlspecialchars($tab['title'] ?? ''); ?></h3>
                            <p class="lead mt-3"><?php echo htmlspecialchars($tab['content'] ?? ''); ?></p>
                            <?php if(!empty($tab['video_url'])): ?>
                                <div class="mt-4">
                                    <video class="w-100 rounded" autoplay muted loop>
                                        <source src="<?php echo $tab['video_url']; ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php elseif(!empty($tab['image'])): ?>
                                <img src="<?php echo $tab['image']; ?>" class="img-fluid rounded mt-4" alt="">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
