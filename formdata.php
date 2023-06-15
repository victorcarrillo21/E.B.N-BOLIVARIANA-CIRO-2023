









var nombre = document.getElementById("nombre").value;




var formulario = document.getElementById("miFormulario");
var datos = {};

for (var i = 0; i < formulario.elements.length; i++) {
  var elemento = formulario.elements[i];
  if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
    datos[elemento.name] = elemento.value;
  }
}

window.formularioDatos = datos;











function mostrarDatosEnModal(datos) {
  var html = "";
  for (var clave in datos) {
    html += "<p>" + clave + ": " + datos[clave] + "</p>";
  }
  document.getElementById("modal-body").innerHTML = html;
}


var formulario = document.getElementById("miFormulario");
var datos = {};

formulario.addEventListener("submit", function(event) {
  event.preventDefault(); // Evita que se envíe el formulario
  for (var i = 0; i < formulario.elements.length; i++) {
    var elemento = formulario.elements[i];
    if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
      datos[elemento.name] = elemento.value;
    }
  }
  mostrarDatosEnModal(datos);
});



var miModal = new bootstrap.Modal(document.getElementById("miModal"));
miModal.show();
