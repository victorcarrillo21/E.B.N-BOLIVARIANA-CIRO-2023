<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        
        <button type="button" class="btn btn-primary" id="confirmar-envio">Enviar</button>


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

<script>
  // Obtener el formulario
  const form = document.querySelector('#miFormulario');
  
  


    // Agregar un evento al formulario cuando se envía
    form.addEventListener('submit', (event) => {
    // Evitar que el formulario se envíe de forma predeterminada
    event.preventDefault();

    // Obtener los elementos del formulario
    const nombre = document.querySelector('#nombre').value;
    const apellido = document.querySelector('#apellido').value;
    const cedula = document.querySelector('#cedula').value;
    const parentesco = document.querySelector('#parentesco').value;
    const profesion = document.querySelector('#profesion').value;
    const direccion = document.querySelector('#direccion').value;
    const direccionTra = document.querySelector('#direccion_tra').value;
    const telefono = document.querySelector('#telefono').value;
    const telefonoTra = document.querySelector('#telefono_tra').value;
    const telefonoOpc = document.querySelector('#telefono_opc').value;
    const viveSi = document.querySelector('input[name="si"]:checked') ? 'Si' : 'No';
    const estado = document.querySelector('#state option:checked').text;
    const ciudad = document.querySelector('#ciudad_select option:checked').text;
    const municipio = document.querySelector('#municipio_select option:checked').text;
    const parroquia = document.querySelector('#parroquia_select option:checked').text;

    // Mostrar los datos del formulario en el modal
    document.querySelector('#modal-nombre').value = nombre;
    document.querySelector('#modal-apellido').value = apellido;
    document.querySelector('#modal-cedula').value = cedula;
    document.querySelector('#modal-parentesco').value = parentesco;
    document.querySelector('#modal-profesion').value = profesion;
    document.querySelector('#modal-direccion').value = direccion;
    document.querySelector('#modal-direccion-trabajo').value = direccionTra;
    document.querySelector('#modal-telefono').value = telefono;
    document.querySelector('#modal-telefono-trabajo').value = telefonoTra;
    document.querySelector('#modal-telefono-opcional').value = telefonoOpc;
    document.querySelector('#modal-vive').value = viveSi;
    document.querySelector('#modal-estado').value = estado;
    document.querySelector('#modal-ciudad').value = ciudad;
    document.querySelector('#modal-municipio').value = municipio;
    document.querySelector('#modal-parroquia').value = parroquia;

    // Mostrar el modal
    const myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
  });
</script>


</body>
</html>