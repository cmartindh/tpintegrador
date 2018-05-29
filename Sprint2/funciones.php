<?php
session_start();

if (isset($_COOKIE['id'])) {
    $_SESSION['id'] = $_COOKIE['id'];
}

function existeEmail($email){
    $todosPHP = traerTodos();

    foreach ($todosPHP as $usuario) {
        if ($email == $usuario['email']) {
            return $usuario;
        }
    }
    return false;
}


function existeUsuario($nombre){
    $todosPHP = traerTodos();

    foreach ($todosPHP as $usuario) {
        if ($nombre == $usuario['nombre']) {
            return $usuario;
        }
    }
    return false;
}


function validar($datos){
    $errores = [];
    $nombre = trim($datos['nombre']);
    $email = trim($datos['email']);
    $pass = trim($datos['pass']);
    $pass2 = trim($datos['pass2']);

    if ($nombre == '') {
        $errores['nombre'] = 'Por favor completa tu nombre';
    }
    elseif(existeUsuario($nombre)){
        $errores['nombre'] = 'Ese nombre de usuario ya está en uso';
    }

    if ($email == '') {
        $errores['email'] = 'Por favor completa tu email';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completa tu email, con un formato valido';
    }elseif (existeEmail($email)) {
        $errores['email'] = 'Éste email ya esta registrado, por favor elija otro email.';
    }
    if ($pass == '' || $pass2 == '' ) {
        $errores['pass'] = 'Por favor elige una contraseña';
    }elseif ($pass != $pass2) {
        $errores['pass'] = 'Tus contraseñas deben coincidir';
    }
    /*if ($_FILES[$nombreInputDelFile]['error'] !== UPLOAD_ERR_OK) {
        $errores[$nombreInputDelFile] = 'Por favor suba una foto';
    }*/

    return $errores;
}

function validarFoto($nombreInputDelFile){

    $HayFoto = true;

    if ($_FILES[$nombreInputDelFile]['error'] !== UPLOAD_ERR_OK) {
        $HayFoto = false;
    }

    return $HayFoto;

}





function traerUltimoID(){
    $todos = traerTodos();

    if (count($todos) == 0) {
        return 1;
    }

    $ultimoUsuario = array_pop($todos);

    $proximoID = $ultimoUsuario['id'] + 1;

    return $proximoID;
}

function crearUsuario($datos){
    $usuario = [
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'pass' => password_hash($datos['pass'],PASSWORD_DEFAULT),
        'id' => traerUltimoID(),
    ];

    return $usuario;
}

function guardarUsuario($user){
    $usuarioAJSON = json_encode($user);
    file_put_contents('usuario.json',$usuarioAJSON . PHP_EOL, FILE_APPEND);
}

function guardarFoto($nombreInputDelFile,$email){
    $errores = [];
    if ($_FILES[$nombreInputDelFile]['error'] === UPLOAD_ERR_OK) {
        $name = $_FILES[$nombreInputDelFile]['name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
            $archivoReal = $_FILES[$nombreInputDelFile]['tmp_name'];
            $ubicacion = dirname(__FILE__);
            $ubicacion = $ubicacion . '/img/';
            move_uploaded_file($archivoReal, $ubicacion.$email.'.'. $ext);
        }else {
            return $errores[$nombreInputDelFile] = "Extensión de archivo inválida";
        }
    }else {
     return $errores[$nombreInputDelFile] =  "No está subiendo ningún archivo";
    }
}

function traerTodos(){
    $usuariosJSON = file_get_contents('usuario.json');

    $usuariosJSONArray = explode(PHP_EOL, $usuariosJSON);

    array_pop($usuariosJSONArray);

    $usuariosArrayPHP = [];

    foreach ($usuariosJSONArray as $usarioJSON) {
        $usuariosArrayPHP[] = json_decode($usarioJSON,true);
    }

    return $usuariosArrayPHP;
}

function traerPorID($id){
    $todos = traerTodos();

    foreach ($todos as $usuario) {
        if ($usuario['id'] == $id) {
            return $usuario;
        }
    }
    return false;
}

function validarLogin($datos){
    $errores = [];
    $email = trim($datos['email']);
    $pass = trim($datos['pass']);


    if ($email == '' || $pass == '') {
        $errores['email'] = 'Faltan campos por completar';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completa tu email, con un formato valido';
    }elseif (!$usuario = existeEmail($email)) {
        $errores['email'] = 'Ese email no corresponde a ningún usuario registrado';
    }else {
        if (!password_verify($pass, $usuario['pass'])) {
            $errores['email'] = 'La constraseña es incorrecta';
        }
    }

    return $errores;
}

function loguear($usuario){
    $_SESSION['id'] = $usuario['id'];
    header('location:felicidades.php');
}

function estaLogueado(){
    return isset($_SESSION['id']);
}
