$(document).ready(function() {
  // Handle form submission
  $('#miFormulario').submit(function(event) {
    event.preventDefault(); // Prevent form from submitting normally

    // Get form data
    var formData = $(this).serialize();

    // Display preview in modal
    $('#previewNombre').text($('#nombre').val());
    $('#previewApellido').text($('#apellido').val());
    $('#previewCedula').text($('#cedula').val());
    $('#previewParentesco').text('#parentesco');
    $('#previewProfesion').text($('#profesion').val());
    $('#previewDireccion').text($('#direccion').val());
    $('#previewDireccion_tra').text($('#direccion_tra').val());
    $('#previewTelefono').text('#telefono').val());
    $('#previewTelefono_tra').text($('#telefono_tra').val());
    $('#previewVive').text($('#vive').val());
    $('#previewTelefono_opc').text($('#telefono_opc').val());
    $('#previewEstado').text('#state').val());
    $('#previewCiudad').text('#ciudad_select').val());
    $('#previewMunicipio').text('#municipio_select').val());
    $('#previewParroquia').text('#parroquia_select').val());
    $('#previewModal').modal('show');

    // Handle modal buttons
    $('#previewModal').on('click', '#editButton', function() {
      $('#previewModal').modal('hide'); // Hide modal
    });
    $('#previewModal').on('click', '#submitButton', function() {
      // Submit form using AJAX
      $.ajax({
        url: 'process.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          alert('Form submitted successfully!');
          $('#previewModal').modal('hide'); // Hide modal
        },
        error: function() {
          alert('An error occurred. Please try again.');
        }
      });
    });
  });
});

















/*const miFormulario = document.getElementById('miFormulario');
const enviarBtn = document.getElementById('modal-enviar-btn');
miFormulario.addEventListener('submit', (event) => {
  event.preventDefault();

  const valores = new FormData(miFormulario);

  // Mostrar los datos del formulario en el modal
  for (const [key, value] of valores.entries()) {
    const modalCampo = document.getElementById(`modal-${key}`);
    if (modalCampo) {
      modalCampo.value = value;
    }
  }

  // Mostrar el modal
  const myModal = new bootstrap.Modal(document.getElementById('myModal'));
  myModal.show();
});

// Evento click del botón "Enviar" dentro del modal
document.getElementById('modal-enviar-btn').addEventListener('click', function() {
  // Obtener los valores del formulario
  const formData = new FormData(document.getElementById('FormData'));

  // Enviar los datos del formulario al servidor
  fetch('guardar_formulario.php', {
    method: 'POST', // Método HTTP para enviar los datos
    body: formData // Los datos del formulario
  })
  .then(response => response.json()) // Convertir la respuesta a JSON
  .then(data => {
    if (data.success) {
      // Si los datos se guardaron con éxito, mostrar un mensaje de confirmación
      document.getElementById('mensaje-exito').style.display = 'block';
    } else {
      // Si hubo un error al guardar los datos, mostrar un mensaje de error
      alert('Hubo un error al guardar los datos.');
    }
  })
  .catch(error => {
    // Si hubo un error al enviar los datos, mostrar un mensaje de error
    alert('Hubo un error al enviar los datos.');
  });
});*/


