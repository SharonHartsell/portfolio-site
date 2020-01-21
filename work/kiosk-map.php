<?php 

include('../includes/html_header.inc'); 
include('../includes/header.inc');

$content = [
  'machine_name' => 'kiosk-map',
  // Intro
  'title' => 'Sales Kiosk Map',
  'date' => '2018',
  'company' => 'GlynnDevins',
  'tech' => ['html5', 'css3', 'js', 'sass', 'php', 'drupal'],
  // Challenge / Solution
  'challenge' => '',
  'solution' => '',
  'results' => '',
  'live_link' => '',
  'github_link' => '',
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
  // My Role
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
  'context_img' => 'map-on-kiosk-zoom-in.png',
  // Testimonial
  'testimonial' => 'We implemented Sales Engagement Tools in both of our discovery rooms. We started the process and expected a six-month process to achieve our 70% sales goal. The Ripple product created such a WOW factor in the sales process, <strong>it helped us achieve 100% sales in 60 days</strong>. Our sales team said on multiple occasions that the Ripple product was so impressive to our prospects and such a value-add to the process.',
  'testimonial_src' => 'Marty Jensen, Executive Director at Wyndemere',
];

include('../includes/work_detail.inc');

include('../includes/footer.inc'); 
include('../includes/html_footer.inc'); 

?>
