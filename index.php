<?php
require_once('functions.php');
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  
<?php

  $auto[0]['SPZ'] = "OPRESSOR MK2";
  $auto[0]['YEAR'] = 2018;
  $auto[1]['SPZ'] = "BOMBUSHKA";
  $auto[1]['YEAR'] = 2017;
  $auto[2]['SPZ'] = "BATMAN";
  $auto[2]['YEAR'] = 1745;
  $auto[3]['SPZ'] = "Cocainer";
  $auto[3]['YEAR'] = 1999;
  $auto[4]['SPZ'] = "ŽIGULIK";
  $auto[4]['YEAR'] = 2008;

  for($i=0; $i < count($auto); $i++) { ?>
   SPZ: <?= $auto[$i]['SPZ'] ?> <br>
   <?php getCarDescription($auto[$i]['YEAR'])?><br><br>
  <?php } 
  ?>
    

  </body>
</html>