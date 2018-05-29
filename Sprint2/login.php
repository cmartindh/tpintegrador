
<?php require_once('funciones.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicia Sesión en Stationary Station</title>
	 <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="grandote">

	   <?php
        
        if (estaLogueado()) {
            header('location:felicidades.php');
        }

        $email = '';
        $errores = [];

        if ($_POST) {
            $email = trim($_POST['email']);

            $errores = validarLogin($_POST);

            if (empty($errores)) {
                $user = existeEmail($email);

                if (isset($_POST['recordarme'])) {
                    setcookie('id', $user['id'], time() + 3600 * 24 * 30 );
                }

                loguear($user);
            }

        }

         ?>

<form>

</form>


<body>

<div class="formulario">


	<form method="post" enctype="multipart/form-data">
		  <label for="">Email</label>
            <input type="text" name="email" value="<?=$email?>">
            <br>
            <br>
            <label for="">Contraseña</label>
            <input type="text" name="pass" value="">
            <br>
            <br>
            <label for="">Recordarme</label>
            <input type="checkbox" name="recordarme">
            <br>
            <br>
            <button type="submit">Iniciar Sesión</button><br><br>

		<p>
			Tambien puedes...
		<br><br><a href="signup.php">Registrarte</a><br>
			o <br><br><a href="index.php">Volver al Home</a>
		</p>

	</form>

<br><br>
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
