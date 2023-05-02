<?php
  session_start();
  
  if (isset($_SESSION['users_id'])){
    header('Location: index.php'); 
  }

  require 'basedata/basedata2.php';
 

 if(!empty($_POST['usuario']) && !empty($_POST['clave'])) {
    $records = $conn->prepare('SELECT id, nombre, clave FROM users WHERE nombre = :nombre');
    $records->bindParam(':nombre', $_POST['nombre']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['clave'], $results['clave'])) {
        $_SESSION['users_id'] = $results['id'];
        header('Location: index.php');
    }else{
        $message = 'lo siento no se encontro su susauario';
    }
}
require_once "Vista/parte_superior.php";
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
    <title>Document</title>
    
</head>
<body>
  
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <center>
    <h1>Iniciar Sesion</h1>

    <span>or <a href="signup.php">signup</a></span>

    <form action="login.php" method="post">
        <input type="text" name="correo_electronico" class="form-control" maxlength="100" placeholder="correo electronico">
        <input type="contrasena" name="clave" class="form-control" maxlength="100" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>  
    </center>
    <?php require_once 'Vista/parte_inferior.php'; ?>  

</body>

</html>
</html>