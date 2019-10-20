<?php include("includes/html_header.inc"); ?>
<?php include("includes/header.inc"); ?>

<!-- Intro -->
<section class="intro section--fullHt">
  <img src="https://via.placeholder.com/300" class="intro_image" alt="Sharon" />
  <h1 class="intro_headline t-title--60b">Hi! I’m Sharon, a front-end web developer.</h1>
  <ul class="intro_techList">
    <li class="intro_techListItem">
      <i class="fab fa-html5 intro_techIcon"></i>
      <p class="intro_techName t-body--18l">HTML5</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-css3 intro_techIcon"></i>
      <p class="intro_techName t-body--18l">CSS3</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-js intro_techIcon"></i>
      <p class="intro_techName t-body--18l">JavaScript</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-react intro_techIcon"></i>
      <p class="intro_techName t-body--18l">React</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-php intro_techIcon"></i>
      <p class="intro_techName t-body--18l">PHP</p>
    </li>
    <li class="intro_techListItem">
      <i class="fab fa-sass intro_techIcon"></i>
      <p class="intro_techName t-body--18l">SASS</p>
    </li>
  </ul>
</section>

<!-- Work -->
<?php 
$work = [
  'kiosk-map' => [
    'title' => 'Sales Kiosk Map',
    'teaser' => 'Interactive SVG map in a decoupled front-end application that consumes Drupal API data.',
  ],
  'map-validator' => [
    'title' => 'Map SVG Validator',
    'teaser' => 'React-based tool to identify issues with SVG illustrated map files before they are used in the <link>sales kiosk experience</link>.',
  ],
  'fst' => [
    'title' => 'Finishings Selection Tool',
    'teaser' => 'Drupal-powered product to help people visualize different cabinets, flooring, and other finishing options in their future homes.',
  ]
];
?>
<section class="work section--fullHt">
  <h2 class="t-title--40l">&lt; work &gt;</h2>
  <ul class="work_projectList">
    <?php foreach($work as $machine_name => $work_info) : ?>
      <li class="work_projectListItem">
        <h3 class="work_projectTitle t-title--30b"><?php print $work_info['title']; ?></h3>
        <p class="t-body--18l"><?php print $work_info['teaser']; ?></p>
        <a href="/work/<?php print $machine_name; ?>.php" class="work_projectBtn btn--primary t-title--20b t-caps">See Details</a>
      </li>
    <?php endforeach; ?>
  </ul>
</section>

<!-- About -->
<section class="about section--fullHt">
  <h2 class="t-title--40l">&lt; about &gt;</h2>
  <div class="about_contentWrapper">
    <img src="https://via.placeholder.com/500" class="about_image" alt="Sharon" />
    <div class="about_text">
      <p class="t-body--18l">Lorem ipsum dolor est sit amet.</p>
      <button class="btn--secondary t-title--20b t-caps">Download resume</button>
      <div>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-codepen"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact section--fullHt">
  <h2 class="t-title--40l">&lt; contact &gt;</h2>
  <p class="t-body--18l">Get in touch by emailing hello@sharonhartsell.com or by filling out the form below.</p>
  <form method="post">
    <div>
      <label for="contactForm_name">Name</label>
      <input type="text" id="contactForm_name" name="name" />
    </div>
    <div>
      <label for="contactForm_email">Email</label>
      <input type="email" id="contactForm_email" name="email" />
    </div>
    <div>
      <label for="contactForm_msg">Message</label>
      <textarea id="contactForm_msg" name="msg"></textarea>
    </div>
    <button type="submit" class="t-title--20b t-caps">Send Message</button>
  </form>
  
  <?php if (!empty($_POST)) : ?>
  <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
  ?>
  <div>Thank you, <?php print $name; ?>, for your message!</div>
  <?php endif; ?>
</section>

<?php include("includes/footer.inc"); ?>
<?php include("includes/html_footer.inc"); ?>
