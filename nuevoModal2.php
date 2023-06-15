<!-- Modal 
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título personalizado del modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h4>Representante</h4>
            <ul>
              <li>Nombre: <input type="text" name="nombre_representante" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_representante" class="form-control"></li>
              <li>Cédula: <input type="text" name="cedula_representante" class="form-control"></li>
              <li>Parentesco: <input type="text" name="parentesco_representante" class="form-control"></li>
              <li>Profesión: <input type="text" name="profesion_representante" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_representante" class="form-control"></li>
              <li>Dirección de trabajo: <input type="text" name="direccion_trabajo_representante" class="form-control"></li>
              <li>Teléfono: <input type="text" name="telefono_representante" class="form-control"></li>
              <li>Teléfono de trabajo: <input type="text" name="telefono_trabajo_representante" class="form-control"></li>
              <li>Vive con el alumno: <input type="text" name="vive_representante" class="form-control"></li>
              <li>Teléfono opcional: <input type="text" name="telefono_opcional_representante" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_representante" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_representante" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_representante" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_representante" class="form-control"></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-6">
            <h4>Alumno</h4>
            <ul>
              <li>Nombre: <input type="text" name="nombre_alumno" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_alumno" class="form-control"></li>
              <li>Género: <input type="text" name="genero_alumno" class="form-control"></li>
              <li>Fecha de nacimiento: <input type="text" name="fecha_nacimiento_alumno" class="form-control"></li>
              <li>Lugar de nacimiento: <input type="text" name="lugar_nacimiento_alumno" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_alumno" class="form-control"></li>
              <li>Periodo escolar: <input type="text" name="periodo_escolar_alumno" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_alumno" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_alumno" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_alumno" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_alumno" class="form-control"></li>
              <li>Procedencia: <input type="text" name="procedencia_alumno" class="form-control"></li>
              <li>Status: <input type="text" name="status_alumno" class="form-control"></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h4>Salud y transporte</h4>
            <ul>
              <li>Alergia: <input type="text" name="alergia" class="form-control"></li>
              <li>Dieta: <input type="text" name="dieta" class="form-control"></li>
              <li>Tratamiento médico: <input type="text" name="tratamiento_medico" class="form-control"></li>
              <li>Condición física: <input type="text" name="condicion_fisica" class="form-control"></li>
              <li>Atención especial: <input type="text" name="atencion_especial" class="form-control"></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-6">
            <h4>Procedencia</h4>
            <ul>
              <li>De dónde proviene: <input type="text" name="de_donde_proviene" class="form-control"></li>
              <li>Motivo: <input type="text" name="motivo_procedencia" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_procedencia" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_procedencia" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_procedencia" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_procedencia" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_procedencia" class="form-control"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


-->


<script>/*
// Obtener el formulario y el botón "Guardar cambios"
var formulario = document.getElementById("myForm");
var guardarCambiosBtn = document.getElementById("guardarCambios");

// Evento submit para validar el formulario y abrir el modal si es válido
formulario.addEventListener("submit", function(event) {
  event.preventDefault(); // Evita que se envíe el formulario

  if (formulario.checkValidity()) {
    $('#miModal').modal('show'); // Abre el modal si el formulario es válido
  }
});

// Evento click para guardar los datos del formulario en el modal
guardarCambiosBtn.addEventListener("click", function(event) {
  var datos = obtenerDatosDelFormulario();
  mostrarDatosEnModal(datos);
});

function obtenerDatosDelFormulario() {
  var formulario = document.getElementById("myForm");
  var datos = {};
  var elementos = formulario.elements;

  // Recorre todos los elementos del formulario y guarda sus valores en un objeto
  for (var i = 0; i < elementos.length; i++) {
    var elemento = elementos[i];
    if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
      datos[elemento.name] = elemento.value;
    }
  }

  return datos;
}

function mostrarDatosEnModal(datos) {
  // Cambia "modalBody" por el ID de tu contenedor de cuerpo de modal personalizado
  var modalBody = document.getElementById("modalBody");
  if (modalBody) {
    // Muestra los datos correspondientes a la sección "Representante"
    var representante = document.getElementById("representante");
    if (representante) {
      representante.innerHTML = "<p>Nombre: " + datos.representante_nombre + "</p>" +
                                 "<p>Teléfono: " + datos.representante_telefono + "</p>";


                                 
    }
    // Muestra los datos correspondientes a la sección "Alumno"
    var alumno = document.getElementById("alumno");
    if (alumno) {
      alumno.innerHTML = "<p>Nombre: " + datos.alumno_nombre + "</p>" +
                          "<p>Edad: " + datos.alumno_edad + "</p>";
    }
    // Muestra los datos correspondientes a la sección "Salud y Transporte"
    var saludTransporte = document.getElementById("saludTransporte");
    if (saludTransporte) {
      saludTransporte.innerHTML = "<p>Enfermedades: " + datos.enfermedades + "</p>" +
                                   "<p>Transporte: " + datos.transporte + "</p>";
    }
    // Muestra los datos correspondientes a la sección "Procedencia"
    var procedencia = document.getElementById("procedencia");
    if (procedencia) {
      procedencia.innerHTML = "<p>Ciudad: " + datos.ciudad + "</p>" +
                               "<p>País: " + datos.pais + "</p>";
    }
  }
}

/*
</script>






















<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título personalizado del modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#representante">Representante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#alumno">Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#salud">Salud y transporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#procedencia">Procedencia</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="representante">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para representante -->
                  <li>Nombre: <input type="text" name="nombre_representante" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_representante" class="form-control"></li>
              <li>Cédula: <input type="text" name="cedula_representante" class="form-control"></li>
              <li>Parentesco: <input type="text" name="parentesco_representante" class="form-control"></li>
              <li>Profesión: <input type="text" name="profesion_representante" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_representante" class="form-control"></li>
              <li>Dirección de trabajo: <input type="text" name="direccion_trabajo_representante" class="form-control"></li>
              <li>Teléfono: <input type="text" name="telefono_representante" class="form-control"></li>
              <li>Teléfono de trabajo: <input type="text" name="telefono_trabajo_representante" class="form-control"></li>
              <li>Vive con el alumno: <input type="text" name="vive_representante" class="form-control"></li>
              <li>Teléfono opcional: <input type="text" name="telefono_opcional_representante" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_representante" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_representante" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_representante" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_representante" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="alumno">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para alumno -->
                  
              <li>Nombre: <input type="text" name="nombre_alumno" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_alumno" class="form-control"></li>
              <li>Género: <input type="text" name="genero_alumno" class="form-control"></li>
              <li>Fecha de nacimiento: <input type="text" name="fecha_nacimiento_alumno" class="form-control"></li>
              <li>Lugar de nacimiento: <input type="text" name="lugar_nacimiento_alumno" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_alumno" class="form-control"></li>
              <li>Periodo escolar: <input type="text" name="periodo_escolar_alumno" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_alumno" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_alumno" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_alumno" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_alumno" class="form-control"></li>
              <li>Procedencia: <input type="text" name="procedencia_alumno" class="form-control"></li>
              <li>Status: <input type="text" name="status_alumno" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="salud">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para salud y transporte -->
                  
              <li>Alergia: <input type="text" name="alergia" class="form-control"></li>
              <li>Dieta: <input type="text" name="dieta" class="form-control"></li>
              <li>Tratamiento médico: <input type="text" name="tratamiento_medico" class="form-control"></li>
              <li>Condición física: <input type="text" name="condicion_fisica" class="form-control"></li>
              <li>Atención especial: <input type="text" name="atencion_especial" class="form-control"></li>
              <li>Nombre:<input type="text" name="nombre_transporte" class="form-control"></li>
              <li>Telefono:<input type="text" name="telefono" class="form-control"></li>
              <li>Cedula:<input type="text" name="cedula" class="form-control"></li>
              <li>Numero de placa:<input type="text" name="numero_de_placa" class="form-control"></li>
              <li>Numero telefonico opcional:<input type="text" name="numero_telefonico_opcional" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="procedencia">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para procedencia -->
                  
              <li>De dónde proviene: <input type="text" name="de_donde_proviene" class="form-control"></li>
              <li>Motivo: <input type="text" name="motivo_procedencia" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_procedencia" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_procedencia" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_procedencia" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_procedencia" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_procedencia" class="form-control"></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>





<script>

/*
               REPRESENTANTE FORMULARIO 

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


 var formulario = document.getElementById("myForm");

formulario.addEventListener("submit", function(event) {
  event.preventDefault(); // Evita que se envíe el formulario

  var datos = obtenerDatosDelFormulario(); // Utiliza la función "obtenerDatosDelFormulario()" para obtener los datos del formulario
  mostrarDatosEnModal(datos); // Muestra los datos en el modal

  $('#miModal').modal('show'); // Abre el modal
});

function obtenerDatosDelFormulario() {
  var formulario = document.getElementById("myForm");
  var datos = {};
  var elementos = formulario.elements;

  // Recorre todos los elementos del formulario y guarda sus valores en un objeto
  for (var i = 0; i < elementos.length; i++) {
    var elemento = elementos[i];
    if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
      datos[elemento.name] = elemento.value;
    }
  }

  return datos;
}

function mostrarDatosEnModal(datos) {
  var modalBody = document.getElementById("modalBody"); // Cambia "modalBody" por el ID de tu contenedor de cuerpo de modal personalizado
  if (modalBody) {
    var html = "";
    html += '<ul class="nav nav-tabs">';
    html += '<li class="nav-item">';
    html += '<a class="nav-link active" data-bs-toggle="tab" href="#representante">Representante</a>';
    html += '</li>';
    html += '<li class="nav-item">';
    html += '<a class="nav-link" data-bs-toggle="tab" href="#alumno">Alumno</a>';
    html += '</li>';
    html += '<li class="nav-item">';
    html += '<a class="nav-link" data-bs-toggle="tab" href="#salud">Salud y transporte</a>';
    html += '</li>';
    html += '<li class="nav-item">';
    html += '<a class="nav-link" data-bs-toggle="tab" href="#procedencia">Procedencia</a>';
    html += '</li>';
    html += '</ul>';
    html += '<div class="tab-content">';
    html += '<div class="tab-pane fade show active" id="representante">';
    html += '<div class="row">';
    html += '<div class="col-md-6">';
    html += '<ul>';
    // Campos para representante
    html += '<li>Nombre: ' + datos.nombre_representante + '</li>';
    html += '<li>Apellido: ' + datos.apellido_representante + '</li>';
    html += '<li>Cédula: ' + datos.cedula_representante + '</li>';
    html += '<li>Parentesco: ' + datos.parentesco_representante + '</li>';
    html += '<li>Profesión: ' + datos.profesion_representante + '</li>';
    html += '<li>Dirección: ' + datos.direccion_representante + '</li>';
    html += '<li>Dirección de trabajo: ' + datos.direccion_trabajo_representante + '</li>';
    html += '<li>Teléfono: ' + datos.telefono_representante + '</li>';
    html += '<li>Teléfono de trabajo: ' + datos.telefono_trabajo_representante + '</li>';
    html += '<li>Vive con el alumno: ' + datos.vive_representante + '</li>';
    html += '<li>Teléfono opcional: ' + datos.telefono_opcional_representante + '</li>';
    html += '<li>Estado: ' + datos.estado_representante + '</li>';
    html += '<li>Ciudad: ' + datos.ciudad_representante + '</li>';
    html += '<li>Municipio: ' + datos.municipio_representante + '</li>';
    html += '<li>Parroquia: ' + datos.parroquia_representante + '</li>';
    html += '</ul>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="tab-pane fade" id="alumno">';
    html += '<div class="row">';
    html += '<div class="col-md-6">';
    html += '<ul>';
    // Campos para alumno
    html += '<li>Nombre: ' + datos.nombre_alumno + '</li>';
    html += '<li>Apellido: ' + datos.apellido_alumno + '</li>';
    html += '<li>Género: ' + datos.genero_alumno + '</li>';
    html += '<li>Fecha de nacimiento: ' + datos.fecha_nacimiento_alumno + '</li>';
    html += '<li>Lugar de nacimiento: ' + datos.lugar_nacimiento_alumno + '</li>';
    html += '<li>Dirección: ' + datos.direccion_alumno + '</li>';
    html += '<li>Periodo escolar: ' + datos.periodo_escolar_alumno + '</li>';
    html += '<li>Estado: ' + datos.estado_alumno + '</li>';
    html += '<li>Ciudad: ' + datos.ciudad_alumno + '</li>';
    html += '<li>Municipio: ' + datos.municipio_alumno + '</li>';
    html += '<li>Parroquia: ' + datos.parroquia_alumno + '</li>';
    html += '<li>Procedencia: ' + datos.procedencia_alumno + '</li>';
    html += '<li>Status: ' + datos.status_alumno + '</li>';
    html += '</ul>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="tab-pane fade" id="salud">';
    html +='<div class="row">';
    html += '<div class="col-md-6">';
    html += '<ul>';
    // Campos para salud y transporte
    html += '<li>Alergia: ' + datos.alergia + '</li>';
    html += '<li>Dieta: ' + datos.dieta + '</li>';
    html += '<li>Tratamiento médico: ' + datos.tratamiento_medico + '</li>';
    html += '<li>Condición física: ' + datos.condicion_fisica + '</li>';
    html += '<li>Atención especial: ' + datos.atencion_especial + '</li>';
    html += '<li>Nombre de transporte: ' + datos.nombre_transporte + '</li>';
    html += '<li>Teléfono de transporte: ' + datos.telefono + '</li>';
    html += '<li>Cédula de transporte: ' + datos.cedula + '</li>';
    html += '<li>Número de placa de transporte: ' + datos.numero_de_placa + '</li>';
    html += '<li>Teléfono opcional de transporte: ' + datos.numero_telefonico_opcional + '</li>';
    html += '</ul>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="tab-pane fade" id="procedencia">';
    html += '<div class="row">';
    html += '<div class="col-md-6">';
    html += '<ul>';
    // Campos para procedencia
    html += '<li>De dónde proviene: ' + datos.de_donde_proviene + '</li>';
    html += '<li>Motivo: ' + datos.motivo_procedencia + '</li>';
    html += '<li>Dirección: ' + datos.direccion_procedencia + '</li>';
    html += '<li>Estado: ' + datos.estado_procedencia + '</li>';
    html += '<li>Ciudad: ' + datos.ciudad_procedencia + '</li>';
    html += '<li>Municipio: ' + datos.municipio_procedencia + '</li>';
    html += '<li>Parroquia: ' + datos.parroquia_procedencia + '</li>';
    html += '</ul>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    modalBody.innerHTML = html;
  }
}
</script>















<script>
/*
 
  // Obtener el formulario y el botón "Guardar cambios"
  var formulario = document.getElementById("myForm");
  var guardarCambiosBtn = document.getElementById("guardarCambios");

  // Evento click para abrir el modal al presionar el botón en el formulario
  formulario.addEventListener("guardarCambios", function(event) {
    event.preventDefault(); // Evita que se envíe el formulario
    $('#miModal').modal('show'); // Abre el modal
  });

  // Evento click para guardar los datos del formulario en el modal
  guardarCambiosBtn.addEventListener("click", function(event) {
    var datos = obtenerDatosDelFormulario(); // Utiliza la función "obtenerDatosDelFormulario()" para obtener los datos del formulario
    mostrarDatosEnModal(datos); // Muestra los datos en el modal
  });

  function obtenerDatosDelFormulario() {
    var formulario = document.getElementById("myForm");
    var datos = {};
    var elementos = formulario.elements;

    // Recorre todos los elementos del formulario y guarda sus valores en un objeto
    for (var i = 0; i < elementos.length; i++) {
      var elemento = elementos[i];
      if (elemento.tagName === "INPUT" || elemento.tagName === "TEXTAREA") {
        datos[elemento.name] = elemento.value;
      }
    }

    return datos;
  }

  function mostrarDatosEnModal(datos) {
    var modalBody = document.getElementById("modalBody"); // Cambia "modalBody" por el ID de tu contenedor de cuerpo de modal personalizado
    if (modalBody) {
      var html = "";
      // Recorre todos los datos del formulario y crea un párrafo para cada uno
      for (var clave in datos) {
        html += "<p>" + clave + ": " + datos[clave] + "</p>";
      }
      modalBody.innerHTML = html; 
    }     
    
  }
 
</script>
 






































<script>


/*
var formulario = document.getElementById("myForm");

formulario.addEventListener("submitBtn", function(event) {
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
  var modalBody = document.getElementById("modalBody"); // Cambia "modalBody" por el ID de tu contenedor de cuerpo de modal personalizado
  if (modalBody) {
    var html = "";
    for (var clave in datos) {
      html += "<p>" + clave + ": " + datos[clave] + "</p>";
    }
    modalBody.innerHTML = html;
    // Asegúrate de que tu modal personalizado ya esté abierto para que los datos puedan ser mostrados en él
  }
}
*/
</script>



 
 



 



 



























<!--
<div class="modal fade" id="nuevoModal3" tabindex="-1" role="dialog" aria-labelledby="nuevoModal3Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="nuevoModal3Label">Formulario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td colspan="2"><h4>Representante</h4></td>
              </tr>
              <tr>
                <td>Nombre:</td>
                <td><input type="text" class="form-control" name="nombre_representante" id="nombre_representante"></td>
                <td>Apellido:</td>
                <td><input type="text" class="form-control" name="apellido_representante" id="apellido_representante"></td>
                <td>Cedula:</td>
                <td><input type="text" class="form-control" name="cedula_representante" id="cedula_representante"></td>
              </tr>
              <tr>
                <td>Parentesco:</td>
                <td><input type="text" class="form-control" name="parentesco_representante" id="parentesco_representante"></td>
                <td>Profesion:</td>
                <td><input type="text" class="form-control" name="profesion_representante" id="profesion_representante"></td>
                <td>Direccion:</td>
                <td><input type="text" class="form-control" name="direccion_representante" id="direccion_representante"></td>
              </tr>
              <tr>
                <td>Direccion trabajo:</td>
                <td><input type="text" class="form-control" name="direccion_tra_representante" id="direccion_tra_representante"></td>
                <td>Telefono:</td>
                <td><input type="text" class="form-control" name="telefono_representante" id="telefono_representante"></td>
                <td>Telefono de opcional:</td>
                <td><input type="text" class="form-control" name="telefono_opc_representante" id="telefono_opc_representante"></td>
              </tr>
              <tr>
                <td>Vive:</td>
                <td><input type="text" class="form-control" name="vive_representante" id="vive_representante"></td>
                <td>Telefono de opcional:</td>
                <td><input type="text" class="form-control" name="telefono_tra_representante" id="telefono_tra_representante"></td>
                <td>Estado:</td>
                <td><input type="text" class="form-control" name="id_estado_representante" id="id_estado_representante"></td>
              </tr>
              <tr>
                <td>Ciudad:</td>
                <td><input type="text" class="form-control" name="id_ciudad_representante" id="id_ciudad_representante"></td>
                <td>Municipio:</td>
                <td><input type="text" class="form-control" name="id_municipio_representante" id="id_municipio_representante"></td>
                <td>Parroquia:</td>
                <td><input type="text" class="form-control" name="id_parroquia_representante" id="id_parroquia_representante"></td>
              </tr>
              <tr>
                <td colspan="2"><h4>Alumno</h4></td>
              </tr>
              <tr>
                <td>Nombre:</td>
                <td><input type="text" class="form-control" name="nombre_alumno" id="nombre_alumno"></td>
                <td>Genero:</td>
                <td><input type="text" class="form-control" name="genero_alumno" id="genero_alumno"></td>
                <td>Fecha de nacimiento:</td>
                <td><inputtype="text" class="form-control" name="fecha_nacimiento_alumno" id="fecha_nacimiento_alumno"></td>
              </tr>
              <tr>
                <td>Edad:</td>
                <td><input type="text" class="form-control" name="edad_alumno" id="edad_alumno"></td>
                <td>Grado:</td>
                <td><input type="text" class="form-control" name="grado_alumno" id="grado_alumno"></td>
                <td>Seccion:</td>
                <td><input type="text" class="form-control" name="seccion_alumno" id="seccion_alumno"></td>
              </tr>
              <tr>
                <td>Turno:</td>
                <td><input type="text" class="form-control" name="turno_alumno" id="turno_alumno"></td>
                <td>Plantel de procedencia:</td>
                <td><input type="text" class="form-control" name="plantel_procedencia_alumno" id="plantel_procedencia_alumno"></td>
                <td>Año escolar:</td>
                <td><input type="text" class="form-control" name="ano_escolar_alumno" id="ano_escolar_alumno"></td>
              </tr>
              <tr>
                <td>Nacionalidad:</td>
                <td><input type="text" class="form-control" name="nacionalidad_alumno" id="nacionalidad_alumno"></td>
                <td>Estado:</td>
                <td><input type="text" class="form-control" name="id_estado_alumno" id="id_estado_alumno"></td>
                <td>Ciudad:</td>
                <td><input type="text" class="form-control" name="id_ciudad_alumno" id="id_ciudad_alumno"></td>
              </tr>
              <tr>
                <td>Municipio:</td>
                <td><input type="text" class="form-control" name="id_municipio_alumno" id="id_municipio_alumno"></td>
                <td>Parroquia:</td>
                <td><input type="text" class="form-control" name="id_parroquia_alumno" id="id_parroquia_alumno"></td>
                <td>Direccion:</td>
                <td><input type="text" class="form-control" name="direccion_alumno" id="direccion_alumno"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="nuevoModal4" tabindex="-1" role="dialog" aria-labelledby="nuevoModal4Label">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="nuevoModal4Label">Formulario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h4>Representante</h4>
            <div class="form-group">
              <label for="nombre_representante">Nombre:</label>
              <input type="text" class="form-control" name="nombre_representante" id="nombre_representante">
            </div>
            <div class="form-group">
              <label for="apellido_representante">Apellido:</label>
              <input type="text" class="form-control" name="apellido_representante" id="apellido_representante">
            </div>
            <div class="form-group">
                <label for="cedula_representante" class="col-form-label">Cedula:</label>
                <input type="text" class="form-control" name="cedula_representante" id="cedula_representante">
              </div>
              <div class="form-group">
                <label for="parentesco_representante" class="col-form-label">Parentesco:</label>
                <input type="text" class="form-control" name="parentesco_representante" id="parentesco_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="profesion_representante" class="col-form-label">Profesion::</label>
                <input type="text" class="form-control" name="profesion_representante" id="profesion_representante">
              </div>
              <div class="form-group">
                <label for="direccion_representante" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" name="direccion_representante" id="direccion_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="direccion_tra_representante" class="col-form-label">Direccion trabajo:</label>
                <input type="text" class="form-control" name="direccion_tra_representante" id="direccion_tra_representante">
              </div>
              <div class="form-group">
                <label for="telefono_representante" class="col-form-label">Telefono:</label>
                <input type="text" class="form-control" name="telefono_representante" id="telefono_representante">
              </div>
              <div class="form-group">
                <label for="telefono_opc_representante" class="col-form-label">Telefono de Opcional:</label>
                <input type="text" class="form-control" name="telefono_opc_representante" id="telefono_opc_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="vive_representante" class="col-form-label">Vive:</label>
                <input type="text" class="form-control" name="vive_representante" id="vive_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="telefono_tra_representante" class="col-form-label">Telefono de opcional:</label>
                <input type="text" class="form-control" name="telefono_tra_representante" id="telefono_tra_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="id_estado_representante" class="col-form-label">Estado:</label>
                <input type="text" class="form-control" name="id_estado_representante" id="id_estado_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="id_ciudad_representante" class="col-form-label">Ciudad:</label>
                <input type="text" class="form-control" name="id_ciudad_representante" id="id_ciudad_representante">
              </div>
              </div>
              <div class="form-group">
                <label for="id_municipio_representante" class="col-form-label">Municipio:</label>
                <input type="text" class="form-control" name="id_municipio_representante" id="id_municipio_representante">
              </div>
              <div class="form-group">
                <label for="id_parroquia_representante" class="col-form-label">Parroquia:</label>
                <input type="text" class="form-control" name="id_parroquia_representante" id="id_parroquia_representante">
              </div>
              
        
          </div>
          <div class="col-xs-12 col-md-6">
            <h4>Alumno</h4>
            <div class="form-group">
                <label for="nombre_alumno" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre_alumno" id="nombre_alumno">
              </div>
              <div class="form-group">
                <label for="apellido_alumno" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido_alumno" id="apellido_alumno">
              </div>
              <div class="form-group">
                <label for="genero_alumno" class="col-form-label">Genero alumno:</label>
                <input type="text" class="form-control" name="genero_alumno" id="genero_alumno">
              </div>
              <div class="form-group">
                <label for="fecha_nac_alumno" class="col-form-label">Fecha de nacimiento:</label>
                <input type="text" class="form-control" name="fecha_nac_alumno" id="fecha_nac_alumno">
              </div>
              <div class="form-group">
                <label for="lugar_nac_alumno" class="col-form-label">Fecha de nacimiento:</label>
                <input type="text" class="form-control" name="lugar_nac_alumno" id="lugar_nac_alumno">
              </div>
              <div class="form-group">
                <label for="direccion_alumno" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" name="direccion_alumno" id="direccion_alumno">
              </div>
              <div class="form-group">
                <label for="periodo_escolar_alumno" class="col-form-label">Periodo escolar:</label>
                <input type="text" class="form-control" name="periodo_escolar_alumno" id="periodo_escolar_alumno">
              </div>
              <div class="form-group">
                <label for="id_estado_alumno" class="col-form-label">Estado:</label>
                <input type="text" class="form-control" name="id_estado_alumno" id="id_estado_alumno">
              </div>
              <div class="form-group">
                <label for="id_ciudad_alumno" class="col-form-label">Ciudad:</label>
                <input type="text" class="form-control" name="id_ciudad_alumno" id="id_ciudad_alumno">
              </div>
              <div class="form-group">
                <label for="id_municipio_alumno" class="col-form-label">Municipio:</label>
                <input type="text" class="form-control" name="id_municipio_alumno" id="id_municipio_alumno">
              </div>
              <div class="form-group">
                <label for="parroquia_alumno" class="col-form-label">Parroquia:</label>
                <input type="text" class="form-control" name="parroquia_alumno" id="parroquia_alumno">
              </div>
              <div class="form-group">
                <label for="procedencia_alumno" class="col-form-label">Procedencia:</label>
                <input type="text" class="form-control" name="procedencia_alumno" id="procedencia_alumno">
              </div>
              <div class="form-group">
                <label for="status_alumno" class="col-form-label">Status:</label>
                <input type="text" class="form-control" name="status_alumno" id="status_alumno">
              </div>
           
 
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h4>Salud y transporte</h4>
 
            <div class="form-group">
                <label for="alergia" class="col-form-label">Alergia:</label>
                <input type="text" class="form-control" name="alergia" id="alergia">
              </div>
              <div class="form-group">
                <label for="dieta" class="col-form-label">Dieta:</label>
                <input type="text" class="form-control" name="dieta" id="dieta">
              </div>
              <div class="form-group">
                <label for="tratamiento_M" class="col-form-label">Tratamiento de medico:</label>
                <input type="text" class="form-control" name="tratamiento_M" id="tratamiento_M">
              </div>
              <div class="form-group">
                <label for="condicion_fisca" class="col-form-label">Condicion fisica:</label>
                <input type="text" class="form-control" name="condicion_fisca" id="condicion_fisca">
              </div>
              <div class="form-group">
                <label for="atencion_especial" class="col-form-label">Atencion Especial:</label>
                <input type="text" class="form-control" name="atencion_especial" id="atencion_especial">
              </div>
              <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>
              <div class="form-group">
                <label for="telefono" class="col-form-label">Telefono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono">
              </div>
              <div class="form-group">
                <label for="cedula" class="col-form-label">Cedula:</label>
                <input type="text" class="form-control" name="cedula" id="cedula">
              </div>
              <div class="form-group">
                <label for="numero_de_placa" class="col-form-label">Numero de placa:</label>
                <input type="text" class="form-control" name="numero_de_placa" id="numero_de_placa">
              </div>
              <div class="form-group">
                <label for="numero_telefonico_opcional" class="col-form-label">Numero de telefonico opcional:</label>
                <input type="text" class="form-control" name="numero_telefonico_opcional" id="numero_telefonico_opcional">
              </div>
           
          </div>
          <div class="col-xs-12 col-md-6">
            <h4>Procedencia</h4>
        
            <div class="form-group">
                <label for="de_donde_proviene" class="col-form-label">De dónde proviene:</label>
                <input type="text" class="form-control" name="de_donde_proviene" id="de_donde_proviene">
              </div>
              <div class="form-group">
                <label for="motivo" class="col-form-label">Motivo:</label>
                <input type="text" class="form-control" name="motivo" id="motivo">
              </div>
              <div class="form-group">
                <label for="direccion" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
              </div>
              <div class="form-group">
                <label for="id_estado" class="col-form-label">Estado:</label>
                <input type="text" class="form-control" name="id_estado" id="id_estado">
              </div>
              <div class="form-group">
                <label for="id_ciudad" class="col-form-label">Ciudad:</label>
                <input type="text" class="form-control" name="id_ciudad" id="id_ciudad">
              </div>
              <div class="form-group">
                <label for="id_municipio" class="col-form-label">Municipio</label>
                <input type="text" class="form-control" name="id_municipio" id="id_municipio">
              </div>
              <div class="form-group">
                <label for="id_parroquia" class="col-form-label">Parroquia:</label>
                <input type="text" class="form-control" name="id_parroquia" id="id_parroquia">
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>






-->