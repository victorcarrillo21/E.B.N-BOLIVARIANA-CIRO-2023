<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
     href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">


    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body>
    
 
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del formulario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="modal-nombre">Nombre:</label>
          <input type="text" class="form-control" id="modal-nombre" readonly>
        </div>
        <div class="form-group">
          <label for="modal-apellido">Apellido:</label>
          <input type="text" class="form-control" id="modal-apellido" readonly>
        </div>
        <div class="form-group">
          <label for="modal-cedula">Cedula:</label>
          <input type="text" class="form-control" id="modal-cedula" readonly>
        </div>
        <div class="form-group">
          <label for="modal-parentesco">Parentesco:</label>
          <input type="text" class="form-control" id="modal-parentesco" readonly>
        </div>
        <div class="form-group">
          <label for="modal-profesion">Profesión:</label>
          <input type="text" class="form-control" id="modal-profesion" readonly>
        </div>
        <div class="form-group">
          <label for="modal-direccion">Dirección:</label>
          <input type="text" class="form-control" id="modal-direccion" readonly>
        </div>
        <div class="form-group">
          <label for="modal-direccion-trabajo">Dirección del trabajo:</label>
          <input type="text" class="form-control" id="modal-direccion-trabajo" readonly>
        </div>
        <div class="form-group">
          <label for="modal-telefono">Teléfono:</label>
          <input type="text" class="form-control" id="modal-telefono" readonly>
        </div>
        <div class="form-group">
          <label for="modal-telefono-trabajo">Teléfono del trabajo:</label>
          <input type="text" class="form-control" id="modal-telefono-trabajo" readonly>
        </div>
        <div class="form-group">
          <label for="modal-telefono-opcional">Teléfono opcional:</label>
          <input type="text" class="form-control" id="modal-telefono-opcional" readonly>
        </div>
        <div class="form-group">
          <label for="modal-vive">¿Vive?</label>
          <input type="text" class="form-control" id="modal-vive" readonly>
        </div>
        <div class="form-group">
          <label for="modal-estado">Estado:</label>
          <input type="text" class="form-control" id="modal-estado" readonly>
        </div>
        <div class="form-group">
          <label for="modal-ciudad">Ciudad:</label>
          <input type="text" class="form-control" id="modal-ciudad" readonly>
        </div>
        <div class="form-group">
          <label for="modal-municipio">Municipio:</label>
          <input type="text" class="form-control" id="modal-municipio" readonly>
        </div>
        <div class="form-group">
          <label for="modal-parroquia">Parroquia:</label>
          <input type="text" class="form-control" id="modal-parroquia" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
        <button type="button" class="btn btn-primary" id="modal-enviar-btn">Enviar</button>


        <!--MENSAJE DE EXITOS-->
       
        <!-- Aquí van los campos del formulario -->
    <div id="mensaje-exito" style="display: none;">
    <p>El formulario se ha enviado correctamente.</p>
  </div>
 
 
</div>
      </div>
    </div>
  </div>
</div>

<script src="modal.js"></script>

  <!-- Bootstrap core JavaScript-->
   <!--Bootstrap 3-5-2023--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Agrega la biblioteca global de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>


</body>
</html> 