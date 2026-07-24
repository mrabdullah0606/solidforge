<!-- partials/rich_text.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: html_content, bg_color, text_color
 */
$htmlContent = $content['html_content'] ?? '';
$bgColor = $content['bg_color'] ?? '#ffffff';
$textColor = $content['text_color'] ?? '#3b3b3b';
?>
<section class="py-5" style="background-color: <?php echo htmlspecialchars($bgColor); ?>; color: <?php echo htmlspecialchars($textColor); ?>;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto rich-text-content">
                <?php echo $htmlContent; // Render raw HTML so user can use <br>, <b>, <p> etc. ?>
            </div>
        </div>
    </div>
</section>
<style>
.rich-text-content p {
    margin-bottom: 1.5rem;
    line-height: 1.6;
}
</style>
