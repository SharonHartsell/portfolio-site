<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$content = [
  // Intro
  'title' => 'Sales Kiosk Map foo',
  'summary' => 'Decoupled front-end application utilizing Drupal API data.',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'sass', 'js'],
  'intro_bgrd' => 'bgrd-map.jpg',

  // Challenge
  'challenge' => 'Challenge lorem ipsum dolor est sit amet',

  // Solution
  'solution' => 'i solved stuff',
  'my_role' => [
    'made stuff',
    'made more stuff'
  ],
  'solution_img' => 'main.jpg',

  // Slideshow
  'slideshow_imgs' => [
    'slide1.jpg',
    'slide2.jpg',
    'slide3.jpg'
  ],
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
