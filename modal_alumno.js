$(document).ready(function() {
  // Agregar evento de escucha al botón Guardar
  $('#submitBtn').click(function(e) {
    e.preventDefault(); // Prevenir que se envíe el formulario

    // Obtener los valores de los campos del formulario
    var nombre = $('input[name="nombre"]').val();
    var apellido = $('input[name="apellido"]').val();
    var cedula = $('input[name="cedula"]').val();
    var genero = $('input[name="genero"]:checked').val();
    var fecha_nac = $('input[name="fecha_nac"]').val();
    var lugar_nac = $('input[name="lugar_nac"]').val();
    var direccion = $('textarea[name="direccion"]').val();
    var estado = $('select[name="estado"]').val();
    var ciudad = $('select[name="ciudad"]').val();
    var municipio = $('select[name="municipio"]').val();
    var parroquia = $('select[name="parroquia"]').val();
    var procedencia = $('input[name="procedencia"]').val();
    var status = $('input[name="status"]:checked').val();
 

    // Crear una cadena de texto con los valores de loscampos del formulario
    var modalContent = '<p><strong>Nombre:</strong>' + nombre + '</p>' +
                       '<p><strong>Apellido:</strong>' + apellido + '</p>' +
                       '<p><strong>Cédula:</strong>' + cedula + '</p>' +
                       '<p><strong>Género:</strong>' + genero + '</p>' +
                       '<p><strong>Fecha de nacimiento:</strong>' + fecha_nac + '</p>' +
                       '<p><strong>Lugar de nacimiento:</strong>' + lugar_nac + '</p>' +
                       '<p><strong>Dirección:</strong>' + direccion + '</p>' +
                       '<p><strong>Estado:</strong>' + estado + '</p>' +
                       '<p><strong>Ciudad:</strong>' + ciudad + '</p>' +
                       '<p><strong>Municipio:</strong>' + municipio + '</p>' +
                       '<p><strong>Parroquia:</strong>' + parroquia + '</p>' +
                       '<p><strong>Procedencia:</strong>' + procedencia + '</p>' +
                       '<p><strong>Status:</strong>' + status + '</p>';

    // Crear el modal y agregar el contenido creado anteriormente
    var modal = '<div class="modal fade"id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                '<div class="modaldialog" role="document">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<h4 class="modal-title" id="myModalLabel">Confirmar datos</h4>' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                '</div>' +
                '<div class="modal-body">' + modalContent + '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>' +
                '<button type="button" class="btn btn-primary" id="confirmBtn">Aceptar</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';

    // Agregar el modal al cuerpo del documento
    $('body').append(modal);

    // Mostrar el modal
    $('#myModal').modal('show');

    // Agregar un evento de escucha al botón Aceptar dentro del modal
    $('#confirmBtn').click(function() {
      // Enviar los datos del formulario a la base de datos utilizando AJAX
      $.ajax({
        url: '../../basedata/basedata2.php',
        type: 'POST',
        data: {
          nombre: nombre,
          apellido: apellido,
          cedula: cedula,
          genero: genero,
          fecha_nac: fecha_nac,
          lugar_nac: lugar_nac,
          direccion: direccion,
          estado: estado,
          ciudad: ciudad,
          municipio: municipio,
          parroquia: parroquia,
          procedencia: procedencia,
          status: status
        },
        success: function(response) {
          // Mostrar un mensaje de éxito o redireccionar a otra página
          alert('Los datos se han guardado correctamente');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Mostrar el mensaje de error real devuelto por la base de datos
          alert('Ocurrió un error al guardar los datos: ' + jqXHR.responseText);
        }
      });

      // Cerrar el modal
      $('#myModal').modal('hide');
    });
  });
});