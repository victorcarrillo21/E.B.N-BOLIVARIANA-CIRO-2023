<?php

require_once 'basedata/basedata2.php';

$message = '';

if(!empty($_POST['alergia'])) {
    $sql4 = "INSERT INTO salud ( alergia, dieta, tratamiento_M, condicion_fisica, atencion_especial) 
    VALUE (:alergia, :dieta, :tratamiento_M, :condicion_fisica, :atencion_especial)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':alergia', $_POST['alergia']);
    $stmt->bindParam(':dieta', $_POST['dieta']);
    $stmt->bindParam(':tratamiento_M', $_POST['tratamiento_M']);
    $stmt->bindParam(':condicion_fisica', $_POST['condicion_fisica']);
    $stmt->bindParam(':atencion_especial', $_POST['atencion_especial']);

    if($stmt->execute()) {
        $message = 'registrado con exito';
    } else {
        $message = 'lo siento no se pudo registrar por un error';
    } 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/2332.css">
   
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">
                <!-- Begin Page Content -->
    <div class="container">

    <div class="container">

<div id="formulario_salud_transporte">
    <form id="#form_ciro" action="salud y transporte.php" method="post">
    <hr>
    <h5 class="collapse-header">Salud</h5>

    <!-- seccion de Salud -->
<br>
        <div class="col-sm-8">
            <label for="alergia">Alergias:</label>
            <input type="text" class="form-control" id="alergia" name="alergia" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="dieta">Dietas:</label>
            <input type="text" class="form-control" id="dieta" name="dieta" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="tratamiento_M">Tratamientos Medicos:</label>
            <input type="text" class="form-control" id="tratamiento_M" name="tratamiento_M" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="condicion_fisica">Condicion Fisica:</label>
            <textarea class="form-control" id="condicion_fisica" name="condicion_fisica" rows="2" required></textarea>
        </div>
<br>
        <div class="col-sm-8">
            <label for="atencion_especial">Atencion Especial:</label>
            <textarea class="form-control" id="atencion_especial" name="atencion_especial" rows="2" required></textarea>
        </div>
<br>      
<!-- seccion de transporte -->
<?php

require_once 'basedata/basedata2.php';

$message = '';

if(!empty($_POST['telefono'])) {
    $sql5= "INSERT INTO transporte (nombre, telefono, cedula, numero_de_placa, numero_telefonico_opcional) 
    VALUE (:nombre, :telefono, :cedula, :numero_de_placa, :numero_telefonico_opcional)";
    $stmt = $conn->prepare($sql5);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':cedula', $_POST['cedula']);
    $stmt->bindParam(':numero_de_placa', $_POST['numero_de_placa']);
    $stmt->bindParam(':numero_telefonico_opcional', $_POST['numero_telefonico_opcional']);

    if($stmt->execute()) {
        $message = 'registrado con exito';  
    } else {
        $message = 'lo siento no se pudo registrar por un error';
    } 
}
?>
    <hr>
    <h5 class="collapse-header">Transporte</h5>
<br>
        <div class="col-sm-8">
            <label for="nombre">nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="telefono">telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="cedula">Cedula:</label>
            <input type="number" name="cedula" class="form-control" maxlength="20" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="numero_de_placa">numero de placa:</label>
            <input type="text" class="form-control" id="numero_de_placa" name="numero_de_placa" required>
        </div>
<br>
        <div class="col-sm-8">
            <label for="numero_telefonico_opcional">numero telefonico opcional:</label>
            <input  type="number" class="form-control" id="numero_telefonico_opcional" name="numero_telefonico_opcional" required>
        </div>
<br>

        </form>
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
