<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

// $sample_code = file_get_contents('./code_samples/unique-ids.js');

$content = [
  'machine_name' => 'map-validator',
  
  // Intro
  'title' => 'SVG Map Validator',
  'summary' => 'This React app streamlines the process to convert an illustrated community map file to SVG format. It empowers non-technical users to resolve any issues with the SVG file before it’s utilized in a sales engagement tool.',
  'date' => '2019',
  'company' => 'GlynnDevins',
  'live_link' => '',
  'github_link' => '',
  'tech' => ['html5', 'css3', 'sass', 'js', 'jquery', 'react'],
  'intro_img' => 'map-no-bgrd.png',

  'my_role' => [
    'React/JavaScript' => [
      'JSX',
      'File uploads',
      'Extensible validation rule pattern',
    ],
    'CSS Flexbox' => [],
    'Design' => [
      'Wireframe',
      'Adobe XD prototype',
      'UI/UX design'
    ]
  ],
  
  // Slideshow
  'slideshow_imgs' => [
    'landing-window.png',
    'map-window.png',
  ],

  // Code
  // 'code_sample' => $sample_code,
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
