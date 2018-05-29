 	<?php require_once('funciones.php'); 

	 $nombre = '';
	 $email = '';
	 $errores = [];

        if ($_POST) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);

            $errores = validar($_POST);

            if (empty($errores)) {
                $usuario = crearUsuario($_POST);
                guardarFoto('avatar',$usuario['email'] );
                guardarUsuario($usuario);
                header('location:felicidades.php');
                exit;
               		
           		}
            }

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Regístrate Stationary Station</title>
	 <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="grandote">

<form>
	
</form>


<body>

<div class="formulario">
	

	<form method="post" enctype="multipart/form-data">
	 <label for="">Nombre de Usuario</label>
            <input type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>
            <label for="">Email</label>
            <input type="text" name="email" value="<?=$email?>">
            <br>
            <br>
            <label for="">Contraseña</label>
            <input type="text" name="pass" value="">
            <br>
            <br>
            <label for="">Repetir contraseña</label>
            <input type="text" name="pass2" value="">
            <br>
            <br>
		<label>Elige una foto:</label>
		  <br> <br>
            <input type="file" name="avatar" value="">
            <br>
            <br>
		 <input type="submit" value="Enviar" class="botton"><br><br>


		<p>
			Tambien puedes...
		<br><br><a href="login2.php">Iniciar Sesión si posees una cuenta</a><br>
			o <br><br><a href="index.html">Volver al Home</a>
		</p>

	</form>
	<br>	


		<?php if (!empty($errores)): ?>
		            <ul style="color:red;">
		                <?php foreach ($errores as $key => $error): ?>
		                     <li><?=$error?></li>
		                     <br>
		                <?php endforeach; ?>
		            </ul>
		<?php endif; ?>

</div>

</body>
</html>