<!-- partials/specs.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: title, columns (array of strings), rows (array of array)
 */
$title = $content['title'] ?? 'Technical Parameters';
$columns = $content['columns'] ?? [];
$rows = $content['rows'] ?? [];
?>
<section style="background-color: rgb(25, 25, 25); padding: 40px 0">
  <div class="container" style="background-color: rgb(25, 25, 25); color: white; padding: 30px; border-radius: 10px;">
    <h4 class="mb-3 text-center"><?php echo htmlspecialchars($title); ?></h4>
    <div class="table-responsive">
      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <?php foreach($columns as $col): ?>
              <th><?php echo htmlspecialchars($col); ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach($rows as $row): ?>
          <tr>
            <?php foreach($row as $cell): ?>
              <td><?php echo htmlspecialchars($cell); ?></td>
            <?php endforeach; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
