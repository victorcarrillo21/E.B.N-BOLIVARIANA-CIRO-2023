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
 
    <!-- Custom styles for this template-->
    
   <link href="../../css/sb-admin-2.css" rel="stylesheet"> 

   
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                 </div>
                <div class="sidebar-brand-text mx-3">ALUMNO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">
                   
                    <span>E.B.N BOLIVARIANA</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMIN
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                     <span>INSCRIPCION</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">FASES</h6>
                        <a class="collapse-item active" href="representante.php">Representante</a>
                        <a class="collapse-item " href="alumno.php">Alumno</a>
                        <a class="collapse-item active" href="salud_transporte.php">Salud y Transporte</a>
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
                     <span>PERSECUCION</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../Horarios/tables.php">
                     <span>HORARIOS</span></a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                         

                        <!-- Nav Item - Alerts -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle"
                                    src="../../img/undraw_profile.svg">
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
<?php


        require_once "../../basedata/basedata1.php";

if ($conn_pdo) {
  $sql = ("INSERT INTO alumno (nombre, apellido, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, procedencia, status) VALUES (:nombre, :apellido, :genero, :fecha_nac, :lugar_nac, :direccion, :periodo_escolar, :id_estado, :id_ciudad, :id_municipio, :id_parroquia, :id_procedencia, :status)");



  // Verifica que el nombre no está vacío
  if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
  
    // Verifica que el valor en id_procedencia existe en la tabla procedencia
    $procedencia_stmt = $conn_pdo->prepare("SELECT id FROM procedencia WHERE id = ?");
    $procedencia_stmt->execute(array($_POST['id_procedencia']));
    $procedencia_result = $procedencia_stmt->fetch(PDO::FETCH_ASSOC);

    if ($procedencia_result) { // Si el valor existe en la tabla procedencia, inserta el registro en la tabla alumno
        // Preparar la consulta SQL
  $stmt = $conn_pdo->prepare($sql);

  // Vincular los valores de las variables a los marcadores de posición en la consulta SQL
  
  $stmt->bindParam(1, $nombre);
  $stmt->bindParam(2, $apellido);
  $stmt->bindParam(3, $cedula);
  $stmt->bindParam(4, $genero);
  $stmt->bindParam(5, $fecha_nac);
  $stmt->bindParam(6, $lugar_nac);
  $stmt->bindParam(7, $direccion);
  $stmt->bindParam(8, $periodo_escolar);
  $stmt->bindParam(9, $id_estado);
  $stmt->bindParam(10, $id_ciudad);
  $stmt->bindParam(11, $id_municipio);
  $stmt->bindParam(12, $id_parroquia);
  $stmt->bindParam(13, $id_procedencia);
  $stmt->bindParam(14, $status);

  if (!empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    // continuar con la ejecución de la consulta SQL
  } else {
    echo "El campo nombre es obligatorio.";
  }

  // Ejecutar la consulta SQL
  
    if ($stmt->execute()) {
        // código a ejecutar si la condición es verdadera
      } else {
        // código a ejecutar si la condición es falsa
      }
  
      $stmt->execute(array($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['genero'], $_POST['fecha_nac'], $_POST['lugar_nac'], $_POST['direccion'], $_POST['periodo_escolar'], $_POST['id_estado'], $_POST['id_ciudad'], $_POST['id_municipio'], $_POST['id_parroquia'], $_POST['id_procedencia'], $_POST['status']));
      echo "Registro insertado correctamente.";
    } else { // Si el valor no existe en la tabla procedencia, muestra un mensaje de error
      echo "El valor en id_procedencia no existe en la tabla procedencia.";
    }
  } else { // Si el nombre está vacío o no está definido, muestra un mensaje de error
    //echo "El nombre del alumno es obligatorio.";
  }
} else {
  echo "Error al conectar a la base de datos.";
}
 
  if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
  }
  if (isset($_POST['apellido'])) {
    $apellido = $_POST['apellido'];
  }
  if (isset($_POST['cedula'])) {
    $cedula = $_POST['cedula'];
  }
  if (isset($_POST['genero'])) {
    $genero = $_POST['genero'];
  }
  if (isset($_POST['fecha_nac'])) {
    $fecha_nac = $_POST['fecha_nac'];
  }
  if (isset($_POST['lugar_nac'])) {
    $lugar_nac = $_POST['lugar_nac'];
  }
  if (isset($_POST['direccion'])) {
    $direccion = $_POST['direccion'];
  }
  if (isset($_POST['periodo_escolar'])) {
    $periodo_escolar = $_POST['periodo_escolar'];
  }
  if (isset($_POST['id_estado'])) {
    $id_estado = $_POST['id_estado'];
  }
  if (isset($_POST['id_ciudad'])) {
    $id_ciudad = $_POST['id_ciudad'];
  }
  if (isset($_POST['id_municipio'])) {
    $id_municipio = $_POST['id_municipio'];
  }
  if (isset($_POST['id_parroquia'])) {
    $id_parroquia = $_POST['id_parroquia'];
  }
  if (isset($_POST['id_procedencia'])) {
    $id_procedencia = $_POST['id_procedencia'];
  }
  if (isset($_POST['status'])) {
    $status = $_POST['status'];
  }

  
?>
                
                <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1 class="text-center mb-5">Registro de datos</h1>

    <form id="myForm2">
  <!-- Sección de identidad del usuario -->
  <fieldset>
    <legend>Identidad del usuario</legend>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" name="nombre" id="nombre" class="form-control" required maxlength="50">
    </div>
    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text" name="apellido" id="apellido" class="form-control" required maxlength="50">
    </div>
    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="number" name="cedula" id="cedula" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="genero" class="form-label">Género:</label>
      <select name="genero" id="genero" class="form-select" required>
        <option value="">Seleccione una opción</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
      </select>
    </div>
    <div class="w-25 mb-3">
      <label for="fecha_nac" class="form-label">Fecha de nacimiento:</label>
      <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="lugar_nac" class="form-label">Lugar de nacimiento:</label>
      <input type="text" name="lugar_nac" id="lugar_nac" class="form-control" required>
    </div>
  </fieldset>

  <!-- Sección de ubicación del usuario -->
  <fieldset>
    <legend>Ubicación del usuario</legend>
    <div class="form-group">
      <label for="state" class="form-label">Estado:</label>
      <select name="estado" id="state" class="form-select" required> 
        <option value="">Seleccione una opción</option>
        <?php 
          $stmt = $conn_pdo->query('SELECT * FROM estados');
          if ($stmt) {
            foreach ($stmt as $row) {
              echo '<option value="' . $row['id_estado'] . '">' . $row['estado'] . '</option>';
            }
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="ciudad_select" class="form-label">Ciudad:</label>
      <select name="ciudad" id="ciudad_select" class="form-select" required>
        <option value="">Seleccione una opción</option>
        <?php 
          $stmt = $conn_pdo->query('SELECT * FROM ciudades');
          if ($stmt) {
            foreach ($stmt as $row) {
              echo '<option value="' . $row['id_ciudad'] . '">' . $row['ciudad'] . '</option>';
            }
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="municipio_select" class="form-label">Municipio:</label>
      <select name="municipio" id="municipio_select" class="form-select" required>
        <option value="">Seleccione una opción</option>
        <?php 
          $stmt = $conn_pdo->query('SELECT * FROM municipios');
          if ($stmt) {
            foreach ($stmt as $row) {
              echo '<option value="' . $row['id_municipio'] . '">' . $row['municipio'] . '</option>';
            }
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="parroquia_select"class="form-label">Parroquia:</label>
      <select name="parroquia" id="parroquia_select" class="form-select">
        <option value="">Seleccione una opción</option>
        <?php 
          $stmt = $conn_pdo->query('SELECT * FROM parroquias');
          if ($stmt) {
            foreach ($stmt as $row) {
              echo '<option value="' . $row['id_parroquia'] . '">' . $row['parroquia'] . '</option>';
            }
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <textarea name="direccion" id="direccion" class="form-control" required></textarea>
    </div>
  </fieldset>

  <!-- Sección de información adicional -->
  <fieldset>
    <legend>Información adicional</legend>
    <div class="mb-3">
      <label for="periodo_escolar" class="form-label">Período escolar:</label>
      <input type="number" name="periodo_escolar" id="periodo_escolar" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="id_procedencia" class="form-label">Procedencia:</label>
     <input type="text" name="procedencia" id="id_procedencia" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Estado:</label>
      <div class="btn-group" role="group" aria-label="Estado">
        <input type="radio" class="btn-check" name="status" id="success-outlined" value="success" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="success-outlined">Activo</label>
        <input type="radio" class="btn-check" name="status" id="danger-outlined" value="danger" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Inactivo</label>
      </div>
    </div>
  </fieldset>

  <!-- Botón de envío -->
  <button type="submit" class="btn btn-primary" value="Guardar" name="Guardar" id="submitBtn">Guardar</button>
</form>
 


    
<script src="../../app.js"></script>


                </div>
                <!-- /.container-fluid -->

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
 

    <script src="../../modal_alumno.js"></script>
       
   

</body>

</html>