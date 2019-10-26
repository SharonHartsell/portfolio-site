<ul class="package-list">
  <?php foreach($content['packages'] as $package) : ?>
    <li class="package-item" data-package="<?php print $package['machine_name']; ?>">
      <img src="<?php print $package['image_file_name']; ?>" class="package-preview" alt="<?php print $package['name']; ?> package" />
      <button type="button" class="package-nameBtn btn t-caps" ><?php print $package['name']; ?></button>
      <div class="package-confirmWrap">
        <h3 class="package-confirmMessage">Ready to customize?</h2>
        <div class="package-confirmOptions">
          <a href="<?php print $package['preset_url']; ?>" class="package-confirmBtn package-confirmBtn--yes btn--submit t-caps">Yes</a>
          <button type="button" class="package-confirmBtn package-confirmBtn--notYet btn--cancel t-caps">Not Yet</button>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>