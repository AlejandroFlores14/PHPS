<?php 

extract($_POST);
$radio=$diametro/2;
$areaC=(($radio*$radio)*3.1416)/2;
$areaT=$lado*$radio;
$Tot=$areaC+$areaT;
$x="El área total de la figura es: ".$T;



include('AreaDeFigura1.php');
return $x;




 ?>