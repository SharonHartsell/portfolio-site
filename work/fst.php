<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

// $sample_code = file_get_contents('./code_samples/fst-package-list.php');

$content = [
  'machine_name' => 'fst',

  // Intro
  'title' => 'Finishings Selection Tool',
  'summary' => 'Life Plan Communities often offer their new residents choices to customize their new home. This tool allows these residents to visualize their chosen paint colors, cabinets, flooring, and other finishings all in one place. It also calculates customization costs and provides the builder a reference during construction.',
  'date' => '2017, 2019',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'js', 'sass', 'php', 'drupal'],
  'intro_img' => 'fst-mac.png',

  'my_role' => [
    'HTML/CSS' => [
      'CSS Grid and Flexbox',
      'Custom PHP Drupal theme templates',
      'Custom Drupal forms',
      'Dynamic email templates',
    ],
    'JavaScript with jQuery' => [],
    'Design' => [
      'UI/UX design',
      'Skeleton screens',
    ],
  ],
  
  // Slideshow
  'slideshow_imgs' => [
    'intro-autocomplete.jpg',
    'packages-confirm.jpg',
    'picker-skeleton.jpg',
    'picker-kitchen1.jpg',
    'picker-kitchen2.jpg',
    'picker-kitchen3.jpg',
    'picker-overhead.jpg',
    'review.jpg',
    'thanks.jpg',
    'contract-top.jpg',
  ],

  // Code
  // 'code_sample' => $sample_code,
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
