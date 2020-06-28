<?php 

extract($_POST);
$A=$ladA-$ladC;
$areaR=$ladB*$ladC;
$areaT=($A*$ladB)/2;
$tot=$areaR+$areaT;

$x="El área total del terreno es: ".$tot;



include('formaA1.php');
return $x;




 ?>