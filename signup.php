<?php
    require_once "Vista/parte_superior.php";

    require 'basedata/db.php';

    $message = '';

    if (isset($_POST['clave']) && isset($_POST['confirm_clave']) && isset($_POST['dire']) && isset($_POST['secre'])) {
        $contrasena = $_POST['clave'];
        $confirmcontrasena = $_POST['confirm_clave'];
        $dire = $_POST['dire'];
        $secre = $_POST['secre'];

        if ($confirmcontrasena == $contrasena) {
            if (!empty($_POST['nombre']) && !empty($_POST['clave']) && !empty($_POST['correo_electronico'])) {
                $sql = "INSERT INTO users (nombre, correo_electronico, clave, nivel) VALUES (:nombre, :correo_electronico, :clave, :nivel)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombre', $_POST['nombre']);
                $stmt->bindParam(':correo_electronico', $_POST['correo_electronico']);
                $password = password_hash($_POST['clave'], PASSWORD_BCRYPT);
                $stmt->bindParam(':clave', $password);
                
                if (isset($_POST['dire'])) {
                    $nivel = 'Director(a)';
                } else if (isset($_POST['secre'])) {
                    $nivel = 'Secretario(a)';
                } else {
                    $nivel = '';
                }
                $stmt->bindParam(':nivel', $nivel);

                if ($stmt->execute()) {
                    $message = 'Registrado con éxito, usuario creado.';
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/sb-admin-2min.css">
    <title>Registro</title>
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
        <input type="text" name="correo_electronico" placeholder="Correo electrónico" class="form-control" required>
        <input type="password" name="clave" placeholder="Contraseña" class="form-control" required>
        <input type="password" name="confirm_clave" placeholder="Confirmar Contraseña" class="form-control" required>
        
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
