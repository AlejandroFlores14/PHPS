<!DOCTYPE html>
<html>
<head>
	<title>Números Pares</title>
	<link rel="stylesheet" type="text/css" href="css/e2.css"/>
</head>
<body><header>
	
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
		
	</header>
<section style="background-color: yellow;"> 
<?php 
	
	$suma=0;
		

	for ($num=1; $num<=100 ; $num++) { 
		if ($num%2==0) {
			echo $num."<br/>";

			$suma=$suma+$num;
			
		}
		

	}

	$res="Los números pares son: ".$num/2;
	$resul="La suma es: ".$suma; 
	
	echo $res."<br/>";

	echo $resul."<br/>";


	?>
	</section>
	<footer > 
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