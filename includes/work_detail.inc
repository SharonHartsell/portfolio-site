<section class="workDetail_intro">
  <div class="workDetail_introText">
    <?php if ( count($content['tech']) > 0 ) : ?>
      <ul class="intro_techList">
        <?php foreach($content['tech'] as $tech) : ?>
          <li class="intro_techListItem">
            <i class="fab fa-<?php print $tech; ?> intro_techIcon"></i>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h1 class="workDetail_title t-title--60b"><?php print $content['title']; ?></h1>
    <h2 class="workDetail_summary t-body--24sb"><?php print $content['summary']; ?></h2>
    <p class="workDetail_dateCompany t-body--18l">
    <?php if ( !empty($content['date']) ) : ?>
      <span class="workDetail_date"><?php print $content['date']; ?></span>
    <?php endif; ?>
    <?php if ( !empty($content['company']) ) : ?>
      <span class="workDetail_company"><?php print $content['company']; ?></span>
    <?php endif; ?>
    </p>
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
  </div>
  <div class="workDetail_introImageWrapper">
    <img src="/img/work/<?php print $content['machine_name']; ?>/<?php print $content['intro_img']; ?>" class="workDetail_introImage" alt="" />
  </div>
</section>

<section class="workDetail_roleSection">
  <div class="workDetail_roleContent">
    <h2 class="workDetail_roleHeader t-title--40l">&gt; what I did</h2>
    <?php if ( !empty($content['my_role']) ) : ?>
      <ul class="workDetail_roleList">
        <?php foreach($content['my_role'] as $role) : ?>
          <li class="workDetail_roleItem t-body--18l"><?php print $role; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="workDetail_roleImageWrap">
    <div class="workDetail_slideshowWrapper">
      <div class="workDetail_slideshow">
        <?php $slide_counter = 1; ?>
        <?php foreach($content['slideshow_imgs'] as $img) : ?>
          <?php $active_slide_class = ($slide_counter == 1) ? 'workDetail_slideshowItem--active' : ''; ?>
          <img src="/img/work/<?php print $content['machine_name']; ?>/<?php print $img; ?>" class="workDetail_slideshowItem <?php print $active_slide_class; ?>" alt="" />
          <?php $slide_counter++; ?>
        <?php endforeach; ?>
      </div>
      <button class="workDetail_slideshowBtn workDetail_slideshowBtn--prev">
        <i class="fas fa-angle-left"></i>
        <span class="workDetail_slideshowBtnText">Previous</span>
      </button>
      <button class="workDetail_slideshowBtn workDetail_slideshowBtn--next">
        <i class="fas fa-angle-right"></i>
        <span class="workDetail_slideshowBtnText">Next</span>
      </button>
    </div>
  </div>
</section>

<!-- <section class="workDetail_codeSection">
  <h2 class="workDetail_codeHeader t-title--40l">&gt; code sample</h2>
  <div class="workDetail_codeText">
    <pre><?php print $content['code_sample']; ?></pre>
  </div>
</section> -->

<div class="workDetail_backLinkWrap">
  <a href="/index.php" class="workDetail_backLink t-body--18l">&lt; back</a>
</div>