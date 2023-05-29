$(document).ready(function() {
  
  
  
  // Agregar evento de escucha al botón "Guardar"
  $('#submitBtn').click(function(e) {
    e.preventDefault(); // Prevenir que se envíe el formulario

    
    
    // Obtener los valores de los campos del formulario
    var nombre = $('input[name="nombre"]').val();
    var apellido = $('input[name="apellido"]').val();
    var cedula = $('input[name="cedula"]').val();
    var parentesco = $('#parentesco').val();
    var profesion = $('input[name="profesion"]').val();
    var direccion = $('input[name="direccion"]').val();
    var direccion_tra = $('input[name="direccion_tra"]').val();
    var telefono = $('input[name="telefono"]').val();
    var telefono_tra = $('input[name="telefono_tra"]').val();
    var telefono_opc = $('input[name="telefono_opc"]').val();
    var vive = $('input[name="vive"]:checked').val();
    var estado = $('select[name="estado"]').val();
    var ciudad = $('select[name="ciudad"]').val();
    var municipio = $('select[name="municipio"]').val();
    var parroquia = $('select[name="parroquia"]').val();

    
    
    // Crear una cadena de texto con los valores de los camposdel formulario
    var modalContent = '<p><strong>Nombre:</strong> ' + nombre + '</p>' +
                        '<p><strong>Apellido:</strong> ' + apellido + '</p>' +
                        '<p><strong>Cédula:</strong> ' + cedula + '</p>' +
                        '<p><strong>Parentesco:</strong> ' + parentesco + '</p>' +
                        '<p><strong>Profesión:</strong> ' + profesion + '</p>' +
                        '<p><strong>Dirección:</strong> ' + direccion + '</p>' +
                        '<p><strong>Dirección de trabajo:</strong> ' + direccion_tra + '</p>' +
                        '<p><strong>Teléfono:</strong> ' + telefono + '</p>' +
                        '<p><strong>Teléfono de trabajo:</strong> ' + telefono_tra + '</p>' +
                        '<p><strong>Teléfono opcional:</strong> ' + telefono_opc + '</p>' +
                        '<p><strong>¿Vive?:</strong> ' + vive + '</p>' +
                        '<p><strong>Estado:</strong> ' + estado + '</p>' +
                        '<p><strong>Ciudad:</strong> ' + ciudad + '</p>' +
                        '<p><strong>Municipio:</strong> ' + municipio + '</p>' +
                        '<p><strong>Parroquia:</strong> ' +parroquia + '</p>';

   
   
   
    // Crear el modal y agregar el contenido creado anteriormente
   
   
    var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                  '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content">' +
                      '<div class="modal-header">' +
                        '<h4 class="modal-title" id="myModalLabel">Confirmar datos</h4>' +
                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span</button>' +
                      '</div>' +
                      '<div class="modal-body">' +
                        modalContent +
                      '</div>' +
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

    // Agregar evento de escucha al botón "Aceptar" del modal
    $('#confirmBtn').click(function() {
      
      // Enviar los datos del formulario a la base de datos utilizando AJAX
      $.ajax({
        type: 'POST',
        url: '../../basedata/basedata1.php',
        data: $('#myForm').serialize(), // Obtener los datos del formulario
        success: function(response) {
          // Mostrar mensaje de éxito
          alert('Los datos se han guardado correctamente.');

          // Cerrar el modal
          $('#myModal').modal('hide');
        },
        error: function() {
          // Mostrar mensaje de error
          alert('Hubo un error al guardar los datos.');
        }
      });
    });
  });
});

