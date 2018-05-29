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

<h2 class="cattitulo">Artículos para escritura</h2>

<div class="contcateg">
	
		<div class="product"><img src="1.jpg" width="350" height="350">
			<br>
			<h3>Marcadores Copic Neón</h3>
			<br><hr><br>
			<p>Precio: $90</p>
			<br>
			<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="2.jpg" width="350" height="350">
			<br>
			<h3>Marcador Copic Intense</h3>
			<br><hr><br>
			<p>Precio: $90</p>
			<br>
			<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="3.jpg" width="350" height="350">
		<br>
		<h3>Marcador Copic doble punta </h3>
		<br><hr><br>
		<p>Precio: $100</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="4.jpg" width="350" height="350">
		<br>
		<h3>Copic Blender doble punta</h3>
		<br><hr><br>
		<p>Precio: $120</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="5.jpg" width="350" height="350">
		<br>
		<h3>Caja de Copic Sketch</h3>
		<br><hr><br>
		<p>Precio: $1000</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="6.jpg" width="350" height="350">
		<br>
		<h3>Pilot ballpen</h3>
		<br><hr><br>
		<p>Precio: $35</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>

		<div class="product"><img src="7.jpg" width="350" height="350">
		<br>
		<h3>Pilot Hi-tech point </h3>
		<br><hr><br>
		<p>Precio: $50</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
		</div>


		<div class="product"><img src="8.jpg" width="350" height="350">
		<br>
		<h3>Lapicera</h3>
		<br><hr><br>
		<p>Precio: $60</p>
		<br>
		<div class="botton"><a href="vistaproducto.html">Ver detalle</a></div>
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
