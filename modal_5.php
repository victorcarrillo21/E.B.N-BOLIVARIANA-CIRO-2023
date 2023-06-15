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
        <link rel="stylesheet" href="css/sb-admin-2.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>




















  <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título personalizado del modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#representante">Representante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#alumno">Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#salud">Salud y transporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#procedencia">Procedencia</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="representante">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para representante -->
                  <li>Nombre: <input type="text" name="nombre_representante" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_representante" class="form-control"></li>
              <li>Cédula: <input type="text" name="cedula_representante" class="form-control"></li>
              <li>Parentesco: <input type="text" name="parentesco_representante" class="form-control"></li>
              <li>Profesión: <input type="text" name="profesion_representante" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_representante" class="form-control"></li>
              <li>Dirección de trabajo: <input type="text" name="direccion_trabajo_representante" class="form-control"></li>
              <li>Teléfono: <input type="text" name="telefono_representante" class="form-control"></li>
              <li>Teléfono de trabajo: <input type="text" name="telefono_trabajo_representante" class="form-control"></li>
              <li>Vive con el alumno: <input type="text" name="vive_representante" class="form-control"></li>
              <li>Teléfono opcional: <input type="text" name="telefono_opcional_representante" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_representante" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_representante" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_representante" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_representante" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="alumno">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para alumno -->
                  
              <li>Nombre: <input type="text" name="nombre_alumno" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_alumno" class="form-control"></li>
              <li>Género: <input type="text" name="genero_alumno" class="form-control"></li>
              <li>Fecha de nacimiento: <input type="text" name="fecha_nacimiento_alumno" class="form-control"></li>
              <li>Lugar de nacimiento: <input type="text" name="lugar_nacimiento_alumno" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_alumno" class="form-control"></li>
              <li>Periodo escolar: <input type="text" name="periodo_escolar_alumno" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_alumno" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_alumno" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_alumno" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_alumno" class="form-control"></li>
              <li>Procedencia: <input type="text" name="procedencia_alumno" class="form-control"></li>
              <li>Status: <input type="text" name="status_alumno" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="salud">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para salud y transporte -->
                  
              <li>Alergia: <input type="text" name="alergia" class="form-control"></li>
              <li>Dieta: <input type="text" name="dieta" class="form-control"></li>
              <li>Tratamiento médico: <input type="text" name="tratamiento_medico" class="form-control"></li>
              <li>Condición física: <input type="text" name="condicion_fisica" class="form-control"></li>
              <li>Atención especial: <input type="text" name="atencion_especial" class="form-control"></li>
              <li>Nombre:<input type="text" name="nombre_transporte" class="form-control"></li>
              <li>Telefono:<input type="text" name="telefono" class="form-control"></li>
              <li>Cedula:<input type="text" name="cedula" class="form-control"></li>
              <li>Numero de placa:<input type="text" name="numero_de_placa" class="form-control"></li>
              <li>Numero telefonico opcional:<input type="text" name="numero_telefonico_opcional" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="procedencia">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para procedencia -->
                  
              <li>De dónde proviene: <input type="text" name="de_donde_proviene" class="form-control"></li>
              <li>Motivo: <input type="text" name="motivo_procedencia" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_procedencia" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_procedencia" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_procedencia" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_procedencia" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_procedencia" class="form-control"></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>























































































































  
<!--
                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal">
                                        NUEVO REGISTRO
                                        
                                 
                            </a>
                         </div>
                        </div>
                   
                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal3">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                          
                        </div>

                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal4">
                                        NUEVO REGISTRO
                            </a>
                         </div>
                        </div>
                 
                    </div>

                    <div class="container py-3">

                        <h2 class="text-center">PRO</h2>
                        <div class="row justify-content-center">
                        <div class="col-auto">

                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal5">
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