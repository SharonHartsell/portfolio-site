<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$sample_code = file_get_contents('./code_samples/fst-package-list.php');

$content = [
  // Intro
  'title' => 'Finishings Selection Tool',
  'summary' => 'Life Plan Communities often offer their new residents choices to customize their new home. This tool allows these residents to visualize their chosen paint colors, cabinets, flooring, and finishings all in one place. The Finishings Selection Tool also captures pricing information.',
  'date' => '2018-19',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'sass', 'js', 'jquery', 'php', 'drupal'],
  'intro_img' => 'bgrd-map.jpg',

  'my_role' => [
    'Style custom Drupal forms',
    'Customized PHP theme templates',
    'Built and styled HTML email',
    'Implemented skeleton screens',
    'CSS Grid and Flexbox', 
    'HTML, CSS, JS',
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
