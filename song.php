<?php
  
  $data = $_REQUEST;

  require_once('songdata.php');
  
  error_log(json_encode($data));
  
  $songid = $data['Digits'] - 1;

  header('content-type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  
  $songfile = false;
  
  if (array_key_exists($songid, $songs)) {
    $song = $songs[$songid];
    
    $songtitle  = $song['title'];
    $songartist = $song['artist'];
    $songfile   = $song['file'];
  }

?>
<Response>
  <?php if ($songfile): ?>
    <!-- <Say language="de-DE">Du hörst jetzt <?php echo $songtitle ?> von <?php echo $songartist ?>.</Say> -->
    <Say voice="alice" language="en-US">You are now listening to <?php echo $songtitle ?> from <?php echo $songartist ?>.</Say>
    <Play>https://<?php echo $_SERVER['HTTP_HOST'] ?>/songs/<?php echo $songfile ?>.mp3</Play>
  <?php else: ?>
    <!-- <Say language="de-DE">Ein Lied mit dieser Nummer existiert nicht, tschüss.</Say> -->
    <Say voice="alice" language="en-US">A Song with this number doesn't exist, bye.</Say>
  <?php endif ?>
</Response>
