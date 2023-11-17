  <?php

  require("database.php");

  session_start();

  // ? Si hay POST validar
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
      $sql = "SELECT id, nombre, correo_electronico, contrasena_hash FROM usuarios2 WHERE correo_electronico = \"$email\"";
      $stmt = $conn->query($sql);
      $usuario = $stmt->fetch();
    } catch (PDOException $e) {
      echo "Error al obtener el usuario: " . $e->getMessage();
    }

    // ? Si la contraseña es igual al hash
    if (password_verify($password, $usuario['contrasena_hash'])) {
      // Crea la sesión si el usuario está logueado
      $_SESSION['loggedin'] = true;
      echo "<h2>¡Contraseña correcta!</h2>";
    } else {
      echo "<h2>¡Contraseña incorrecta!</h2>";
    }
  }

  ?>
