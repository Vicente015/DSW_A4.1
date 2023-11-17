  <?php
  require("session.php");
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página privada</title>
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
      <h2>Tienes acceso a la página privada 👻</h2>
      <a href="quitar_session.php">Eliminar la sesión</a>
    </main>
  </body>

  </html>
