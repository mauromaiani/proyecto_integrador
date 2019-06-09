<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/login.css">
     <title>Login</title>
  </head>
  <body>
    <div class="formulario">

      <div class="tt">
        <h1 align="center">Inicia sesiòn</h1>
      </div>
      <form action="" method="POST">
      <div class="inpts">
        <input class="inp" name="email" type="text" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="Email"/>
        <input class="inp" type="password" name="password" id="password" value="" placeholder="Contraseña">
      </div>
      <div class="btns">
        <label><input type="checkbox" name="recordarme" id="recordarme" value="recordar">Recordarme</label>
        <button type="submit">Entrar</button>
        <a class="help" href="#">¿Olvidaste tu contraseña?</a>
      </div>
    </form>

    </div>
  </body>
  </html>
