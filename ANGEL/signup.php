<?php
    require_once "Vista/parte_superior.php";

    require 'basedata/basedata2.php';

    $message = '';

    $contrasena = $_POST['clave'];
    $confirmcontrasena = $_POST['confirm_clave'];
    $dire = $_POST['dire'];
    $secre = $_POST['secre'];
    
    if ( $confirmcontrasena == $contrasena ){

        if(!empty($_POST['nombre']) && !empty($_POST['clave'] )) {
            $sql = "INSERT INTO users (nombre, corro_electronico, clave, nivel) VALUES(:nombre, :correo_electronico, :clave, :nivel)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre',$_POST['nombre']);
            $stmt->bindParam(':correo_electronico',$_POST['correo_electronico']);
            $password = password_hash($_POST['clave'], PASSWORD_BCRYPT);
            $stmt->bindParam(':clave', $password);
    
        if (!empty($_POST['secre'])){
            $secretaria = 'Secretario(a)';
            $stmt->bindParam(':nivel',$secretaria); 

        }else if (!empty($_POST['dire'])) {
            $directora = 'Director(a)';
            $stmt->bindParam(':nivel',$directora); 
        }

            if($stmt->execute()) {
                $message = 'registrado con exito, usuario creado';
            } else {
                $message = 'lo siento no se pudo registrar por un error';
            }   
        }
    } else {
                $message = 'error las contraseñas no son iguales';
            }   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/sb-admin-2min.css">
    <title>registro</title>
</head>
<body>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <center>
    <h1>Registrar</h1>
    <span>or <a href="login.php">login</a></span>
 
    <form action="signup.php" method="POST">
        <input type="text" name="nombre" placeholder="Usuario" class="form-control" required>
        <input type="text" name="correo_electronico" placeholder="correo electronico" class="form-control" required>
        <input type="contrasena" name="clave" placeholder="Contraseña" class="form-control" required>
        <input type="contrasena" name="confirm_clave" placeholder="Confirmar Contraseña" class="form-control" required>
        
        <div class="form">
            <label> Nivel de Usuario </label>
                <br>
          <input type="checkbox" name="dire">
          <label> Director(a) </label>
          
          <input type="checkbox" name="secre">
          <label> Secretario(a) </label>
        </div>

        <br>
        <input type="submit" value="Submit">
    </form>
    </center>
    <?php require_once "Vista/parte_inferior.php";?>
</body>
</html>