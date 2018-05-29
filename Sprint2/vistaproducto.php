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


	<!--Detalles del prodcuto-->

		<div class="detalles">


			<div class="imagenprod"><img src="1.jpg" width="500" height="500">
			<br><br>
			<p>Los marcadores Copic Neón vienen en 12 colores diferentes, lo que te permitirá crear una gran cantidad de colores que necesites. </p>
			</div>


			<div class="productodt">
				<br>
				<h3>Marcadores Copic Neón</h3>
				<br>
				<p> Los marcadores Copic Neón poseen una intensidad jamás vista en otros marcadores, incluso es nuestras pevias líneas de colores intensos.</p> <br>
				<p>
				Son perfectos para dar color a tus proyectos y resaltar todo lo que consideres importante.</p>
				<br><hr><br>
				<p>Precio: $90</p>
				<br>
				<div class="botton"><a href="">Agregar al Carrito</a></div>
				<br>
				<hr><br>
				<p><h4>Condiciones de envío</h4></p><br>
				<p>
					Los envíos puede realizarse mediante a los siguientes medios:</p><br>
				<p>
					-MercadoEnvíos. <br>
					-Correo Argentino. <br>
					-OCA. <br>
					-Correo Andreani. <br>
				</p>
				<br>

				<p class="moto">

					En el caso de requerir envío inmediato también ofrecemos servicio de moto mensajería a convenir con el cliente. Para acceder a este servicio por favor comuníquese con nosotros a nuestra casilla de <a href="mailto:StationaryStation@gmail.com">e-mail</a>.				

				</p>

			</div>
		</div>





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
