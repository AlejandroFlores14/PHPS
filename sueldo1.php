<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Aumento de sueldo</title>
	<link rel="stylesheet" type="text/css" href="css/e2.css"/>
</head>
<body>
	<header>
	
	<img src="img/logo.png" id="cabe"><h1 id="titu">Wallpapers</h1>
		<nav id="menuP">

               <ul >
                   <li><a href= "index.php"><h3>Inicio</h3>  </a></li>
                   
                   <li><a href= "pares.php"><h3 >Pares </h3>  </a></li>
                   
                   <li><a href= "sueldo1.php"><h3>Aumento sueldo</h3>  </a></li>
                   
                   <li><a href= "AreaDeFigura1.php"><h3>Área Figura</h3> </a></li>
                   
                   <li><a href= "Carrera1.php"><h3>Carreras</h3> </a></li>

                   <li><a href= "formaA1.php"><h3>Área de terreno</h3> </a></li>
                   
                   


                   
			   </ul> 
		</nav>
		
	</header><center>
	<section style="background-color: red;">
		<form method="post" action="sueldo.php">
			<br><br>
			<label>Introduzca su número de categoria.</label>
			<input type="text" name="cate"/><br><br>
			<label>Introduzca su sueldo actual.</label>
			<input type="text" name="suel"/><br><br>
			
			<input type="submit" value="Enviar Datos">
			<br><br>
		</form>
	</section></center>

<?php
if(isset($x))
{
	echo $x;
}
else

	

?>
<footer id="foot"> 
    <section id="izq">
      <p id="top">Bernardo Alejandro Sánchez Flores</p>
      <p>12/06/2020</p>
      <p>Correo Electronico:familiaflores019@gmail.com</p>
      
    </section>
  <section id="dere">
      <p id="top"><img  src="img/alex.jpg" ></p>
      
      
    </section>

  </footer>
</body>
</html>