/*function recargaCiudades() {
    $.ajax({
        type: "POST",
        url: "/../basedata/proceso.php",
        data: "estado=" + $("#estado_select").val(),
        success: function(resultado) {
            $('#ciudad_select').html(resultado);
            recargaMunicipios(); // Llamamos a la función para actualizar el select de municipios
        }
    });


function recargaMunicipios() {
    $.ajax({
        type: "POST",
        url: "/../basedata/proceso.php",
        data: "ciudad=" + $("#ciudad_select").val(),
        success: function(resultado) {
            $('#municipio_select').html(resultado);
        }
    });
}

function recargaMunicipios() {
    $.ajax({
        type: "POST",
        url: "/../basedata/proceso.php",
        data: "estado=" + $("#estado_select").val(),
        success: function(resultado) {
            $('#municipio_select').html(resultado);
            recargaParroquias(); // Llamamos a la función para actualizar el select de parroquias
        }
    });
}

function recargaParroquias() {
    $.ajax({
        type: "POST",
        url: "/../basedata/proceso.php",
        data: "municipio=" + $("#municipio_select").val(),
        success: function(resultado) {
            $('#parroquia_select').html(resultado);
        }
    });
}*/