<section class="workDetail-intro" style="background-image: url('/img/work/<?php print $content['intro_bgrd']; ?>')">
  <?php if ( count($content['tech']) > 0 ) : ?>
    <ul class="intro_techList">
      <?php foreach($content['tech'] as $tech) : ?>
        <li class="intro_techListItem">
          <i class="fab fa-<?php print $tech; ?> intro_techIcon"></i>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <h1 class="workDetail-title"><?php print $content['title']; ?></h1>
  <h2 class="workDetail-summary"><?php print $content['summary']; ?></h2>
  <?php if ( !empty($content['live_link']) || !empty($content['github_link']) ) : ?>
    <div>
      <?php if ( !empty($content['live_link']) ) : ?>
        <a class="workDetail-liveBtn" href="#">See Live Site</a>
      <?php endif; ?>
      <?php if ( !empty($content['github_link']) ) : ?>
        <a class="workDetail-githubLink" href="#">Check out the code on <i class="fab fa-github"></i></a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>

<section class="workDetail-challengeSection section--fullHt">
  <div class="workDetail-challengeContent">
    <h2 class="workDetail-challengeHeader">&gt; challenge</h2>
    <div class="workDetail-challengeText"><?php print $content['challenge']; ?></div>
  </div>
</section>

<section class="workDetail-solutionSection">
  <div class="workDetail-solutionContent">
    <h2 class="workDetail-solutionHeader">&gt; solution</h2>
    <div class="workDetail-solutionText"><?php print $content['solution']; ?></div>
    <?php if ( !empty($content['my_role']) ) : ?>
      <h3>My Role</h3>
      <ul>
        <?php foreach($content['my_role'] as $role) : ?>
          <li><?php print $role; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="workDetail-solutionImageWrap">
    <img src="/img/work/<?php print $content['solution_img'];?>" class="workDetail-solutionImage" alt="" />
  </div>
</section>

<section class="workDetail-slideshowSection">
  <div class="workDetail-slideshow">
    <?php foreach($content['slideshow_imgs'] as $img) : ?>
      <img src="/img/work/<?php print $img; ?>" class="workDetail-slideshowItem" alt="" />
    <?php endforeach; ?>
  </div>
  <button class="workDetail-slideshowBtn workDetail-slideshowBtn--prev">Previous</button>
  <button class="workDetail-slideshowBtn workDetail-slideshowBtn--next">Next</button>
</section>

<div class="workDetail-backLinkWrap">
  <a href="/index.php">&lt; Back to main page</a>
</div>