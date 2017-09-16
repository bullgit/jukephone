<?php

  $data = $_REQUEST;
  
  error_log(json_encode($data));
  
  $caller = $data['From'];
  
  $name = ( $people[$caller] ) ? $people[$caller] : 'here';

  header('content-type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8"?>';

?>
<Response>
  <!-- <Say language="de-DE">Hallo <?php echo $name ?>!</Say> -->
  <Say voice="alice" language="en-GB">Hello <?php echo $name ?>!</Say>
  <Gather action="/song.php">
    <!-- <Say language="de-DE">Suche dir ein Lied von der Liste mit den Zahlen aus und bestätige mit Raute.</Say> -->
    <Say voice="alice" language="en-GB">Choose a Song from the list with the keypad and confirm with the hash.</Say>
  </Gather>
</Response>
