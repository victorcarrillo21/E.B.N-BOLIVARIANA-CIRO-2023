/*10-5-2023 EXTRAÍDO DEL ARCHIVO ALUMNO.PHP ES EL MÉTODO AJAX



<!--
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
-->*/ 



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
-->




En resumen, este código utiliza una solicitud AJAX para obtener información del servidor web sin tener que recargar la página. Cuando un usuario selecciona una opción en un menú desplegable con el ID "id_estado", el código envía una solicitud al servidor web con el ID del estado seleccionado y actualiza los menús desplegables de ciudades, municipios y parroquias con la información recibida del servidor web. Además, este código tiene tres detectores de eventos similares para los menús desplegables de ciudades, municipios y parroquias, que actualizan los menús desplegables correspondientes cuando un usuario selecciona una opción.







*/
