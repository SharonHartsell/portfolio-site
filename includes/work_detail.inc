<section class="workDetail_introSection">
  <div class="workDetail_intro">
    <?php if ( count($content['tech']) > 0 ) : ?>
      <ul class="workDetail_techList">
        <?php foreach($content['tech'] as $tech) : ?>
          <li class="workDetail_techListItem">
            <i class="fab fa-<?php print $tech; ?> workDetail_techIcon"></i>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h1 class="workDetail_title t-title--60b"><?php print $content['title']; ?></h1>  
    <p class="workDetail_dateCompany t-body--18l">
    <?php if ( !empty($content['date']) ) : ?>
      <span class="workDetail_date"><?php print $content['date']; ?></span>
    <?php endif; ?>
    <?php if ( !empty($content['company']) ) : ?>
      <span class="workDetail_company"><?php print $content['company']; ?></span>
    <?php endif; ?>
    </p>
  </div>
</section>

<section class="workDetail_challengeSection">
  <div class="workDetail_challengeCol">
    <div class="workDetail_challengeTextBlock">
      <h3 class="workDetail_challengeBlockTitle t-title--20sb">&gt; Challenge</h3>
      <p class="workDetail_challengeBlockBody t-body--16l"><?php print $content['challenge']; ?></p>
    </div>
    <div class="workDetail_challengeTextBlock">
      <h3 class="workDetail_challengeBlockTitle t-title--20sb">&gt; Solution</h3>
      <p class="workDetail_challengeBlockBody t-body--16l"><?php print $content['solution']; ?></p>
    </div>
  </div>
  <div class="workDetail_challengeCol workDetail_challengeCol--results">
    <div class="workDetail_challengeTextBlock">
      <h3 class="workDetail_challengeBlockTitle t-title--20sb">&gt; Results</h3>
      <p class="workDetail_challengeBlockBody t-body--16sb"><?php print $content['results']; ?></p>
    </div>
    <?php if ( !empty($content['live_link']) || !empty($content['github_link']) ) : ?>
      <div class="workDetail_liveGitWrapper">
        <?php if ( !empty($content['live_link']) ) : ?>
          <a class="workDetail_liveBtn btn--primary t-title--16b t-caps" href="<?php print $content['live_link'];?>">Live Site</a>
        <?php endif; ?>
        <?php if ( !empty($content['github_link']) ) : ?>
          <a class="workDetail_githubLink" href="<?php print $content['github_link'];?>"><i class="fab fa-github"></i></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php if (!empty($content['slideshow_imgs'])) : ?>
  <section class="workDetail_slideshowSection">
    <div class="workDetail_slideshowOuterWrapper">
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
<?php endif; ?>

<section class="workDetail_roleSection">
  <div class="workDetail_roleContent">
    <h2 class="workDetail_roleHeader t-title--40l">&gt; my role</h2>
    <?php if ( !empty($content['my_role']) ) : ?>
      <ul>
        <?php foreach($content['my_role'] as $role => $sub_roles) : ?>
          <li class="workDetail_roleItem t-body--16l">
            <?php print $role; ?>
            <?php if ( !empty($sub_roles) ) : ?>
              <ul class="workDetail_subRoleList">
                <?php foreach($sub_roles as $sub_role) : ?>
                  <li class="workDetail_subRoleListItem"><?php print $sub_role; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="workDetail_roleImageWrap">
    <img src="/img/work/<?php print $content['machine_name']; ?>/<?php print $content['context_img']; ?>" class="workDetail_roleImage" alt="" />
  </div>
</section>

<?php if (!empty($content['testimonial'])) : ?>
  <section class="workDetail_testimonialSection">
    <blockquote class="t-body--20sb">
      <?php print $content['testimonial']; ?>
      <footer class="workDetail_testimonialSrc t-body--16l">-<?php print $content['testimonial_src']; ?></footer>
    </blockquote>
  </section>
<?php endif; ?>

<div class="workDetail_backLinkWrap">
  <a href="#" class="workDetail_backLink t-body--18l">&lt; back</a>
</div>