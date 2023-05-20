
<?php
/*MOSTRAR ERRORES
*/
//ini_set('display_errors', 0); // coloca 0 si no deseas que aparezcan los errores tambien en el navegador
//ini_set("log_errors", 1); //con esta linea estamos diciendo que queremos crear un nuevo archivo de errores
//ini_set("error_log", "C:/xampp/htdocs/Errores CIRO 2023/php_error_log"); //con esta linea le decimos a PHP donde queremos que se guarde ese archivo,lo recomendado es que sea al lado del archivo
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Buttons</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!--SCRIPT DEL PROFESOR-->
   <!-- <link rel="stylesheet" href="sweetalert2.min.css">-->


</head>

<body id="page-top">
    <!--SCRIPT DEL PROFESOR-->
<!--<script src="sweetalert2.min.js"></script>
<script src="sweetalert2.all.min.js"></script>-->



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">E.B.N BOLIVARIANA <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
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
                        <a class="collapse-item active" href="representante.php">Representante</a>
                        <a class="collapse-item" href="alumno.php">Alumno</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="salud_transporte.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>SALUD Y TRANSPORTE</span>
                </a>

                <!--
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
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
       <!--     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <span>TRANSPORTE</span>
                </a> -->
         <!--           <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Login</a>
                        <a class="collapse-item" href="registphp">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                        <a class="collapse-item" href="blank.php">Blank Page</a>
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
                <?php 
ob_start(); // Iniciar el buffer de salida

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos_ciroo";

try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener datos para los select
    $estados = $conn_pdo->query("SELECT id_estado, estado FROM estados"); 
    $ciudades = $conn_pdo->query("SELECT id_ciudad, id_estado, ciudad FROM ciudades"); 
    $municipios = $conn_pdo->query("SELECT id_municipio, id_estado, municipio FROM municipios"); 
    $parroquias = $conn_pdo->query("SELECT id_parroquia ,id_municipio, parroquia FROM parroquias");

    // Verificación del envío de formulario
    if (!empty($_POST)) {
        $message = '';

        // Validar datos del formulario
        if (empty($_POST['nombre'])) {
            $message = "El campo 'nombre' es obligatorio. Por favor, complete el campo y vuelva a intentarlo.";
        } else {
            // Preparar consulta SQL
            $sql = "INSERT INTO representante (nombre, apellido, cedula, parentesco, profesion, direccion, direccion_tra, telefono, telefono_tra, vive, telefono_opc, id_estado, id_ciudad, id_municipio, id_parroquia) VALUES (:nombre, :apellido, :cedula, :parentesco, :profesion, :direccion, :direccion_tra, :telefono, :telefono_tra, :vive, :telefono_opc, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)";

            // Preparar consulta preparada
            $stmt = $conn_pdo->prepare($sql);

            // Obtención de valores de formulario
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
            $cedula = isset($_POST['cedula']) ? $_POST['cedula'] : "";
            $parentesco = isset($_POST['parentesco']) ? $_POST['parentesco'] : "";
            $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : "";
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
            $direccion_tra = isset($_POST['direccion_tra']) ? $_POST['direccion_tra'] : "";
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
            $telefono_tra = isset($_POST['telefono_tra']) ? $_POST['telefono_tra'] : "";
            $vive = isset($_POST['vive']) ? $_POST['vive'] : "";
            $telefono_opc = isset($_POST['telefono_opc']) ? $_POST['telefono_opc'] : "";
            $id_estado = isset($_POST['estado']) ? $_POST['estado'] : "";
            $id_ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : "";
            $id_municipio = isset($_POST['municipio']) ? $_POST['municipio'] : "";
            $id_parroquia = isset($_POST['parroquia']) ? $_POST['parroquia'] : "";
            // Vincular parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':cedula', $cedula);
            $stmt->bindParam(':parentesco', $parentesco);
            $stmt->bindParam(':profesion', $profesion);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':direccion_tra', $direccion_tra);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':telefono_tra', $telefono_tra);
            $stmt->bindParam(':vive', $vive);
            $stmt->bindParam(':telefono_opc', $telefono_opc);
            $stmt->bindParam(':id_estado', $id_estado);
            $stmt->bindParam(':id_ciudad', $id_ciudad);
            $stmt->bindParam(':id_municipio', $id_municipio);
            $stmt->bindParam(':id_parroquia', $id_parroquia);

            // Ejecutar consulta preparada
            if ($stmt->execute()) {
                $message = "Representante registrado exitosamente.";
            } else {
                $message = "Error al registrar al representante. Por favor, inténtelo de nuevo.";
            }
        }
    }

    // Cerrar conexión PDO
    $conn_pdo = null;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Limpiar buffer de salida
ob_end_flush();
?>
<!-- Aquí va el código HTML del formulario -->

           <!--INICIO del cont principal-->
           <div class="container">
           
            <h1 class="cir">Contenido principal</h1>



            <div class="container">

    <h1 class="text-center mb-5">Registro de datos</h1>


    

    <?php 
  // Definir la opción seleccionada por defecto
  $opcion_seleccionada = "opcion2";
?>
<!--<form action="representante.php" method="post" id="miFormulario" enctype="multipart/form-data"> -->

<form id="miFormulario"> 
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" maxlength="50" required>
  </div>

  <div class="form-group">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" class="form-control" maxlength="50" required>
  </div>

  <div class="form-group">
    <label for="cedula">CEDULA:</label>
    <input type="number" name="cedula" id="cedula" class="form-control" maxlength="20" required>
  </div>

  <div class="form-group">
    <label for="parentesco">Parentesco:</label>
    <select name="parentesco" id="parentesco" class="form-control" required>
      <option value="opcion1">Padre</option>
      <option value="opcion2" <?php if ($opcion_seleccionada == "opcion2") echo "selected"; ?>>Madre (seleccionada por defecto)</option>
      <option value="opcion3">Otros</option>
    </select>
    
  </div>
  <div class="form-group">
    <label for="profesion">Profesion:</label>
    <input type="text" name="profesion" id="profesion" class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="direccion_tra">Dirección del Trabajo:</label>
    <input type="text" name="direccion_tra" id="direccion_tra" class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="telefono">Telefono:</label>
    <input type="number" name="telefono" id="telefono" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="telefono_tra">Telefono del Trabajo:</label>
    <input type="number" name="telefono_tra"id="telefono_tra"class="form-control" required>
  </div>

  <div class="form-group">
    <label for="telefono_opc">Telefono Opcional:</label>
    <input type="number" name="telefono_opc" id="telefono_opc"class="form-control">
  </div>

  <div class="form-group">
    <label for="vive">¿Vive?</label>
    <input type="checkbox"  name="si" id="vive">
    <label>Si</label>
    <input type="checkbox" name="no" id="vive">
    <label>No</label>
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
  <select name="ciudad" id="ciudad_select" class="form-select select_representante" required>
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
<button class="btn btn-danger" type="button" name="enviar" id="permiteSubmit" data-bs-toggle="modal" data-bs-target="#myModal">Guardar Datos</button>

<?php include 'modal_data.php'; ?>

</form>
</div>
 </div>

  <script src="modal.js"></script>
  <script src="app.js"></script>


 
            
  
 
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            </div>
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
                        <span aria-hidden="true">...</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
   <!--Bootstrap 3-5-2023--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</body>

</html>