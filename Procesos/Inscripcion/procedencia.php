<?php

require_once '../../basedata/db.php';

require_once '../../Vista_admin/parte_superior.php';

$estados = $conn_pdo->query("SELECT * FROM estados"); 
$ciudades = $conn_pdo->query("SELECT * FROM ciudades"); 
$municipios = $conn_pdo->query("SELECT * FROM municipios"); 
$parroquias = $conn_pdo->query("SELECT * FROM parroquias");

$message = '';

if(!empty($_POST['de_donde_proviene'])) {

    // sql4 de Angel
    $sql = "INSERT INTO procedencia (de_donde_proviene, motivo, direccion, id_estado, id_ciudad, id_municipio, id_parroquia) 
    VALUE (:de_donde_proviene, :motivo, :direccion, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)";
    $stmt = $conn_pdo->prepare($sql);
    $stmt->bindParam(':de_donde_proviene', $_POST['de_donde_proviene']);
    $stmt->bindParam(':motivo', $_POST['motivo']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':id_estado', $_POST['estado']);
    $stmt->bindParam(':id_ciudad', $_POST['ciudad']);
    $stmt->bindParam(':id_municipio', $_POST['municipio']);
    $stmt->bindParam(':id_parroquia', $_POST['parroquia']);

    if($stmt->execute()) {
        $message = 'registrado con exito, usuario creado';
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
  <!-- Custom fonts for this template-->
     
  <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/ebn.css" rel="stylesheet">
   <!-- <link href="../../css/sb-admin-2.css" rel="stylesheet">-->

    <!-- 24/5/2023 -->

    <link rel="stylesheet" type="text/css"href="../../vendor/datatables/datatables.min.css">

    <!-- 24/5/2023 -->

    <link rel="stylesheet" href="../../vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
  

<body id="page-top">
              
<div class="container">
        <div id="formulario_procedencia">
            <form action="procedencia.php" method="post">
                <hr>
                <h5 class="collapse-header">Procedencia</h5>
                <br>
                <div class="form-group">
                    <label for="de_donde_proviene">De donde proviene:</label>
                    <textarea class="form-control" id="de_donde_proviene" name="de_donde_proviene" rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="motivo">Motivo del cambio:</label>
                    <textarea class="form-control" id="motivo" name="motivo" rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Estado</label>
                    <select id="estado" name="estado" class="form-control">
                        <option value="0">Seleccione unEstado</option>
                        <?php foreach ($estados as $estado): ?>
                            <option value="<?php echo $estado['id_estado']; ?>"><?php echo $estado['id_estado'] . "-" . $estado['estado']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Ciudad</label>
                    <select id="ciudad" name="ciudad" class="form-control">
                        <option value="0">Seleccione una Ciudad</option>
                        <?php if (!empty($ciudades)) {
                            foreach ($ciudades as $ciudad): ?>
                                <option value="<?php echo $ciudad['id_ciudad']; ?>"><?php echo $ciudad['id_ciudad'] . "-" . $ciudad['ciudad']; ?></option>
                            <?php endforeach;
                        } ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Municipio</label>
                    <select id="municipio" name="municipio" class="form-control">
                        <option value="0">Seleccione un Municipio</option>
                        <?php if (!empty($municipios)) {
                            foreach ($municipios as $municipio): ?>
                                <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['id_municipio'] . "-" . $municipio['municipio']; ?></option>
                            <?php endforeach;
                        } ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Parroquia</label>
                    <select id="parroquia" name="parroquia" class="form-control">
                        <option value="0">Seleccione una Parroquia</option>
                        <?php if (!empty($parroquias)) {
                            foreach ($parroquias as $parroquia): ?>
                                <option value="<?php echo $parroquia['id_parroquia']; ?>"><?php echo $parroquia['id_parroquia'] . "-" . $parroquia['parroquia']; ?></option>
                            <?php endforeach;
                        } ?>
                    </select>
                </div>
                <br>
                <input type="submit" value="Enviar">
            </form>
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

    <script type="text/javascript" src="../../vendor/datatables/datatables.min.js"></script>    
     
</body>
</html>


<?php require_once '../../Vista_admin/parte_inferior.php'; ?>