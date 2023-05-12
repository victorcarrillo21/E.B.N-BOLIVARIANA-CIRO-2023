<?php
require 'basedata/basedata2.php';

        $estados = $conn->query("SELECT * FROM estados"); 
        $ciudades = $conn->query("SELECT * FROM ciudades"); 
        $municipios = $conn->query("SELECT * FROM municipios"); 
        $parroquias = $conn->query("SELECT * FROM parroquias");
        $grado = $conn->query("SELECT * FROM grado");
        $seccion = $conn->query("SELECT * FROM seccion");
        
        $message = '';

        if (!empty($_POST['nombre'])){
        $sql1 = "INSERT INTO alumno (nombre, apellido, cedula, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estados, id_ciudad, id_municipio, id_parroquia, activo, id_grado, id_seccion) 
        VALUES(:nombre, :apellido, :cedula, :genero, :fecha_nac, :lugar_nac, :direccion, :periodo_escolar, :id_estados, :id_ciudad, :id_municipio, :id_parroquia, :activo, :id_grado, :id_seccion)";
        $stmt = $conn->prepare($sql1);
        $stmt->bindParam(':nombre',$_POST['nombre']);
        $stmt->bindParam(':apellido',$_POST['apellido']);
        $stmt->bindParam(':cedula',$_POST['cedula']);
        $stmt->bindParam(':genero',$_POST['genero']);
        $stmt->bindParam(':fecha_nac',$_POST['fecha_nac']);
        $stmt->bindParam(':lugar_nac',$_POST['lugar_nac']);
        $stmt->bindParam(':direccion',$_POST['direccion']);
        $stmt->bindParam(':periodo_escolar',$_POST['periodo']);
        $stmt->bindParam(':id_estados',$_POST['estado']);
        $stmt->bindParam(':id_ciudad',$_POST['ciudad']);
        $stmt->bindParam(':id_municipio',$_POST['municipio']);
        $stmt->bindParam(':id_parroquia',$_POST['parroquia']);
        $stmt->bindParam(':id_grado',$_POST['grado']);
        $stmt->bindParam(':id_seccion',$_POST['seccion']);

        if (!empty($_POST['si'])) {
            $nivel = 'A';
            $stmt->bindParam(':activo',$nivel);

        } else if (!empty($_POST['no'])) {
            $nivel = 'I';
            $stmt->bindParam(':activo',$nivel); 
        }
        
            if($stmt->execute()) {
                $message = 'registrado con exito';
            } else {
                $message = 'lo siento no se pudo registrar por un error';
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
    <link rel="stylesheet" href="css/2332.css">
    <title>SB Admin 2 - Cards</title>

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
                
                <?php if(!empty($message)): ?>
                <p><?= $message ?></p>
                <?php endif; ?>

    <div class="col-sm-2">
        <label for="periodo">Periodo Escolar:</label>
        <input type="number" name="periodo" id="periodo" class="form-control" required>
    </div>
                    
<div id="formulario_alumno">
<form method="post" >
    <hr>
    <h5 class="collapse-header">Datos del Estudiante</h5>
    <br>
    <h6 class="collapse-header">Informacion Basica:</h6>
    <br>

    <div class="col-sm-6">
            <label> Estudiante Activo </label>
            <br>
            <input type="checkbox" name="si">
            <label> Si </label> 
            <input type="checkbox" name="no">
            <label> No </label>
        </div>
<br>
    <div class="col-sm-6">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
<br>
    <div class="col-sm-6">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" class="form-control" required>
    </div>
<br>
    <div class="col-sm-6">
        <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" id="cedula" class="form-control" required>
    </div>
<br>
    <div class="col-sm-4">
        <label for="genero">Género:</label>
        <select name="genero" id="genero" class="form-control" required>
            <option value="">Seleccione una opción</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>

    </div>
<br>
    <div class="col-sm-4">
        <label for="fecha_nac">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required>
    </div>
<br>
    <div class="col-sm-7">
        <label for="lugar_nac">Lugar de nacimiento:</label>
     <textarea class="form-control" id="lugar_nac" name="lugar_nac" rows="2" required></textarea>
    </div>

<br>
<hr>
<h6 class="collapse-header">Direccion de donde vive:</h6>
<br>
    <div class="col-sm-6">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" class="form-control" maxlength="100" required>
    </div>
<br>
<!--direccion-->
<div class="col-sm-4">
				<label>Estado</label>
		<select id="estado" name="estado" class="form-control">
            <option value="0">seleccione un Estado</option>
                <?php if (!empty($estados)) {
                    foreach ($estados as $opciones) {
                        echo '<option value="' . $opciones['id_estado'] . '">' . $opciones['id_estado'] ."-". $opciones['estado'] . '</option>';
                } }?>
		</select>

    <br>

            <label>Ciudad</label>
		<select id="ciudad" name="ciudad" class="form-control">
            <option value="0">seleccione un Ciudad</option>
                <?php $opciones['id_estado'] = $estado;
                if (!empty($ciudades)) {
                    foreach ($ciudades as $opciones) {
                        echo '<option value="' . $opciones['id_ciudad'] . '">' . $opciones['id_ciudad'] ."-". $opciones['ciudad'] . '</option>';
                } }?>

        </select>

    <br>

            <label>Municipio</label>
		<select id="municipio" name="municipio" class="form-control">
            <option value="0">seleccione un Municipio</option>
            <?php $opciones['id_estado'] = $estado;
                if (!empty($municipios)) {
                    foreach ($municipios as $opciones) {
                        echo '<option value="' . $opciones['id_municipio'] . '">' . $opciones['id_municipio'] ."-". $opciones['municipio'] . '</option>';
                } }?>
        </select>

    <br>

    <label>Parroquia</label>
		<select id="parroquia" name="parroquia" class="form-control">
            <option value="0">seleccione un Parroquia</option>
                <?php $opciones['id_estado'] = $estado;
                    if (!empty($parroquias)) {
                        foreach ($parroquias as $opciones) {
                            echo '<option value="' . $opciones['id_parroquia'] . '">' . $opciones['id_parroquia'] ."-". $opciones['parroquia'] . '</option>';
                } }?>
        </select>
    </div>
    
    <br> 
<hr>
<h6 class="collapse-header">Grado a Ingresar:</h6>
<br>
        <div class="col-sm-4">
            <label for="grado"> Grado </label>
            <select name="grado" id="grado" class="form-control" required>
                <option value="">Seleccione el grado</option>
                <?php if (!empty($grado)) {
                        foreach ($grado as $opciones) {
                            echo '<option value="' . $opciones['id'] . '">'.$opciones['numero'] . '</option>';
                } }?>
            </select>
        </div>
<br>
        <div class="col-sm-4">
            <label for="seccion"> Seccion </label>
            <select name="seccion" id="seccion" class="form-control" required>
                <option value="">Seleccione el seccion</option>
                <?php if (!empty($seccion)) {
                        foreach ($seccion as $opciones) {
                            echo '<option value="' . $opciones['id'] . '">'.$opciones['literal'] .'</option>';
                } }?>
            </select>
        </div>
<br>
    <input type="submit" value="Inscribir" >
    <input type="reset" value="Borrar">
<br>
</form>
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
<script type="text/javascript" src="select/js2.js"></script>
<script type="text/javascript" src="select/js3.js"></script>
<script type="text/javascript" src="select/js4.js"></script>