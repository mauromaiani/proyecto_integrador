<?php
include_once("controladores/funciones.php");
if($_POST){

  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]="Error en los datos verifique";
      }else{
        seteoUsuario($usuario,$_POST);
        if(validarUsuario()){
          echo("bienvenido");
          exit;
        }else{
          header("location: registro.php");
          exit;
        }
      }

    }




  }

}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Walk With Me</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Source+Sans+Pro:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
    <div class="container">


<!--empieza HOME ---->
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
        <a class="navbar-brand mr-auto __logo" href="index.html"><img src="img/logo_wwm.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" name="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-md-auto">
            <li>
              <a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comunidad">comunidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#caracteristicas">caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#preguntas">preguntas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">contacto</a>
            </li>
            <li class="nav-item">
              <button type="button" class="__login __botones" data-toggle="modal" data-target="#login">
                ingresar
              </button>
            </li>
            <li class="nav-item">
              <a class= "__registrarse __botones" href="registro.php">registro</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

      <div class="container" id="home">
      <section class="row align-items-center __juntos">
          <article class="__textos text-md-right text-center col-xs-12 col-md-5 col-lg-4">
            <h1 class="__titulo">Nunca más camines sola</h1>
            <p class="__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class= "__registrarse __botones" href="registro.php">registrate</a>
            <a class="__cerrar" href="#comunidad">más info</a>
          </article>
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/home.png" alt="home" class="img-responsive center-block">
          </article>
      </section>
    </div>
    <div class="text-center">
      <i class="fas fa-chevron-down __bajar"></i>
    </div>
<!--termina HOME ---->
<!--empieza LOGIN ---->
<?php
  if(isset($errores)):?>
    <ul class="alert alert-danger">
      <?php
      foreach ($errores as $key => $value) :?>
        <li> <?=$value;?> </li>
        <?php endforeach;?>
    </ul>
  <?php endif;?>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="__titulo" id="exampleModalLabel">Iniciar Sesión</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="" method="POST">
      <div class="modal-body">
        <div class="">
            <div>
            <input class="__campos" type="email" name="email" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="Email...">
            <input class="__campos" type="password" name="password" id="password" value="" placeholder="Contraseña...">
            </div>
            <div class="text-center">
            <label class="__texto"><input type="checkbox" name="recordar" id="recordarme" value="recordar">Recordarme</label>
            <br>
            <a class="__ayuda" href="#">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="__cerrar" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="__login">Entrar</button>
      </div>
    </form>
    </div>
    </div>
    </div>
<!--termina LOGIN ---->


<!--empieza COMUNIDAD ---->
    <div class="container" id="comunidad">
      <section class="row align-items-center __juntos __invertir">
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/comunidad.png" alt="comunidad" class="img-responsive center-block">
          </article>
          <article class="__textos text-md-left text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Somos una comunidad</h2>
            <p class="__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a class= "__registrarse __botones" href="registro.php">sumate</a>
            <!-- <button class="__login" type="button">login</button> -->
          </article>
      </section>
    </div>
<!--empieza COMUNIDAD ---->


<!--empieza CARACTERISTICAS ---->
    <div class="container" id="caracteristicas">
      <section class="row align-items-center __juntos">
          <article class="__textos text-md-right text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Cómo funciona</h2>
            <p class="__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- <button class="__registrarse" type="button">quiero registrarme</button> -->
            <!-- <button class="__login" type="button">login</button> -->
            <a class= "__registrarse __botones" href="registro.php">Quiero registrarme</a>
          </article>
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/caracteristicas.png" class="img-responsive center-block" alt="caracteristicas" >
          </article>
      </section>
    </div>
<!--empieza CARACTERISTICAS ---->


<!--empieza PREGUNTAS ---->
    <div class="container" id="preguntas">
      <section class="row align-items-center __juntos __invertir">
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/preguntas.png" alt="preguntas" class="img-responsive center-block">
          </article>
          <article class="__textos text-md-left text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Dudas y Preguntas</h2>
            <div id="accordion" class="__texto">
              <div>
                <div id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Pregunta #1<i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  </div>
                </div>
              </div>
              <div>
                <div id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                      Pregunta #2<i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  </div>
                </div>
              </div>
              <div>
                <div id="headingTres">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
                      Pregunta #3 <i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  </div>
                </div>
              </div>
            </div>
          </article>

      </section>
    </div>
<!--empieza PREGUNTAS ---->


<!--empieza CONTACTO ---->
    <div class="container-fluid __contacto" id="contacto">
      <h2 class="__tituloContacto text-center">Contacto</h2>
      <section class="row">
        <article class="col-xs-12 col-md-6 col-lg-6">
          <div class="text-right">
              <input class="__campos" type="text" name="nombre" value="" placeholder="Nombre">
              <input class="__campos" type="email" name="email" value="" placeholder="Email">
              <!-- <label for="com">Algun comentario?</label> -->
              <br>
              <textarea class="__campos" name="mensaje" rows="6" cols="40" placeholder="Mensaje"></textarea>
              <button type="button" class="__login">Enviar</button>
          </div>
        </article>
        <article class="__info col-xs-12 col-md-6 col-lg-6">
          <p class="__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
      </section>
    </div>

<!--empieza CONTACTO ---->

    <footer>
      <div class="container-fluid">
        <section class="row __footer">
          <p class="text-center __copyright">© 2019 All rights reserved</p>
        </section>
      </div>
    </footer>



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
