<?php 

require_once('funciones.php');

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


<!--Contenido de la categoría-->
<br><br>

<h2 class="preguntas">Preguntas Frecuentes</h2>

<div class="faq">

		<div class="pregu">
			<br>
			<h3>¿Realizan envíos al exterior?</h3><br>
			<p>Por el momento solo realizamos envíamos dentro del territorio argentino, pero tenemos planes de expandirnos al exterior en un futuro cercano.</p>
		</div>

		<div class="pregu">
			<br>
			<h3>¿Traen artículos de librería a pedido?</h3><br>
			<p>No por el momento.</p>
		</div>

		<div class="pregu">
			<br>
			<h3>¿Realizan descuentos para estudiantes?</h3><br>
			<p>Sí, para conocer más sobre eso escribinos a nuestra <a href="mailto:StationaryStation@gmail.com">casilla de e-mail.</a></p>
		</div>

		<div class="pregu">
			<br>
			<h3>¿Los productos son originales o réplica?</h3><br>
			<p>Los productos en nuestro sitio son 100% originales, nos especializamos en la importación y comercialización de los mismos. </p>
		</div>


		</div>








</div>
<br><br><br>
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




	</div> <!--Contenedor-->
</body>
</html>
