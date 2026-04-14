<!-- partials/cards.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: title, description, cards (array of object: image, title, text)
 */
$sectionTitle = $content['title'] ?? '';
$sectionDesc = $content['description'] ?? '';
$cards = $content['cards'] ?? [];
?>
<section class="py-5 text-white" style="background-color: #000">
  <div class="container">
    <?php if($sectionTitle): ?>
    <h2 class="display-4 fw-bold mb-3 text-center">
      <?php echo htmlspecialchars($sectionTitle); ?>
    </h2>
    <?php endif; ?>
    
    <?php if($sectionDesc): ?>
    <p class="fs-5 text-light mb-5 text-center">
      <?php echo htmlspecialchars($sectionDesc); ?>
    </p>
    <?php endif; ?>

    <div class="row">
      <?php foreach($cards as $card): ?>
      <div class="col-md-6 mb-4">
        <div class="card text-white h-100 border-0 bg-transparent text-start">
          <?php if(!empty($card['image'])): ?>
          <img
            src="<?php echo $card['image']; ?>"
            class="card-img-top mt-3 mb-3"
            alt="<?php echo htmlspecialchars($card['title']); ?>"
          />
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title fw-semibold" style="font-size: 1.75rem">
              <?php echo htmlspecialchars($card['title']); ?>
            </h5>
            <p class="card-text text-lighter" style="font-size: 1.125rem">
              <?php echo htmlspecialchars($card['text']); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
