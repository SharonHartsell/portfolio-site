<?php 

$work = [
  'kiosk-map' => [
    'title' => 'Sales Kiosk Map',
    'teaser' => 'Check it out',
  ],
  'map-validator' => [
    'title' => 'Map SVG Validator',
    'teaser' => 'Check this one out too',
  ],
  'fst' => [
    'title' => 'Finishings Selection Tool',
    'teaser' => 'The artist formerly known as Kraken',
  ]
];

?>

<section class="work section--fullHt">
  <h2>&lt; work &gt;</h2>
  <ul class="work_projectList">
    <?php foreach($work as $machine_name => $work_info) : ?>
      <li class="work_projectListItem">
        <h3><?php print $work_info['title']; ?></h3>
        <p><?php print $work_info['teaser']; ?></p>
        <a href="/work/<?php print $machine_name; ?>.php" class="work_projectBtn">See Details</a>
      </li>
    <?php endforeach; ?>
  </ul>
</section>