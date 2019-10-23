<?php

include "init.php";

if($auth->usuarioLogueado()){
  header("Location:indexuser.php");
  exit;
}
$errores = [];

if($_POST){

  // $errores = validarLogin($_POST);
  $errores = Validador::validarLogin($_POST);
  //var_dump($errores);

  if(!$errores){
    $auth->loguearUsuario($_POST["email"]);
      header("Location:index.php");
      exit;
  }

}




?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BEER HOUR| LOG IN</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  </head>
  <body class="regi">
    <?php include "nav.php" ?>
    <main class="logi"> <!-- Cuerpo principal del sitio -->
      <section class="form-container">
        <h1>Bienvenido</h1>
        <form class="access-form-log" action="login.php" method="POST" enctype="multipart/form-data">
          <div class="field-group">
            <label class=logform for="email">Email</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Email" value="" required>
          </div>
          <br>
          <div class="field-group">
            <label class="logform" for="password">Contraseña</label>
            <br>
            <input type="password" id="passsword" name="password" placeholder="Contraseña" value="" required>
          </div>
          <br>
          <div class="field-group remember-me">
            <input type="checkbox" id="remember-me" name="remember-me" value="">
            <label class="logform" for="remember-me">Recordarme</label>
          </div>
          <p class="form-text alert-hide">
            <small class="form-text text-danger">
              <?php if(isset($errores["password"] )): ?>
                <?= $errores["password"]  ?>
              <?php endif ?>
             </small>
          </p>
          <button class="botonlog" type="submit" name="send">Ingresar</button><br><br>
          <button type="button" class="botonlog"><img src="" alt=""><strong>Olvide mi Contraseña</strong></button>
            </form>
            <h3 class="botonreg">¿Primera vez?</h3>
            <form class="botonreg" action="register.php" method="POST">
            <input class="botonreg" type="submit" name="" value="¡REGISTRATE!">
            </form>


      </section>
    </main>
  </body>
</div>
</html>
