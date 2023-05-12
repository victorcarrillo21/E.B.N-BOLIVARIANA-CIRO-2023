<?php
session_start();

// Si el usuario ya ha iniciado sesión, redirigir a la página de inicio
if (isset($_SESSION['users_id'])) {
    header('Location: index.php');
    exit;
}

// Conexión a la base de datos
require 'basedata/basedata1.php';

// Manejar el inicio de sesión
if(isset($_POST['usuario']) && isset($_POST['clave'])) {
    // Buscar al usuario en la base de datos
    $stmt = $conn->prepare('SELECT id, nombre, clave, nivel FROM users WHERE nombre = :nombre');
    $stmt->bindParam(':nombre', $_POST['usuario']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si las credenciales son válidas
    if ($user && password_verify($_POST['clave'], $user['clave'])) {
        // Guardar el ID de usuario y nivel en la sesión
        $_SESSION['users_id'] = $user['id'];
        $_SESSION['users_nivel'] = $user['nivel'];

        // Redirigir al usuario a la página de inicio
        header('Location: index.php');
        exit;
    } else {
        // Mostrar un mensaje de error si las credenciales son inválidas
        $message = 'Usuario o contraseña incorrectos';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Login</title>
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                  </div>
                  <?php if(!empty($message)): ?>
                    <div class="alert alert-danger" role="alert">
                      <?= $message; ?>
                    </div>
                  <?php endif; ?>
                  <form class="user" action="login.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico..." name="correo_electronico">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" name="clave">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block"> Iniciar sesión </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">¿Olvidaste tu contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">¡Regístrate ahora!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
