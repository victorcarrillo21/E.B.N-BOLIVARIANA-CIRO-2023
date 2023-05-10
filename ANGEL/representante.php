<?php 

require_once 'basedata/basedata2.php';

$estados = $conn->query("SELECT * FROM estados"); 
$ciudades = $conn->query("SELECT * FROM ciudades"); 
$municipios = $conn->query("SELECT * FROM municipios"); 
$parroquias = $conn->query("SELECT * FROM parroquias");

$message = '';

if (!empty($_POST['r_nombre'])){   
/// Consulta preparada con PDO
$sql2 = "INSERT INTO representante (r_nombre, r_apellido, cedula, profesion,  parentesco, direccion, direccion_trabajo, telefono, telefono_trabajo, vive, telefono_opcional, id_estado, id_ciudad, id_municipio, id_parroquia, correo_electronico)
VALUES (:r_nombre, :r_apellido, :cedula, :profesion, :parentesco, :direccion, :direccion_trabajo, :telefono, :telefono_trabajo, :vive, :telefono_opcional, :id_estado, :id_ciudad, :id_municipio, :id_parroquia, :correo_electronico)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':r_nombre', $_POST['r_nombre']);
$stmt->bindParam(':r_apellido', $_POST['apellido']);
$stmt->bindParam(':cedula', $_POST['cedula']);
$stmt->bindParam(':profesion', $_POST['profesion']);
$stmt->bindParam(':parentesco',$_POST['parentesco']);
$stmt->bindParam(':direccion', $_POST['direccion']);
$stmt->bindParam(':direccion_trabajo', $_POST['direccion_tra']);
$stmt->bindParam(':telefono', $_POST['telefono']);
$stmt->bindParam(':telefono_trabajo', $_POST['telefono_tra']);
$stmt->bindParam(':telefono_opcional', $_POST['telefono_opc']);
$stmt->bindParam(':id_estado', $_POST['estado']);
$stmt->bindParam(':id_ciudad', $_POST['ciudad']);
$stmt->bindParam(':id_municipio', $_POST['municipio']);
$stmt->bindParam(':id_parroquia', $_POST['parroquia']);
$stmt->bindParam(':correo_electronico', $_POST['correo_electronico']);

if (!empty($_POST['si'])) {
    $nivel = 'Si';
    $stmt->bindParam(':vive',$nivel);

} else if (!empty($_POST['no'])) {
    $nivel = 'No';
    $stmt->bindParam(':vive',$nivel); 
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
    <title>SB Admin 2 - Buttons</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="container">

    <div class="container">

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

<div id="formulario_representante">
    <form id="#form_ciro" action="#" method="post">
    <hr>
    <h5 class="collapse-header">Datos del Representante</h5>
    <br>
    <h6 class="collapse-header">Informacion Basica:</h6>
    <br>

    <div class="col-sm-8 mb-3 mb-sm-0">
            <label for="vive"> vive ?</label>
        <input type="checkbox" name="si">
          <label> Si </label>
          
        <input type="checkbox" name="no">
          <label> No </label>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="nombre">Nombre:</label>
        <input type="text" name="r_nombre" class="form-control" maxlength="50"required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class="form-control" maxlength="50"required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" class="form-control" maxlength="20" required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
    <label for="cedula">Correo Electronico</label>
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico..." name="correo_electronico">
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" class="form-control" required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="telefono_opc">Telefono Opcional:</label>
        <input type="number" name="telefono_opc" class="form-control">
    </div>
 
    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="parentesco">Parentesco:</label>
            <?php $opcion_seleccionada="opcion2" ?>
        <select name="parentesco" class="form-control" required>
            <option value="opcion1">Padre</option>
            <option value="opcion2" <?php if ($opcion_seleccionada == "opcion2") echo "selected"; ?>>Madre (seleccionada por defecto)</option>
            <option value="opcion3">Otros</option>
        </select>
    </div>

<br>
<hr>
<h6 class="collapse-header">Direccion de donde vive:</h6>
<br>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" class="form-control" maxlength="100" required>
    </div>
    <br>
    <div class="col-sm-6">
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
<h6 class="collapse-header">informacion del trabajo:</h6>
<br>
    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="profesion">Profesión:</label>
        <input type="text" name="profesion" class="form-control" maxlength="100" required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="direccion_tra">Dirección del Trabajo:</label>
        <input type="text" name="direccion_tra" class="form-control" maxlength="100" required>
    </div>

    <div class="col-sm-8 mb-3 mb-sm-0">
        <label for="telefono_tra">Telefono del Trabajo:</label>
        <input type="number" name="telefono_tra" class="form-control" required>
    </div>
<br>

<input type="submit" value="Inscribir" >
<br>
</form>
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