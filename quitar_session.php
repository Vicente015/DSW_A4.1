  <?php
  session_start();
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
      body {
        margin: 0;
        display: grid;
        place-items: center;
      }
    </style>
  </head>

  <body>

    <main>
      <h2>Su sesión ha sido borrada</h2>
      <ul>
        <li><a href="form_login.php">Volver al login</a></li>
        <li><a href="privada.php">Ir a página privada</a></li>
      </ul>
    </main>

    <?php
    // Eliminar todas las variables de sesión
    session_unset();

    // Eliminar la sesión
    session_destroy();
    ?>

  </body>

  </html>
