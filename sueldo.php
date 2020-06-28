<?php 

extract($_POST);

if ($cate==1)
{
	$res=$suel*.15;
	$result=$suel+$res;
	$x= "Tu categoria es: ".$cate."<br/>"." Su nuevo sueldo es: ".$result;
}
else if($cate==2)
{
	$res=$suel*.10;
	$result=$suel+$res;
	$x= "Tu categoria es: ".$cate."<br/>"." Su nuevo sueldo es: ".$result;
}
else if($cate==3)
{
	$res=$suel*.8;
	$result=$suel+$res;
	$x= "Tu categoria es: ".$cate."<br/>"." Su nuevo sueldo es: ".$result;
}
else if($cate==4)
{
	$res=$suel*.7;
	$result=$suel+$res;
	$x= "Tu categoria es: ".$cate."<br/>"." Su nuevo sueldo es: ".$result;
}
else{
	$x="No perteneces a ninguna categoria.";
}

include('sueldo1.php');
return $x;




 ?>