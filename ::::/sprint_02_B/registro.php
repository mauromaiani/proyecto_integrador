<?php
include_once("controladores/funciones.php");
if ($_POST){
  $errores=validar($_POST);
  if(count($errores)==0){
    $registro = armarRegistro($_POST);
    guardar($registro);
    header("location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="ES" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
  </head>
  <body>


    <div class="formulario">
      <?php
        if(isset($errores)):?>
          <ul class="alert alert-danger">
            <?php
            foreach ($errores as $key => $value) :?>
              <li> <?=$value;?> </li>
              <?php endforeach;?>
          </ul>
        <?php endif;?>
       <div class="tt">
         <h1 align="center">Crear Usuario</h1>
         <form action="" method="post" >

       </div>
       <div class="dscrp">
         <label class="inf">Nombre</label><br>
         <label class="inf">Email</label><br>
         <label class="inf">pasword</label><br>
         <label class="inf">Confirmacion</label>
       </div>
       <div class="inpts">
          <input class="inp" name="nombre" type="text" id="nombre"  value="<?=(isset($errores["nombre"]))?"": inputUsuario("nombre");?>" placeholder="Nombre">
         <input class="inp" name="email" type="email" id="email" value="<?=(isset($errores["email"]))?"": inputUsuario("email");?>" placeholder="Correo electronico">
         <input class="inp" type="password" id="password" name="password" value="" placeholder="password">
         <input class="inp" type="password" id="repassword" name="repassword" value="" placeholder="Repetir password">
       </div>
       <div class="btns">
         <label><input type="checkbox" name="recordarme">Recordarme</label>
         <button type="submit">Enviar</button>
       </form>
       </div>
     </div>
   </body>
  </html>
