<?php

require_once '../../basedata/db.php';
/*
require_once '../../Vista_admin/parte_superior.php';
*/
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

    <!--<link rel="stylesheet" href="css/2332.css"> -->
      
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
 
     <link href="../../css/sb-admin-2.css" rel="stylesheet"> 


   

<body id="page-top">
                <!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
    <div class="sidebar-brand-icon rotate-n-15"></div>
    <div class="sidebar-brand-text mx-3">PROCEDENCIA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="../../index.php">
      <span>E.B.N BOLIVARIANA</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    ADMIN
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item active">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <span>INSCRIPCION</span>
    </a>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">FASES</h6>
        <a class="collapse-item active" href="representante.php">Representante</a>
        <a class="collapse-item active" href="alumno.php">Alumno</a>
        <a class="collapse-item" href="salud_transporte.php">Salud y Transporte</a>
        <a class="collapse-item active" href="procedencia.php">Procedencia</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    ADMIN
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="../Prosecucion/persecucion.php">
      <span>PERSECUCION</span>
    </a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="../Horarios/tables.php">
      <span>HORARIOS</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
            <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
            </a>
                            
            <!-- Dropdown - User Information -->
                            
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                               
            aria-labelledby="userDropdown">
            
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="../../Login/logout.php" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Cerrar
    </a>
 </div>
  </li>
 </ul>
 </nav>



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
                        <option value="0">Seleccione un Estado</option>
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



    
    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../Login/login.php">Logout</a>
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


<?php/* require_once '../../Vista_admin/parte_inferior.php'; ?>