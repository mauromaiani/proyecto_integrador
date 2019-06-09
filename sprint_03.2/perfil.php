<?php
require_once("autoload.php");
if(!isset($_SESSION["email"])) {
    redirect("registro.php");
}
?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master1.css">
  <title>Perfil</title>
</head>
<body>
    <div class="container">
      <section class="row align-items-center __juntos">
          <article class="__imagenes col-xs-12 col-md-4 col-lg-4">
            <img class="img-circle img-responsive center-block" src="imagenes/<?=$_SESSION["avatar"];?>" alt="Avatar" >
          </article>
          <article class="__textos text-md-left text-center col-xs-12 col-md-8 col-lg-8">
            <h2 class="__titulo">Hola <?=$_SESSION["nombre"];?> </h2>
            <p class="__texto">Bienvenida a la comunidad Walk With Me. Para comenzar a usar la red social en su totalidad tenes que completar tu perfil al 100% y agreguar contactos a tu Circulo.</p>
            <button class= "__login __botones" href="perfil.php">Perfil</button>
            <button class= "__registrarse __botones" href="perfil.php">Circulo</button>
            <br>
            <br>
            <?php if($_SESSION["role"]==9):?>
              <a href="listadoUsuariosAdmin.php"> Administración de Usuarios</a>
            <?php endif;?>
            <br>
            <br>
            <p class="__texto"> <a href="logout.php">Cerrar Sesión</a> </p>
            <!-- <button class="__login" type="button">login</button> -->
          </article>
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
