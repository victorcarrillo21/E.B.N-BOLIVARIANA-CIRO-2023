<?php
    require_once '../basedata/db.php';

        session_start();

        if(isset($_GET['cerrar_sesion'])){ 

                session_unset();

                session_destroy();



        }

            if(isset($_SESSION['rol'])){
                switch($_SESSION['rol']){
                            case 1:
                                header('location: index.php');

                                break;

                                case 2:
                                    header("location:index_admin.php");
                                        break;


                                    default:


                }

            
            }

                    if(isset($_POST['username']) && isset($_POST['password'])){

                        $username =$_POST['username'];
                        $password =$_POST['password'];

                        $dsn= new PDO();
                        $conn_pdo= $dsn->connect()->prepare('SELECT*FROM usuarios WHERE username=:username AND password=:password');
                        $conn_pdo->execute(['username'=>$username,'password'=>$password]);

                        $row = $conn_pdo->fetch(PDO::FETCH_NUM);

                        if($row == true){
                            // VALIDACION
                        }else{
                                        
                            echo "el usuario o contraseña son incorrecta";
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
  
  
                      <!--Sweetaler2-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.min.css">
  
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

  
   <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles Sweetalert2 for this template-->

    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <link rel="stylesheet" href="../css/sweetalert2.css">
    

  

      <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


</head>







<body class="bg-gradient-primary">
  <div class="container-fluid col-lg-12 login-cambios">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">                     <!--CAMBIOS bg-login-image-ciro-2023-->
              <div class="col-lg-6 d-none d-lg-block bg-login-image-ciro-2023"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                  </div>
                  <form class="user" action="index.php" method="POST">

                    <?php if(!empty($message)): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $message; ?>
                      </div>

                  <?php endif; ?>

                    <div class="form-group">
                      <label for="exampleUserName  align-content-center">USUARIO</label>  
                      <input type="text" class="form-control  form-control-user" id="exampleUserName" aria-describedby="emailHelp" placeholder="Ingrese su nombre..." name="username">
                    </div>

                    <div class="form-group">   
                      <input type="password" class="form-control  form-control-user" id="exampleInputPassword" placeholder="Contraseña" name="password">
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







   <!--Bootstrap 3-5-2023--> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="../vendor/jquery/jquery.min.js"></script>
   <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Sweetalert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    
</body>
</html>
