<?php  
require_once('funciones.php')
?>


<!DOCTYPE html>
<html>
<head>
	<title>Stationary Station</title>
	  <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="contenido">
		<nav>



			<ul>
				<li> <form class="example" action="action_page.php">
 			 <input type="text" placeholder="Search.." name="search">
 			 <button type="submit"><i class="fa fa-search"></i></button>
		</form></li>



				<li><a href="index.html">Home</a></li>
				<li><a href="#"><img src="cart.png" class="carrito"></a></li>
				<li><a href="login.html">Iniciar Sesión</a></li>
				<li><a href="signup.html">Registrarse</a></li>
			</ul>

					<img src="logo.png" class="logo">

		</nav>



			<!--Categorias-->
		<div class="categorias">
			<ul class="cats">
				<li><div class="caja"><a href="categoria.html">Escritura</a></div></li>
				<li><div class="caja"><a href="categoria.html">Libros y Anotadores</a></div></li>
				<li><div class="caja"><a href="categoria.html">Señaladores</a></div></li>
				<li><div class="caja"><a href="categoria.html">Notas adhesivas</a></div></li>
				<li><div class="caja"><a href="categoria.html">Cintas y Stickers</a></div></li>
			</ul>

	</div>

<!--Slider con productos -->
	<div class="slider">

		<div class="slider-container">
  <div class="menu">
    <label for="slide-dot-1"></label>
    <label for="slide-dot-2"></label>
    <label for="slide-dot-3"></label>
  </div>

  <input id="slide-dot-1" type="radio" name="slides" checked>
    <div class="slide slide-1"></div>

  <input id="slide-dot-2" type="radio" name="slides">
    <div class="slide slide-2"></div>

  <input id="slide-dot-3" type="radio" name="slides">
    <div class="slide slide-3"></div>
</div>

	</div>


<!--Quienes Somos-->
	<div class="about">


			<h2>¿Quiénes somos?</h2> <br><br>
			<p>
			Somos una empresa que se dedica a proveer los mejores artículos para creativos y para oficinas. Ofrecemos una fran variedad de productos, desde marcadores hasta soportes de escritura.</p>
			<br>
			<p>
			Promovemos la creatividad mediante a la venta de herramientas para que tanto profesionales como aficionados puedan tenerlas al alcance de un click y a precios accesibles. <br>
			</p>
			<br>
			<p>
				Ante cualquier duda puedes visitar nuestra sección de <a href="faq.html"> Preguntas Frecuentes</a>
			</p>

		<br><br><br><br><br>
		<hr>

	</div>


<!--Lo mas vendido -->
	<h2 class="lomas">Lo más vendido!</h2>


	<div class="hotrightnow">


		<div class="hrn"><img src="img1.jpg" width="250" height="250"><br>
			<h3>Señaladores</h3>
		</div><br>

		<div class="hrn"><img src="img2.jpg" width="250" height="250">
			<br>
			<h3>Cintas decorativas</h3>
	</div><br>

		<div class="hrn"><img src="img3.jpg" width="250" height="250"><br>
		<h3>Rotuladores de colores</h3>
	</div><br>

	</div>

<br><br><br><br>


<!--Footer-->

	<div class="footer">

		<div class="column">

			<img src="twitter.png">
			<img src="instagram.png">
			<img src="facebook.png">

		</div>


		<div class="column">
			<p>
				<br>
				Envianos un mail a <a href="mailto:someone@yoursite.com">StationaryStation@gmail.com</a>
			</p>
		</div>

	</div>



	</div>

	</div> <!--Contenedor-->
</body>
</html>
