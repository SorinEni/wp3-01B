<?php

function getCarDescription(int $year):void {


switch ($year) {
    case $year < 1960: 
        echo "To je fakt veterán!";
        break; 
    case $year < 1990: 
        echo "Auto by na silnici už raději být nemělo";
        break;
    case $year < 2000: 
        echo "Budete platit velkou silniční daň i povinné ručení";
        break;
    case $year < 2010: 
         echo "Navštěvujte servis pravidelně" ;
        break; 
    default:
        echo "Auto je způsobilé";  

} 

}

function spz():void {
  

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
  
    
}