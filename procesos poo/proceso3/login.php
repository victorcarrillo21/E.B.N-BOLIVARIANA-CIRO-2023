<?php


// Conexión a la base de datos
require_once 'basedata2.php';

session_start();

// Si el usuario ya ha iniciado sesión, redirigir a la página correspondiente según su nivel
if (isset($_SESSION['users_id'])) {
  
  $_SESSION['nivel'] = $user['nivel'];

  $opcion = $user['nivel'];

  switch ($opcion) {
    case 'A':
      header('Location: index.php');
      exit;

    case 'I':
      header('Location: register.php');
      exit;

    default:
      echo 'Opción inválida';
  } 
}

if (isset($_POST['usuario']) && isset($_POST['clave'])) {

  $usuario = $_POST['usuario'];
  $contrasena = $_POST['clave'];

  $stmt = $conn->prepare('SELECT * FROM users WHERE usuario = :usuario');
  $stmt->bindParam(':usuario', $usuario);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  $message = '';

  // Verificar si las credenciales son válidas
  if ($user && password_verify($contrasena, $user['contrasena'])) {
    $_SESSION['users_id'] = $user['id'];
    $_SESSION['nivel'] = $user['nivel'];

    $opcion = $user['nivel'];

    switch ($opcion) {
      case 'A':
        header('Location: index.php');
        exit;

      case 'I':
        header('Location: index.php');
        exit;

      default:
        $message = 'Opción inválida';
    } 
  } else {
    // Mostrar un mensaje de error si las credenciales son inválidas
    $message = 'Usuario o Contraseña incorrectos';
  }
}
?>