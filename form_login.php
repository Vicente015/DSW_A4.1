<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario validación</title>
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
    <h2>Formulario Inicio Sesión</h2>
    <form action="form.php" method="post">
      <label for="username">Usuario</label>
      <input type="text" name="username" id="username">

      <label for="email">Email</label>
      <input type="email" name="email" id="email">

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password">

      <button type="reset">Resetear</button>
      <button type="submit">Enviar</button>
    </form>
  </main>
</body>

</html>
