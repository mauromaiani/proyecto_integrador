<?php
require_once("autoload.php");
if ($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );

  $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
  if(count($errores)==0){
    $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());
    if($usuarioEncontrado != null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $avatar = $registro->armarAvatar($usuario->getAvatar());
      $registroUsuario = $registro->armarUsuario($usuario,$avatar);
      $json->guardar($registroUsuario);
      redirect ("login.php");
    }
  }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master1.css">
  <title>Registro</title>
</head>

<body>
  <div class="container">
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>


    <section class="row text-center">
      <article class="col-8 col-md-6 col-xl-6" >
          <h2 class="__titulo">Registrate</h2>
          <form action="" method="POST" enctype= "multipart/form-data"  >
            <input class="__campos" name="nombre" type="text" id="nombre"  value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>" placeholder="Usuario" />
            <br>
            <input class="__campos" name="email" type="text" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="eMail"/>
            <br>
            <input class="__campos" name="password" type="password" id="password" value="" placeholder="Contraseña (mínimo 6 caracteres)" />
            <br>
            <input class="__campos" name="repassword" type="password" id="repassword" value="" placeholder="Repetir Contraseña" />
            <br>
            <label class="__texto" for="">Subí la foto de tu perfil:</label>
            <input class="__texto" type="file" name="avatar" value=""/>
            <br>
            <button class=" __cerrar" type="reset">Restablecer</button>
            <button class=" __registrarse" type="submit">Enviar</button>
          </form>

      </article>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
