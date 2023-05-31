/*10-5-2023 EXTRAÍDO DEL ARCHIVO ALUMNO.PHP ES EL MÉTODO AJAX




<script>
$(document).ready(function() {
$('#estado').change(function() {
var estado_id = $(this).val();
$.ajax({
type: "POST",
url: "get_ciudades.php",
data: { estado_id: estado_id },
success: function(response) {
$('#ciudad').html(response);
}
});
});
});
</script>


<select name="ciudad" id="ciudad">
<option value="">Selecciona una ciudad</option>
</select>
<select name="municipio" id="municipio">
<option value="">Selecciona un municipio</option>
</select>

<script>
$(document).ready(function() {
$('#ciudad').change(function() {
var ciudad_id = $(this).val();
$.ajax({
type: "POST",
url: "get_municipios.php",
data: { ciudad_id: ciudad_id },
success: function(response) {
$('#municipio').html(response);
}
});
});
});
</script>
```
<select name="parroquia" id="parroquia">
<option value="">Selecciona una parroquia</option>
</select>
```
<script>
$(document).ready(function() {
$('#municipio').change(function() {
var municipio_id = $(this).val();
$.ajax({
type: "POST",
url: "get_parroquias.php",
data: { municipio_id: municipio_id },
success: function(response) {
$('#parroquia').html(response);
}
});
});
});
</script>




/*          EXPLICACIÓN DE LO QUÉ HACE 10-5-2023

¡Claro! Este es un código JavaScript que utiliza la biblioteca jQuery para hacer una solicitud AJAX (Asynchronous JavaScript and XML) a un servidor web. Veamos cada parte del código:

Copy
$(document).ready(function() { ... });
Esta línea de código espera a que el documento HTML esté completamente cargado antes de ejecutar el código JavaScript. Es decir, no se ejecutará ningún código hasta que el documento HTML haya sido cargado por completo.

Copy
$('#estado').change(function() { ... });
Esta línea de código establece un detector de eventos en un elemento HTML con el ID "estado". El detector de eventos espera a que se produzca un cambio en el valor del elemento HTML (por ejemplo, cuando un usuario selecciona una opción de un menú desplegable). Cuando se produce el cambio, se ejecuta el código dentro de la función anónima.

Copy
var estado_id = $(this).val();
Esta línea de código obtiene el valor seleccionado del elemento HTML con el ID "estado" y lo almacena en una variable llamada "estado_id".

json
Copy
$.ajax({
   type: "POST",
   url: "get_ciudades.php",
   data: { estado_id: estado_id },
   success: function(response) {
      $('#ciudad').html(response);
   }
});
Esta línea de código hace una solicitud AJAX al archivo "get_ciudades.php" en el servidor web utilizando el método POST. Los datos enviados en la solicitud son un objeto con una propiedad llamada "estado_id" y su valor es el valor seleccionado del elemento HTML con el ID "estado". Cuando la respuesta del servidor llega con éxito, se ejecuta la función "success", que toma la respuesta como parámetro y actualiza el contenido del elemento HTML con el ID "ciudad" con la respuesta.

En resumen, este código utiliza una solicitud AJAX para obtener información del servidor web sin tener que recargar la página. Cuando un usuario selecciona una opción en un menú desplegable con el ID "estado", el código envía una solicitud al servidor web con el ID del estado seleccionado. Cuando el servidor responde con éxito, el código actualiza el contenido de un elemento HTML con el ID "ciudad" con la respuesta.

*/



















    /*ESTE ES SIMILAR AL DE ARRIBA PERO CON PEQUEÑOS DETALLES DIFERENTES TAMBIEN ES AJAX, AJAX COMO MENCIONA ARRIBA ES PARA ENVIAR
    DATOS Y RECIBIR ,DATOS, AJAX ES DINAMICO, SE MANTIENE ESTABLE Y NO
    NECESARIAMENTE LA PAGÍNA EXIGE RECARGAR, SI NO QUÉ ESTA AHÍ
    Y CUANDO ENVÍA LOS DATOS,EN CUANDO UNO SELECCIONES EN EL MENÚ DESPLEGABLE HACE EL LLAMADO EN UN ARCHIVO APARTE Y DESPUES ARCHIVO
    LO PROCESA EN LA BD, HACIENDO UNA CONSULTA,DESPUÉS LO REENVIA EN HTTPS*/


/*
<script>
    // Listener de eventos en el selector de estados
    $("#id_estado").change(function() {
        var id_estado = $(this).val();
        $.ajax({
            url: "division_select.php",
            type: "POST",
            data: {id_estado: id_estado},
            success: function(data) {
                // Actualizar el selector de ciudades
                $("#id_ciudad").html(data);

                // Reiniciar el selector de municipios y de parroquias
                $("#id_municipio").html("<option value=''>Seleccione un municipio</option>");
                $("#id_parroquia").html("<option value=''>Seleccione una parroquia</option>");
            }
        });
    });

    // Listener de eventos en el selector de ciudades
    $("#id_ciudad").change(function() {
        var id_ciudad = $(this).val();
        $.ajax({
            url: "division_select.php",
            type: "POST",
            data: {id_ciudad: id_ciudad},
            success: function(data) {
                // Actualizar el selector de municipios
                $("#id_municipio").html(data);

                // Reiniciar el selector de parroquias
                $("#id_parroquia").html("<option value=''>Seleccione una parroquia</option>");
            }
        });
    });

    // Listener de eventos en el selector de municipios
    $("#id_municipio").change(function() {
        var id_municipio = $(this).val();
        $.ajax({
            url: "division_select.php",
            type: "POST",
            data: {id_municipio: id_municipio},
            success: function(data) {
                // Actualizar el selector de parroquias
                $("#id_parroquia").html(data);
            }
        });
    });
    
</script>

En resumen, este código utiliza una solicitud AJAX para obtener información del servidor web sin tener que recargar la página. Cuando un usuario selecciona una opción en un menú desplegable con el ID "id_estado", el código envía una solicitud al servidor web con el ID del estado seleccionado y actualiza los menús desplegables de ciudades, municipios y parroquias con la información recibida del servidor web. Además, este código tiene tres detectores de eventos similares para los menús desplegables de ciudades, municipios y parroquias, que actualizan los menús desplegables correspondientes cuando un usuario selecciona una opción.


*/























                                                //13-5-2023

// Obtener el formulario y los campos
/*const miFormulario = document.querySelector('#miFormulario');
const campos = miFormulario.querySelectorAll('input, select');

// Agregar un evento al formulario cuando se envía
miFormulario.addEventListener('submit', (event) => {
  // Evitar que el formulario se envíe de forma predeterminada
  event.preventDefault();

  // Obtener los valores de los campos del formulario
  const valores = {};
  campos.forEach((campo) => {
    valores[campo.id] = campo.value;
  });

  // Mostrar los datos del formulario en el modal
  Object.keys(valores).forEach((key) => {
    const modalCampo = document.querySelector(`#modal-${key}`);
    if (modalCampo) {
      modalCampo.value = valores[key];
    }
  });

  // Mostrar el modal
  const miModal = new bootstrap.Modal(document.getElementById('miModal'));
  miModal.show();
});

// Manejar el evento de clic en el botón "Aceptar" del modal
const enviarBoton = document.querySelector('#enviar-datos');
enviarBoton.addEventListener('click', () => {
  const datos = {};
  campos.forEach((campo) => {
    datos[campo.id] = campo.value;
  });

  // Enviar los datos del formulario al servidor
  fetch('http://localhost/E.B.N%20BOLIVARIANA%20CIRO%202023%20//basedata/mysql.php', {
    method: 'POST',
    body: JSON.stringify(datos),
    headers: {
      'Content-Type': 'application/json'
    }
  })
  .then(response => {
    if (response.ok) {
      // Mostrar un mensaje de éxito al usuario
      const mensajeExito = document.querySelector('#mensaje-exito');
      mensajeExito.style.display = 'block';
    } else {
      // Mostrar un mensaje de error al usuario
      alert('Error al enviar los datos del formulario.');
    }
  })
  .catch(error => {
    console.error('Error al enviar los datos del formulario:', error);
  });

  // Cerrar el modal
  const miModal = bootstrap.Modal.getInstance(document.getElementById('miModal'));
  miModal.hide();
});*/

              //--------------------------------------------------------------------//
/*
<script>

// Obtener el formulario
const miFormulario = document.querySelector('#miFormulario');
const campos = miFormulario.querySelectorAll('input, select');

// Agregar un evento al formulario cuando se envía
miFormulario.addEventListener('submit', (event) => {
    // Evitar que el formulario se envíe de forma predeterminada
    event.preventDefault();

    // Obtener los valores de los campos del formulario
    const valores = {};
    campos.forEach((campo) => {
        valores[campo.id] = campo.value;
    });

    // Mostrar los datos del formulario en el modal
    Object.keys(valores).forEach((key) => {
        const modalCampo = document.querySelector(`#modal-${key}`);
        if (modalCampo) {
            modalCampo.value = valores[key];
        }
    });

    // Mostrar el modal
    const myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
});

// Manejar el evento de clic en el botón "Enviar" del modal
const enviarBoton = document.querySelector('#confirmar-envio');
enviarBoton.addEventListener('click', () => {
  const valores = {};
  campos.forEach((campo) => {
    valores[campo.id] = campo.value;
  });
  
  enviarDatos(valores);
});

// Enviar los datos del formulario al servidor
function enviarDatos(datos) {
  fetch('http://localhost/E.B.N%20BOLIVARIANA%20CIRO%202023%20//basedata/mysql.php', {
    method: 'POST',
    body: JSON.stringify(datos),
    headers: {
      'Content-Type': 'application/json'
    }
  })
  .then(response => {
    if (response.ok) {
      // Mostrar un mensaje de éxito al usuario
      const mensajeExito = document.querySelector('#mensaje-exito');
      mensajeExito.style.display = 'block';
    } else {
      // Mostrar un mensaje de error al usuario
      alert('Error al enviar los datos del formulario.');
    }
  })
  .catch(error => {
    console.error('Error al enviar los datos del formulario:', error);
  });
}
*/
                       //13-5-2023

/*Ambos códigos son prácticas comunes para crear un formulario con modal y enviar datos a un servidor. Utilizan eventos para obtener los valores del formulario, mostrarlos en el modal y enviarlos al servidor. La principal diferencia radica en la forma en que se obtienen los valores de los campos del formulario. Ambos son válidos y la elección depende del contexto y las preferencias del programador.*/




// window.location.href = 'otra_pagina.php';


 
    //Validar que el campo de cédula tenga dígitos
   /* var cedula = $('input[name="cedula"]').val();
    if (cedula.length !== 0) {
      alert('La cédula debe tener 0 dígitos');
      return;
    }

    //Validar que el campo de período escolar sea un número positivo
    var periodo_escolar = $('input[name="periodo_escolar"]').val();
    if (periodo_escolar <= 0) {
      alert('El período escolar debe ser un número positivo');
      return;*/
