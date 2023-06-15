






                  /* REPRESENTANTE FORMULARIO 

var nombre = document.getElementById("nombre_representante").value;
var apellido_r = document.getElementById("apellido_representante").value;
var cedula_r = document.getElementById("cedula_representante").value;
var parentesco_r = document.getElementById("parentesco_representante").value;
var profesion_r = document.getElementById("profesion_representante").value;
var direccion_r = document.getElementById("direccion_representante").value;
var direccion_tra_r = document.getElementById("direccion_tra_representante").value;
var telefono_r = document.getElementById("telefono_representante").value;
var telefono_tra_r = document.getElementById("telefono_tra_representante").value;
var telefono_opc_r = document.getElementById("telefono_opc_representante").value;
var vive_si_r = document.getElementById("vive-si_representante").value;
var vive_no_r = document.getElementById("vive-no_representante").value;
var state = document.getElementById("state").value;
var ciudad_select = document.getElementById("ciudad_select").value;
var municipio_select = document.getElementById("municipio_select").value;
var parroquia_select = document.getElementById("parroquia_select").value;

                      ALUMNO FORMULARIO 

var nombre_a = document.getElementById("nombre_alumno").value;
var apellido_a = document.getElementById("apellido_alumno").value;
var genero_a = document.getElementById("genero_alumno").value;
var fecha_nac_a = document.getElementById("fecha_nac_alumno").value;
var lugar_nac_a = document.getElementById("lugar_nac_alumno").value;
var state = document.getElementById("state").value;
var ciudad_select = document.getElementById("ciudad_select").value;
var municipio_select = document.getElementById("municipio_select").value;
var parroquia_select = document.getElementById("parroquia_select").value;
var periodo_escolar_a = document.getElementById("periodo_escolar_alumno").value;
var id_procedencia_a = document.getElementById("id_procedencia_alumno").value;

                        ESTADOS ALUMNO  

var activo_on = document.getElementById("success-outlined_alumno").value;
var activo_of = document.getElementById("danger-outlined_alumno").value;

                     SALUD Y TRANSPORTE FORMULARIO

var alergia_s = document.getElementById("alergia1").value;
var dieta_s = document.getElementById("dieta").value;
var tratamiento_s = document.getElementById("tratamiento_M").value;
var condicion_fisica_s = document.getElementById("condicion_fisica").value;
var atencion_especial_s = document.getElementById("atencion_especial").value;

                            TRANSPORTE 

var nombre_t = document.getElementById("nombre_transporte").value;
var telefono_t = document.getElementById("telefono_transporte").value;
var cedula_t = document.getElementById("cedula_transporte").value;
var numero_t = document.getElementById("numero_de_placa").value;
var numero_opc_t = document.getElementById("numero_telefonico_opcional").value;

                            
                            PROCEDENCIA 


var de_donde_proviene_p = document.getElementById("de_donde_proviene").value;
var motivo_p = document.getElementById("motivo").value;
var direccion_p = document.getElementById("direccion").value;
var estado = document.getElementById("estado").value;
var ciudad = document.getElementById("ciudad").value;
var municipio = document.getElementById("municipio").value;
var parroquia = document.getElementById("parroquia").value;
 

*/

 





var submitBtn = document.getElementById("submitBtn");

submitBtn.addEventListener("click", function(event) {
  event.preventDefault(); // Evita que se envíe el formulario
  var datos = obtenerDatosDelFormulario(); // Utiliza la función "obtenerDatosDelFormulario()" para obtener los datos del formulario
  mostrarDatosEnModal(datos); // Muestra los datos en el modal
});

function obtenerDatosDelFormulario() {
  var formulario = document.getElementById("myForm");
  var datos = {};
  var elementos = formulario.elements;

  for (var i = 0; i < elementos.length; i++) {
    var elemento = elementos[i];
    if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
      datos[elemento.name] = elemento.value;
    }
  }

  return datos;
}

function mostrarDatosEnModal(datos) {
  var html = "";
  for (var clave in datos) {
    html += "<p>" + clave + ": " + datos[clave] + "</p>";
  }
  document.getElementById("modal-body").innerHTML = html;
  $('#miModal').modal('show'); // Abre el modal
}

var formulario = document.getElementById("myForm");

formulario.addEventListener("submit", function(event) {
  event.preventDefault(); // Evita que se envíe el formulario
  var datos = obtenerDatosDelFormulario(); // Utiliza la función "obtenerDatosDelFormulario()" para obtener los datos del formulario
  mostrarDatosEnModal(datos); // Muestra los datos en el modal
});
