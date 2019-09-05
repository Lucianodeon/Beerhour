
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BEER HOUR| LOG IN</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include "nav.php" ?>
    <main class="regi"> <!-- Cuerpo principal del sitio -->
      <section class="form-container">
        <h1>Bienvenido</h1>
        <form class="access-form" action="" method="get">
          <div class="field-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="" required>
          </div>
          <div class="field-group">
            <label for="password">Contraseña</label>
            <input type="password" id="passsword" name="password" placeholder="password" value="" required>
          </div>
          <div class="field-group remember-me">
            <input type="checkbox" id="remember-me" name="remember-me" value="">
            <label for="remember-me">Recordarme</label>
          </div>
          <p class="form-text alert-hide">
            La combinación ingresada de email y contraseña no es válida.
          </p>
          <button type="submit" name="send">Ingresar</button>
        </form>
      </section>
    </main>
  </body>
</html>
