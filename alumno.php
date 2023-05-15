<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                 </div>
                <div class="sidebar-brand-text mx-3">ALUMNO <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                   
                    <span>E.B.N BOLIVARIANA</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
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
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="representante.php">Representante</a>
                        <a class="collapse-item active" href="alumno.php">Alumno</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                     <span>SALUD Y TRANSPORTE</span>
                </a>
            <!--    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.php">Colors</a>
                        <a class="collapse-item" href="utilities-border.php">Borders</a>
                        <a class="collapse-item" href="utilities-animation.php">Animations</a>
                        <a class="collapse-item" href="utilities-other.php">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
         <!--   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                     <span>TRANSPORTE</span>
                </a>-->
            <!--  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>-->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="persecucion.php">
                     <span>PERSECUCION</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                     <span>ESTADISTICA</span></a>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
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
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
<?php


        require_once "basedata/basedata1.php";

if ($conn) {
  $sql = "INSERT INTO alumno (nombre, apellido, cedula, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, id_procedencia, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  // Verifica que el nombre no está vacío
  if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
  
    // Verifica que el valor en id_procedencia existe en la tabla procedencia
    $procedencia_stmt = $conn->prepare("SELECT id FROM procedencia WHERE id = ?");
    $procedencia_stmt->execute(array($_POST['id_procedencia']));
    $procedencia_result = $procedencia_stmt->fetch(PDO::FETCH_ASSOC);

    if ($procedencia_result) { // Si el valor existe en la tabla procedencia, inserta el registro en la tabla alumno
        // Preparar la consulta SQL
  $stmt = $conn->prepare($sql);

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
    echo "El nombre del alumno es obligatorio.";
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

    <form action="guardar_datos.php" method="POST">
  
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre:</label>
  <input type="text" name="nombre" id="nombre" class="form-control" required maxlength="50">
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellido:</label>
  <input type="text" name="apellido" id="apellido" class="form-control" required maxlength="50">
</div>
                
        <!--SCRIPT DE FORMULARIO

<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    const nombre = document.querySelector('#nombre').value.trim();
    const apellido = document.querySelector('#apellido').value.trim();
    
    if (nombre === '' || apellido === '') {
      event.preventDefault();
      alert('Por favor, complete los campos de nombre y apellido.');
    }
  });
</script>
-->
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

  <div class="mb-3">
    <label for="direccion" class="form-label">Dirección:</label>
    <textarea name="direccion" id="direccion" class="form-control" required></textarea>
  </div>

  <div class="mb-3">
    <label for="periodo_escolar" class="form-label">Período escolar:</label>
    <input type="number" name="periodo_escolar" id="periodo_escolar" class="form-control" required>
  </div>

  <div class="form-group">
        <label for="i"></label>




  </div>

  <!-- INICIO DEL SELECT DINAMICO, RECUERDAD QUÉ EL SELECT PRINCIPAL ES ESTADO LUEGO CIUDAD -->
<?php require_once 'basedata/basedata1.php'; ?>

<div class="form-group">
  <label for="estados">Estado:</label>
  <select name="estado" id="state" data-state="state" class="form-select select_representante" required> 
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
  <label for="ciudad_select">Ciudad:</label>
  <select name="ciudad" id="ciudad_select" class="form-select select_representante" required disabled>
    <option value="0">eliga la ciudad</option>
   
  </select>
</div>

<div class="form-group">
  <label for="municipio">Municipio:</label>
  <select name="municipio" id="municipio_select" class="form-select select_representante" required>
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
  <label for="parroquia">Parroquia:</label>
  <select name="parroquia" id="parroquia_select" class="form-select select_representante">
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
    <label for="id_procedencia" class="form-label">ID de procedencia:</label>
    <input type="number" name="id_procedencia" id="id_procedencia" class="form-control" required>
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

  <button type="submit" class="btn btn-primary vh-1">Guardar</button>
</form>
 





<script src="app.js"></script>
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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="../E.B.N BOLIVARIANA CIRO 2023/vendor/jquery/jquery-3.6.4.min.js"></script>


</body>

</html>