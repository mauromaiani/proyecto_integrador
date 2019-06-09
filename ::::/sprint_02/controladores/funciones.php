<?php
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";

}

function validar($dts){
    $errores=[];
    $nombre = trim($dts["nombre"]);
    if(empty($nombre)){
        $errores["nombre"]= "Falta Nombre";
    }
    $email = trim($dts["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email invalido !!!!!";
    }
    $password= trim($dts["password"]);
    $repassword = trim($dts["repassword"]);
    if(empty($password)){
        $errores["password"]= "ingrese clave";
    }elseif (strlen($password)<8) {
        $errores["password"]="la pass no puede tener menos de 8 digitos";
    }elseif ($password != $repassword) {
        $errores["repassword"]="Las contraseñas no coinciden";
    }

    return $errores;
}

function inputUsuario($cmp){
    if(isset($_POST[$cmp])){
        return $_POST[$cmp];
    }
}


function armarRegistro($dts,$img){
    $usuario = [
        "nombre"=>$dts["nombre"],
        "email"=>$dts["email"],
        "password"=>$dts["password"],
        "perfil"=>1
    ];
    return $usuario;
}

function guardar($usuario){
    $jsusuario = json_encode($usuario);
    file_put_contents('usuarios.json',$jsusuario. PHP_EOL, FILE_APPEND);
}
