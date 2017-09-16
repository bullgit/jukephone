<h1>Number: +43720231337</h1>

<?php

  require_once('songdata.php');

  foreach ($songs as $index => $s) {
    echo $index+1 . ': ' . $s['artist'] . ' - ' . $s['title'] . '<br>';
  }

?>
