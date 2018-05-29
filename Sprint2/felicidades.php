<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <form style="text-align:center;"  method="post" enctype="multipart/form-data">
           Bievenido!
            <br>
            <br>
            <button> <a href="logout.php">Cerrar Sesion</a></button>
        </form>


        <pre>
        <?php
        if (!estaLogueado()) {
            header('location:login.php');
        }

        var_dump($_COOKIE);
        var_dump($_SESSION);


        ?>
        </pre>

       
    </body>
</html>
