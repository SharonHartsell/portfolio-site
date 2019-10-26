<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$sample_code = file_get_contents('./code_samples/fst-package-list.php');

$content = [
  // Intro
  'title' => 'Sales Kiosk Map',
  'summary' => 'Life Plan Communities use this tool to highlight their community’s lifestyle, amenities, and inventory to prospective residents. The interactive map allows prospects to explore the community via a touch-screen kiosk where they can view multimedia content and even choose their future home.',
  'date' => '2018',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'sass', 'js', 'jquery', 'php', 'drupal'],
  'intro_img' => 'bgrd-map.jpg',

  'my_role' => [
    'Leverage Drupal API data',
    'Asynchronous JavaScript',
    'JavaScript promises',
    'High-performing CSS animations',
    'Optimized performance',
    'CSS Grid and Flexbox', 
    'HTML, CSS, JS',
    'Dynamic SVG map',
    'Web workers to asynchronously process API data',
    'Implemented façade OOP design pattern for 3rd-party media integrations',
  ],
  
  // Slideshow
  'slideshow_imgs' => [
    'https://via.placeholder.com/800x400',
    'https://via.placeholder.com/500x500',
    'https://via.placeholder.com/600x200'
  ],

  // Code
  'code_sample' => $sample_code,
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
