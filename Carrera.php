<?php 

extract($_POST);

//Economía
if ($sem>=6 and $prom>=8.8)
{
	
	$x= "Matricula: ".$mat."<br/>"."Carrera: Economía "."<br/>"." Has sido Aceptado! ";
}
//Computación
else if($sem>6 and $prom>8.5)
{
	
	$x= "Matricula: ".$mat."<br/>"."Carrera: Computación "."<br/>"." Has sido Aceptado! ";
}
//Administración
else if($sem>5 and $prom>8.5)
{
	$x= "Matricula: ".$mat."<br/>"."Carrera: Administración "."<br/>"." Has sido Aceptado! ";
}
//Contabilidad
else if($sem>5 and $prom>8.5)
{
	$x= "Matricula: ".$mat."<br/>"."Carrera: Contabilidad "."<br/>"." Has sido Aceptado! ";
}
else{
	$x="No fuiste aceptado en ninguna carrera.";
}

include('Carrera1.php');
return $x;





 ?>