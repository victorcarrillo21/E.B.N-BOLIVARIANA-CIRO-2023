<?php 

  session_start();

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

  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
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

                  <form class="user" action="login.inc.php" method="POST">

                    <?php if(!empty($message)): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $message; ?>
                      </div>
                    <?php endif; ?>

                    <div class="form-group">
                      <label for="usuario">Usuario:</label>
                      <input type="text" class="form-control form-control-user" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su usuario...">
                    </div>

                    <div class="form-group">
                      <label for="clave">Contraseña:</label>
                      <input type="password" class="form-control form-control-user" id="clave" name="clave" placeholder="Ingrese su usuario..." >
                    </div>

                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Iniciar sesión">
                    <input type="reset" class="btn btn-danger btn-user btn-block" value="Limpiar">

                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">¿Olvidaste tu contraseña?</a>
                  </div>
                  <div class="text-center">
                  <?php
                    if (isset($_SESSION["userid"])){
                      ?>
                    <a href="#"><?php echo $_SESSION["userid"]; ?></a>
                    <br>
                    <a href="include/logout.inc.php" class="header-login-a">logout</a>
                    <?php }else{?> 
                    <a href="signup.php" class="header-login-a">registrate</a>
                    <br>
                    <a href="#" class="header-login-a">login</a>
                    <?php } ?>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  
</body>
</html>
