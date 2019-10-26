<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$sample_code = file_get_contents('./code_samples/unique-ids.js');

$content = [
  'machine_name' => 'map-validator',
  
  // Intro
  'title' => 'SVG Map Validator',
  'summary' => 'React-based tool to identify issues with SVG illustrated map files before they are used in the <link>sales kiosk experience</link>.',
  'date' => '2019',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'sass', 'js', 'jquery', 'react'],
  'intro_img' => 'map-no-bgrd.png',

  'my_role' => [
    'Accept, validate, and display user-uploaded file',
    'Report any duplicate shape IDs',
    'Establish extensible OOP validator rules list',
    'CSS Flexbox',
    'HTML, CSS, JS + React',
  ],
  
  // Slideshow
  'slideshow_imgs' => [
    'landing-window.png',
    'map-window.png',
  ],

  // Code
  'code_sample' => $sample_code,
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
