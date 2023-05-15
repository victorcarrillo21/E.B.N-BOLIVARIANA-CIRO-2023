const miFormulario = document.getElementById('miFormulario');
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
});


