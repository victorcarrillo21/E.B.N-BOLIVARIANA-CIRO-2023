<?php

    require_once 'basedata/db.php';

    $message = '';

    if (!empty($_POST['clave']) && !empty($_POST['confirm_clave'])) {
        $contrasena = $_POST['clave'];
        $confirmcontrasena = $_POST['confirm_clave']; 

        if ($confirmcontrasena == $contrasena) {
            if (!empty($_POST['usuario']) && !empty($_POST['clave']) && !empty($_POST['corro_electronico'])) {
                $sql = "INSERT INTO users (usuario, corro_electronico, contrasena, nivel) VALUES (:usuario, :corro_electronico, :contrasena, :nivel)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':usuario',$_POST['usuario']);
                $stmt->bindParam(':corro_electronico',$_POST['corro_electronico']);
                $password = password_hash($contrasena, PASSWORD_BCRYPT);
                $stmt->bindParam(':contrasena',$password);
                
                if (!empty($_POST['dire'])) {
                    $dire = $_POST['dire'];
                    $nivel = 'A';
                    $stmt->bindParam(':nivel',$nivel);

                } else if (!empty($_POST['secre'])) {
                    $secre = $_POST['secre'];
                    $nivel = 'I';
                    $stmt->bindParam(':nivel',$nivel); 
                }

                if($stmt->execute()) {
                    $message = 'registrado con exito, usuario creado';
                } else {
                    $message = 'Lo siento, no se pudo registrar por un error.';
                }
            }
        } else {
            $message = 'Error, las contraseñas no son iguales.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

      <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.css" rel="stylesheet">

    <!--SCRIPT DEL PROFESOR-->
   <!-- <link rel="stylesheet" href="sweetalert2.min.css">-->

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" action="register.php" method="POST">

                                <?php if(!empty($message)): ?>
                                <p><?= $message ?></p>
                                <?php endif; ?>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input name="usuario" type="text" class="form-control form-control-user" 
                                            placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="corro_electronico" type="email" class="form-control form-control-user" 
                                        placeholder="Gmail" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="clave" type="password" class="form-control form-control-user"
                                            placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="confirm_clave" type="password" class="form-control form-control-user"
                                             placeholder="Confirmar Contraseña" required>
                                    </div>
                                </div>
                                <div class="form">
                                    <label> Nivel de Usuario </label>
                                <br>
                                    <input type="checkbox" name="dire">
                                    <label> Director(a) </label>
                                    <input type="checkbox" name="secre">
                                    <label> Secretario(a) </label>
                                </div>
                                    <input type="submit" value="registrar cuenta" class="btn btn-primary btn-user btn-block">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Inicia Sesion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <!-- Bootstrap core JavaScript-->
   <!--Bootstrap 3-5-2023--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="../../vendor/jquery/jquery.min.js"></script>
   <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

</body>

</html>