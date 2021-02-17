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