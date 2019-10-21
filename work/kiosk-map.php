<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$content = [
  // Intro
  'title' => 'Sales Kiosk Map foo',
  'summary' => 'Life Plan Communities use this tool to highlight their community’s lifestyle, amenities, and inventory to prospective residents. The interactive map allows prospects to explore the community via a touch-screen kiosk where they can view multimedia content and even choose their future home.',
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
    'https://via.placeholder.com/800x400',
    'https://via.placeholder.com/500x500',
    'https://via.placeholder.com/600x200'
  ],
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
