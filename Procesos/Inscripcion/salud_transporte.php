<?php
/*

require_once '../../basedata/db.php';
require_once '/../../Vista_admin/parte_superior.php'; 
$message = '';
*/

// LAS VARIABLES QUÉ USAN ANGEL SON sql4 para insert y prepare sql4

if(!empty($_POST['alergia'])) {
    $conn_pdo = "INSERT INTO salud_alumno ( alergia, dieta, tratamiento_M, condicion_fisica, atencion_especial) 
    VALUES (:alergia, :dieta, :tratamiento_M, :condicion_fisica, :atencion_especial)";
    $stmt = $conn->prepare($conn_pdo);
    if (!$stmt) {
        // manejar el error
    }
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

    <title>E.B.N BOLIVARIANA - ALUMNO</title>

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
 
     <link href="../../css/sb-admin-2.css" rel="stylesheet"> 

    <!-- 24/5/2023 -->

    <link rel="stylesheet" type="text/css"href="../../vendor/datatables/datatables.min.css">

    <!-- 24/5/2023 -->

    <link rel="stylesheet" href="../../vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
  

</head>

<body id="page-top">

   <!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
    <div class="sidebar-brand-icon rotate-n-15"></div>
    <div class="sidebar-brand-text mx-3">SALUD Y TRANSPORTE</div>
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
                               
            <!-- <a class="dropdown-item" href="#">
                                    
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    
            Profile
                                
        </a>
                                
        <a class="dropdown-item" href="#">
                                    
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                   
        Settings
                                
    </a>
                                
    <a class="dropdown-item" href="#">
                                    
    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                   
    Activity Log
                                
</a> -->
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="../../Login/logout.php" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Cerrar
    </a>
 </div>
  </li>
 </ul>
 </nav>













<div class="container-fluid">

<div>
  <!-- form id:form_ciro --> 
    <form action="salud_transporte.php" method="post">
        <hr>
        <h5 class="collapse-header">Salud</h5>

   <!-- Seccion de Salud -->
   <div class="row">
  <div class="col-sm-4">
    <label for="alergia1">Alergias:</label>
    <input type="text" class="form-control mb-3" id="alergia1" name="alergia1" placeholder="Ej: Nueces" required>
  </div>
  
  <div class="col-sm-4">
    <label for="alergia2">Alergias:</label>
    <input type="text" class="form-control mb-3" id="alergia2" name="alergia2" placeholder="Ej: Nueces" required>
  </div>

  <div class="col-sm-4">
    <label for="alergia3">Alergias:</label>
    <input type="text" class="form-control mb-3" id="alergia3" name="alergia3" placeholder="Ej: Nueces" required>
  </div>
</div>


<div class="col-mb-8">
<label for="dieta">Dietas:</label>
<input type="text" class="form-control mb-3" id="dieta" name="dieta" required>
</div>

<div class="col-mb-8">
<label for="tratamiento_M">Tratamientos Medicos:</label>
<input type="text" class="form-control mb-3" id="tratamiento_M" name="tratamiento_M" required>
</div>

<div class="col-large-8">
<label for="condicion_fisica">Condicion Fisica:</label>
<textarea class="form-control mb-5"  id="condicion_fisica" name="condicion_fisica" rows="2" required></textarea>
</div>

<div class="col-large-8">
<label for="atencion_especial">Atencion Especial:</label> <textarea class="form-control mb-5"  id="atencion_especial" name="atencion_especial" rows="2" required></textarea>
 </div>

        <!-- Seccion de Transporte -->
        <?php
            require_once '../../basedata/db.php';

            $message = '';

            if (!empty($_POST['telefono'])) {
                $conn_pdo = "INSERT INTO transporte (nombre, telefono, cedula, numero_de_placa, numero_telefonico_opcional) 
                VALUES (:nombre, :telefono, :cedula, :numero_de_placa, :numero_telefonico_opcional)";
                $stmt = $conn->prepare($conn_pdo);
                if (!$stmt) {
                    // manejar el error
                }

                $stmt->bindParam(':nombre', $_POST['nombre']);
                $stmt->bindParam(':telefono', $_POST['telefono']);
                $stmt->bindParam(':cedula', $_POST['cedula']);
                $stmt->bindParam(':numero_de_placa', $_POST['numero_de_placa']);
                $stmt->bindParam(':numero_telefonico_opcional', $_POST['numero_telefonico_opcional']);

                if ($stmt->execute()) {
                    $message = 'registrado con exito';
                } else {
                    $message = 'lo siento no se pudo registrar por un error';
                }
            }
        ?>
        <hr>
        <h5 class="collapse-header">Transporte</h5>

        <div class="form-group">
            <label for="nombre">nombre:</label>
            <input type="text" class="form-control mb-3" id="nombre" name="nombre" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="telefono">telefono:</label>
            <input type="text" class="form-control mb-3" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
            <label for="cedula">Cedula:</label>
            <input type="number" name="cedula" id="cedula" class="form-control" maxlength="20" required>
        </div>

        <div class="form-group">
            <label for="numero_de_placa">numero de placa:</label>
            <input type="text" class="form-control mb-3" id="numero_de_placa" name="numero_de_placa" required>
        </div>

        <div class="form-group">
            <label for="numero_telefonico_opcional">numero telefonico opcional:</label>
            <input type="number" class="form-control mb-3" id="numero_telefonico_opcional" name="numero_telefonico_opcional">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>
</div>

        
                <!-- /.container-fluid -->

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

    <script type="text/javascript" src="../../vendor/datatables/datatables.min.js"></script>    
   

</body>

</html>
<?/*php require_once '../../Vista_admin/parte_inferior.php'; ?>