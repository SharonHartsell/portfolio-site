<?php include("includes/html_header.inc"); ?>
<?php include("includes/header.inc"); ?>

<!-- Intro -->
<section class="intro">
  <img src="/img/sharon-red1.jpg" class="intro_image" alt="Sharon" />
  <h1 class="intro_headline t-title--60b">Hi! I’m Sharon, a front-end web developer.</h1>
  <ul class="intro_techList">
    <li class="intro_techListItem">
      <i class="fab fa-html5 intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">HTML5</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-css3 intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">CSS3</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-js intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">JavaScript</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-react intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">React</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-php intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">PHP</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-sass intro_techIcon"></i>
      <p class="intro_techName t-body--18sb">SASS</p>
    </li>
  </ul>
</section>

<!-- Work -->
<?php 
$work = [
  'kiosk-map' => [
    'title' => 'Sales Kiosk Map',
    'teaser' => 'This interactive SVG map is part of a decoupled front-end web app that consumes Drupal API data.',
    'thumb' => 'map-zoom-in.jpg',
  ],
  'map-validator' => [
    'title' => 'Map SVG Validator',
    'teaser' => 'This React app identifies potential issues with illustrated SVG map files before they are used in a sales engagement tool.',
    'thumb' => 'landing-window.png',
  ],
  'fst' => [
    'title' => 'Finishings Selection Tool',
    'teaser' => 'This Drupal-powered product helps people visualize different paint colors, cabinets, flooring, and other finishings in their new homes.',
    'thumb' => 'picker-kitchen1.jpg',
  ]
];
?>
<a id="work"></a>
<section class="work">
  <h2 class="work_sectionTitle t-title--40l">&lt; work &gt;</h2>
  <ul class="work_projectList">
    <?php foreach($work as $machine_name => $work_info) : ?>
      <li class="work_projectListItem">
        <div>
          <img src="/img/work/<?php print $machine_name; ?>/<?php print $work_info['thumb']; ?>" class="work_projectThumbImg" />
          <div class="work_projectTextWrapper">
            <h3 class="work_projectTitle t-title--30b"><?php print $work_info['title']; ?></h3>
            <p class="work_projectTeaser t-body--18l"><?php print $work_info['teaser']; ?></p>
          </div>
        </div>
        <a href="/work/<?php print $machine_name; ?>.php" class="work_projectBtn btn--primary t-title--16b t-caps">See Details</a>
      </li>
    <?php endforeach; ?>
  </ul>
</section>

<!-- About -->
<a id="about"></a>
<section class="about">
  <h2 class="about_sectionTitle t-title--40l">&lt; about &gt;</h2>
  <div class="about_contentWrapper">
    
    <div class="about_textWrapper">
      <div class="about_text">
        <p class="t-body--18l">Hi there!</p>
        <p class="t-body--18l">I’m Sharon, a front-end web developer who specializes in creating user-friendly and engaging web experiences. While I love a well-organized CSS system, JavaScript is my real passion. I enjoy building the interactivity that brings a user interface to life. I’m a strong problem solver with a keen eye for details, a skill I built through my background in graphic design.</p>
        <p class="t-body--18l">Check out some of my work above, and you can contact me at <a href="mailto:hello@sharonhartsell.com">hello@sharonhartsell.com</a>.</p>
      </div>
      <!-- <button class="about_resumeBtn btn--secondary t-title--16b t-caps">Download resume</button> -->
      <div class="about_socialLinks">
        <a href="https://www.linkedin.com/in/sharonhartsell/" class="about_socialLink" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/SharonHartsell" class="about_socialLink" target="_blank"><i class="fab fa-github"></i></a>
        <!-- <a href="#" class="about_socialLink"><i class="fab fa-codepen"></i></a> -->
      </div>
    </div>
    <div class="about_imageWrapper">
      <img src="/img/sharon-brick.jpg" class="about_image" alt="Sharon" />
    </div>
  </div>
</section>

<!-- Contact -->
<!-- <a id="contact"></a>
<section class="contact">
  <h2 class="contact_sectionTitle t-title--40l">&lt; contact &gt;</h2>
  <?php //if (empty($_POST['name'])) : ?>
    <p class="contact_instructions t-body--18l">Get in touch by emailing <a href="mailto:hello@sharonhartsell.com">hello@sharonhartsell.com</a> or by filling out the form below.</p>
    <form method="post" class="contactForm">
      <div class="contactForm_inputWrapper">
        <input type="text" id="contactForm_name" name="name" class="contactForm_text t-body--18l" required />
        <label for="contactForm_name" class="contactForm_label t-body--18l">Name</label>
      </div>
      <div class="contactForm_inputWrapper">
        <input type="email" id="contactForm_email" name="email" class="contactForm_text t-body--18l" required />
        <label for="contactForm_email" class="contactForm_label t-body--18l">Email</label>
      </div>
      <div class="contactForm_inputWrapper">
        <textarea id="contactForm_msg" name="msg" class="contactForm_textarea t-body--18l" required></textarea>
        <label for="contactForm_msg" class="contactForm_label t-body--18l">Message</label>
      </div>
      <button type="submit" class="contactForm_submitBtn btn--primary t-title--20b t-caps">Send Message</button>
    </form>
  <?php //else : ?>
    <?php
      // $name = $_POST['name'];
      // $email = $_POST['email'];
      // $msg = $_POST['msg'];
    ?>
    <div class="contactForm_thanks">
      <p class="contactForm_thanksStatus t-body--24sb">Message sent!</p>
      <p class="contactForm_thanksMsg t-body--18l">Thank you, <?php print $name; ?>, for your message. I'll be in touch soon.</p>
    </div>
  <?php //endif; ?>
</section> -->

<?php include("includes/footer.inc"); ?>
<?php include("includes/html_footer.inc"); ?>
