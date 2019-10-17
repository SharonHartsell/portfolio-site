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

  <h1 class="workDetail-title t-title--60b"><?php print $content['title']; ?></h1>
  <h2 class="workDetail-summary t-body--24sb"><?php print $content['summary']; ?></h2>
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

<section class="workDetail-roleSection">
  <div class="workDetail-roleContent">
    <h2 class="workDetail-roleHeader t-title--40l">&gt; what I did</h2>
    <div class="workDetail-roleText t-body--18l"><?php print $content['role']; ?></div>
    <?php if ( !empty($content['my_role']) ) : ?>
      <ul>
        <?php foreach($content['my_role'] as $role) : ?>
          <li class="t-body--18l"><?php print $role; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="workDetail-roleImageWrap">
    <section class="workDetail-slideshowSection">
      <div class="workDetail-slideshow">
        <?php foreach($content['slideshow_imgs'] as $img) : ?>
          <img src="/img/work/<?php print $img; ?>" class="workDetail-slideshowItem" alt="" />
        <?php endforeach; ?>
      </div>
      <button class="workDetail-slideshowBtn workDetail-slideshowBtn--prev">Previous</button>
      <button class="workDetail-slideshowBtn workDetail-slideshowBtn--next">Next</button>
    </section>
    <img src="/img/work/<?php print $content['solution_img'];?>" class="workDetail-solutionImage" alt="" />
  </div>
</section>

<section class="workDetail-codeSection section--fullHt">
  <div class="workDetail-codeContent">
    <h2 class="workDetail-codeHeader t-title--40l">&gt; code sample</h2>
    <div class="workDetail-codeText t-body--18l"><?php print $content['challenge']; ?></div>
  </div>
</section>

<div class="workDetail-backLinkWrap">
  <a href="/index.php" class="t-body--18l">&lt; Back to main page</a>
</div>