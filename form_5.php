<?php

                /*require_once 'basedata/db.php'
        $sql="";
        $sql="SELECT representante.id, alumno.id, salud_transporte.id, procedencia, nombre FROM peliculas AS p INNER JOIN genero AS g ON p. id.genero=g.id"
        $sqlform = $conn->query($sql);
*/
?>





<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


       
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


                                                   <h1> REPRESENTANTE </h1>
                                                 
<form id="myForm"> 
  <div class="form-group">
    <label for="nombre_repre">Nombre:</label>
    <input type="text" name="nombre" id="nombre_representante_ciro " class="form-control" maxlength="50"  required>
  </div>

  <div class="form-group">
    <label for="apellido_repre">Apellido:</label>
    <input type="text" name="apellido" id="apellido_representante_ciro " class="form-control" maxlength="50" required>
  </div>

  <div class="form-group">
    <label for="cedula_repre">CEDULA:</label>
    <input type="number" name="cedula" id="cedula_representante_ciro " class="form-control" maxlength="20" required>
  </div>

  <div class="form-group">
    <label for="parentesco_repre">Parentesco:</label>
    <select name="parentesco" id="parentesco_representante_ciro " class="form-control" required>
      <option value="opcion1">Padre</option>
      <option value="opcion2" <?php if ($opcion_seleccionada == "opcion2") echo "selected"; ?>>Madre (seleccionada por defecto)</option>
      <option value="opcion3">Otros</option>
    </select>
    
  </div>
  <div class="form-group">
    <label for="profesion_repre">Profesion:</label>
    <input type="text" name="profesion" id="profesion_representante_ciro " class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="direccion_repre">Dirección:</label>
    <input type="text" name="direccion" id="direccion_representante_ciro " class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="direccion_tra_repre">Dirección del Trabajo:</label>
    <input type="text" name="direccion_tra" id="direccion_tra_representante_ciro " class="form-control" maxlength="100" required>
  </div>

  <div class="form-group">
    <label for="telefono_repre">Telefono:</label>
    <input type="number" name="telefono" id="telefono_representante_ciro " class="form-control" required>
  </div>

  <div class="form-group">
    <label for="telefono_tra_repre">Telefono del Trabajo:</label>
    <input type="number" name="telefono_tra"id="telefono_tra_representante_ciro "class="form-control" required>
  </div>

  <div class="form-group">
    <label for="telefono_opc_repre">Telefono Opcional:</label>
    <input type="number" name="telefono_opc" id="telefono_opc_representante_ciro "class="form-control">
  </div>

  
  <div class="form-group">
  <label for="vive_repre">¿Vive?</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="vive" id="vive_si_representante_ciro " value="Si">
    <label class="form-check-label" for="vive-si">Si</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="vive" id="vive_no_representante_ciro " value="No">
    <label class="form-check-label" for="vive-no">No</label>


<!-- INICIO DEL SELECT DINAMICO, RECUERDAD QUÉ EL SELECT PRINCIPAL ES ESTADO LUEGO CIUDAD -->
<?php require_once 'basedata/basedata1.php'; ?>

<div class="form-group">
  <label for="estados_nuevo">Estado:</label>
  <select name="estado" id="state" data-state="state" class="form-select select_representante " required> 
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
  <label for="ciudad_select_nuevo">Ciudad:</label>
  <select name="ciudad" id="ciudad_select" class="form-select select_representante " required>
    <option value="0">eliga la ciudad</option>
   
  </select>
</div>

<div class="form-group">
  <label for="municipio_nuevo">Municipio:</label>
  <select name="municipio" id="municipio_select" class="form-select select_representante " required>
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
  <label for="parroquia_nuevo">Parroquia:</label>
  <select name="parroquia" id="parroquia_select" class="form-select select_representante ">
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


 

 
 <script src='app.js'></script>

                                                            <h1> ALUMNO </h1>

 
  <!-- Sección de identidad del usuario -->
  <fieldset>
    <legend>Identidad del usuario</legend>
    <div class="mb-3">
      <label for="nombre_alum" class="form-label">Nombre:</label>
      <input type="text" name="nombre_alumno_ciro_a" id="nombre_alumno_ciro_a" class="form-control" required maxlength="50">
    </div>
    <div class="mb-3">
      <label for="apellido_alum" class="form-label">Apellido:</label>
      <input type="text_alum" name="apellido_alumno_ciro_a" id="apellido_alumno_ciro_a" class="form-control" required maxlength="50">
    </div>
    <div class="mb-3">
      <label for="cedula_alum" class="form-label">Cédula:</label>
      <input type="number" name="cedula_alumno_ciro_a" id="cedula_alumno_ciro_a" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="genero_alum" class="form-label">Género:</label>
      <select name="genero_alumno_ciro_a" id="genero_alumno_ciro_a" class="form-select" required>
        <option value="">Seleccione una opción</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
      </select>
    </div>
    <div class="w-25 mb-3">
      <label for="fecha_nac_alum" class="form-label">Fecha de nacimiento:</label>
      <input type="date" name="fecha_nac_alumno_ciro_a" id="fecha_nac_alumno_ciro_a" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="lugar_nac_alum" class="form-label">Lugar de nacimiento:</label>
      <input type="text" name="lugar_nac_alumno_ciro_a" id="lugar_nac_alumno_ciro_a" class="form-control" required>
    </div>
  </fieldset>

  <!-- Sección de ubicación del usuario -->
  <fieldset>
    <legend>Ubicación del usuario</legend>
    <div class="form-group">
      <label for="state" class="form-label">Estado:</label>
      <select name="estado" id="state_co" class="form-select" required> 
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
      <textarea name="direccion_alumno_ciro_a" id="direccion_alumno_ciro_a" class="form-control" required></textarea>
    </div>
  </fieldset>

  <!-- Sección de información adicional -->
  <fieldset>
    <legend>Información adicional</legend>
    <div class="mb-3">
      <label for="periodo_escolar_sal" class="form-label">Período escolar:</label>
      <input type="number" name="periodo_escolar_alumno_ciro_a" id="periodo_escolar_alumno_ciro_a" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="id_procedencia_sal" class="form-label">Procedencia:</label>
     <input type="text" name="procedencia_alumno_ciro_a" id="id_procedencia_alumno_ciro_a" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="status_sal" class="form-label">Estado:</label>
      <div class="btn-group" role="group" aria-label="Estado">
        <input type="radio" class="btn-check" name="status" id="success_outlined_alumno_ciro_a" value="success" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="success-outlined">Activo</label>
        <input type="radio" class="btn-check" name="status" id="danger_outlined_alumno_ciro_a" value="danger" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Inactivo</label>
      </div>
    </div>
  </fieldset>

  <!-- Botón de envío -->
 
 

 
        <hr>
        <h5 class="collapse-header">Salud</h5>

   <!-- Seccion de Salud -->
   <div class="row">
  <div class="col-sm-4">
    <label for="alergia1_sal">Alergias:</label>
    <input type="text" class="form-control mb-3" id="alergia1_salud" name="alergia1_salud" placeholder="Ej: Nueces" required>
  </div>
 
<div class="col-mb-8">
<label for="dieta_sal">Dietas:</label>
<input type="text" class="form-control mb-3" id="dieta_salud" name="dieta_salud" required>
</div>

<div class="col-mb-8">
<label for="tratamiento_M_sal">Tratamientos Medicos:</label>
<input type="text" class="form-control mb-3" id="tratamiento_M_salud" name="tratamiento_M_salud" required>
</div>

<div class="col-large-8">
<label for="condicion_fisica_sal">Condicion Fisica:</label>
<textarea class="form-control mb-5"  id="condicion_fisica_salud" name="condicion_fisica_salud" rows="2" required></textarea>
</div>

<div class="col-large-8">
<label for="atencion_especial_sal">Atencion Especial:</label> <textarea class="form-control mb-5"  id="atencion_especial_salud" name="atencion_especial_salud" rows="2" required></textarea>
 </div>

        <!-- Seccion de Transporte -->
        <?php
            require_once 'basedata/db.php';

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
            <label for="nombre_trans">nombre:</label>
            <input type="text" class="form-control mb-3" id="nombre_transporte" name="nombre_transporte" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="telefono_trans">telefono:</label>
            <input type="text" class="form-control mb-3" id="telefono_transporte" name="telefono_transporte" required>
        </div>

        <div class="form-group">
            <label for="cedula_trans">Cedula:</label>
            <input type="number" name="cedula_transporte" id="cedula_transporte" class="form-control" maxlength="20" required>
        </div>

        <div class="form-group">
            <label for="numero_de_placa_trans">numero de placa:</label>
            <input type="text" class="form-control mb-3" id="numero_de_placa_transporte" name="numero_de_placa_transporte" required>
        </div>

        <div class="form-group">
            <label for="numero_telefonico_opcional_trans">numero telefonico opcional:</label>
            <input type="number" class="form-control mb-3" id="numero_telefonico_opcional_transporte" name="numero_telefonico_opcional_transporte">
        </div>

       
 
 

         
                <hr>
                <h5 class="collapse-header">Procedencia</h5>
                <br>
                <div class="form-group">
                    <label for="de_donde_proviene_pro">De donde proviene:</label>
                    <textarea class="form-control" id="de_donde_proviene_pro" name="de_donde_proviene_pro" rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="motivo_pro">Motivo del cambio:</label>
                    <textarea class="form-control" id="motivo_pro" name="motivo_pro" rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="direccion_pro">Dirección:</label>
                    <input type="text" class="form-control" id="direccion_pro" name="direccion_pro" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Estado</label>
                    <select id="estado_pro" name="estado_pro" class="form-control">
                        <option value="0">Seleccione un Estado</option>
                        <?php foreach ($estados as $estado): ?>
                            <option value="<?php echo $estado['id_estado']; ?>"><?php echo $estado['id_estado'] . "-" . $estado['estado']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Ciudad</label>
                    <select id="ciudad_pro" name="ciudad_pro" class="form-control">
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
                    <select id="municipio_pro" name="municipio_pro" class="form-control">
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
                    <select id="parroquia_pro" name="parroquia_pro" class="form-control">
                        <option value="0">Seleccione una Parroquia</option>
                        <?php if (!empty($parroquias)) {
                            foreach ($parroquias as $parroquia): ?>
                                <option value="<?php echo $parroquia['id_parroquia']; ?>"><?php echo $parroquia['id_parroquia'] . "-" . $parroquia['parroquia']; ?></option>
                            <?php endforeach;
                        } ?>
                    </select>
                </div>
                <br>
 
                <button type="button" class="btn btn-primary" onclick="mostrarDatosEnModal()">Mostrar datos en modal</button>
            </form>
        </div>
    </div>
              

 



            <?php require_once 'nuevoModal.php' ?>
    <?php /* require_once 'nuevoModal2.php' ?> 
    */
    ?>
    






























































































  <!--

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                        </div>

                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                        </div>

                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                        </div>

                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                        </div>

                    </div>



                     

                    <table class="table table-sm table-striped table-hover mt-4">    
                        <thead class="table-primary ">
                                <tr>

                                        <th id="">ID</TH>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>SEXO</th>
                                        <th>PERIODO ESCOLAR</th>
                                        <th>PROCENDIA</th>
                                        <th></th>





                                </tr>




                        </thead>
                        <tbody>

-->

                 

                                                        REPRESENTANTE
  nombre, apellido, cedula, parentesco, profesion, direccion, direccion_tra, telefono, telefono_tra, vive, telefono_opc, id_estado, id_ciudad, id_municipio, id_parroquia

                                                           ALUMNO
  nombre, apellido, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, procedencia, status
  

                                                       SALUD Y TRANSPORTE

  alergia, dieta, tratamiento_M, condicion_fisica, atencion_especial

                                                          PROCEDENCIA
  de_donde_proviene, motivo, direccion, id_estado, id_ciudad, id_municipio, id_parroquia


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  
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