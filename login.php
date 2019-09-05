
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BEER HOUR| LOG IN</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include "nav.php" ?>
    <main class="regi"> <!-- Cuerpo principal del sitio -->
      <section class="form-container">
        <h1>Bienvenido</h1>
        <form class="access-form-log" action="" method="get">
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
            La combinación ingresada de email y contraseña no es válida.
          </p>
          <button class="botonlog" type="submit" name="send">Ingresar</button>
        </form>
      </section>
    </main>
  </body>
</html>
