<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

//$sample_code = file_get_contents('./code_samples/fst-package-list.php');

$content = [
  'machine_name' => 'kiosk-map',
  // Intro
  'title' => 'Sales Kiosk Map',
  'summary' => 'Life Plan Communities use this tool to highlight their community’s lifestyle, amenities, and inventory to prospective residents. The interactive map allows prospects to explore the community via a touch-screen kiosk where they can view multimedia content and even choose their future home.',
  'date' => '2018',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'js', 'sass', 'php', 'drupal'],
  'intro_img' => 'map-on-kiosk-zoom-in.png',



  'my_role' => [
    'HTML/CSS' => [
      'CSS Flexbox',
      'Optimized CSS animations',
    ],
    'JavaScript' => [
      'Dynamic SVG map',
      'Asynchronous JavaScript with Promises',
      'Web Workers',
      'Drupal API data manipulation',
      'Zoom, center, and rotation calculations for SVG',
      '3rd-party media integration (YouTube, Vimeo, Wistia)',
    ],
    'Documentation and training' => [],
  ],
  
  // Slideshow
  'slideshow_imgs' => [
    'map-zoom-out.jpg',
    'map-zoom-in.jpg',
    'map-levels-drawer.jpg',
    'map-floor-plan-drawer.jpg',
    'map-floor-plan-toggle.jpg',
    'unit-modal-3d.jpg',
    'unit-modal-2d.jpg',
    'unit-modal-video.jpg',
    'unit-modal-gallery.jpg',
  ],

  // Code
  //'code_sample' => $sample_code,
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
