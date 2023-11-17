  <?php
  session_start();

  // Verificar si hay sesión
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: form_login.php');
    exit;
  }

  ?>
