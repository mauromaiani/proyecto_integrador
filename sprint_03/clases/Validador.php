<?php
class Validador{
    public function validacionUsuario($usuario){

        $errores=array();
        $nombre = trim($usuario->getNombre());
        if(isset($nombre)) {
            if(empty($nombre)){
                $errores["nombre"]= "Falta tu nombre de Usuario";
            }
        }

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Revisá tu email";
        }
        $password= trim($usuario->getPassword());

        $repassword = trim($usuario->getRepassword());


        if(empty($password)){
            $errores["password"]= "Necesitas una Contraseña para entrar";
        }elseif (strlen($password)<6) {
            $errores["password"]="La Contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($repassword)){
            if ($password != $repassword) {
                $errores["repassword"]="Las Contraseñas no coinciden";
            }
        }
        if($usuario->getAvatar()!=null){
            if($_FILES["avatar"]["error"]!=0){
                $errores["avatar"]="Te falto subir tu foto de perfil";
            }else{
                $nombre = $_FILES["avatar"]["name"];
                $ext = pathinfo($nombre,PATHINFO_EXTENSION);
                if($ext != "png" && $ext != "jpg"){
                    $errores["avatar"]="La imagen debe ser png o jpg";
                }
            }
        }

        return $errores;
    }
    //Metodo creado para validar el login del usuario
    public function validacionLogin($usuario){
        $errores=array();

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());

        if(empty($password)){
            $errores["password"]= "Necesitas una Contraseña para entrar";
        }elseif (strlen($password)<6) {
            $errores["password"]="La Contraseña debe tener como mínimo 6 caracteres";
        }

        return $errores;
    }
    //Método para validar si el usuario desea recuperar su contraseña
    public function validacionOlvide($usuario){

        $errores=array();

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());

        $repassword = trim($usuario->getRepassword());


        if(empty($password)){
            $errores["password"]= "Necesitas una Contraseña para entrar";
        }elseif (strlen($password)<6) {
            $errores["password"]="La Contraseña debe tener como mínimo 6 caracteres";
        }
        if(empty($repassword)){
            $errores["repassword"]= "No olvides de repetir tu Constraseña";
        }

        return $errores;
    }


}
