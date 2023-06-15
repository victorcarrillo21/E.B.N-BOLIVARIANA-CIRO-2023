



 
<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Información del formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <p><strong>Representante:</strong></p>
            <p id="nombre_representante"></p>
            <p id="apellido_representante"></p>
            <p id="cedula_representante"></p>
            <p id="parentesco_representante"></p>
            <p id="profesion_representante"></p>
            <p id="direccion_tra_representante"></p>
            <p id="telefono_representante"></p>
            <p id="telefono_tra_representante"></p>
            <p id="telefono_opc_representante"></p>
            <p id="vive-si_representante"></p>
            <p id="vive-no_representante"></p>
            <p id="id_estado_representante"></p>
            <p id="id_ciudad_representante"></p>
            <p id="id_municipio_representante"></p>
            <p id="id_parroquia_representante"></p>
          </div>
          <div class="col-md-6">
          <p><strong>Alumno:</strong></p>
          <p id="nombre_alumno"></p>
          <p id="apellido_alumno"></p>
          <p id="cedula_alumno"></p>
          <p id="genero_alumno"></p>
          <p id="fecha_nac_alumno"></p>
          <p id="lugar_nac_alumno"></p>
          <p id="id_estado_alumno"></p>
          <p id="id_ciudad_alumno"></p>
          <p id="id_municipio_alumno"></p>
          <p id="id_parroquia_alumno"></p>
          <p id="direccion_alumno"></p>
          <p id="periodo_escolar_alumno"></p>
          <p id="id_procedencia_alumno"></p>
          <p id="success-outlined_alumno"></p>
          <p id="danger-outlined_alumno"></p>
          </div>
          <div class="col-md-6">
          <p><strong>Salud y Transporte:</strong></p>
          <p id="alergia"></p>
          <p id="dieta"></p>
          <p id="tratamiento_M"></p>
          <p id="condicion_fisica"></p>
          <p id="tratamiento_M"></p>
          <p id="nombre_tra"></p>
          <p id="telefono_tra"></p>
          <p id="cedula_tra"></p>
          <p id="numero_de_placa_tra"></p>
          <p id="numero_telefonico_opcional_tra"></p>

          </div>
          <div class="col-md-6">
          <p><strong>Procedencia:</strong></p>
             <p id="de_donde_proviene_proce"></p>
             <p id="motivo_proce"></p>
             <p id="direccion_proce"></p>
             <p id="id_estado"></p>
             <p id="id_ciudad"></p>
             <p id="id_municipio"></p>
             <p id="id_parroquia"></p>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<script>
function mostrarDatosEnModal() {

  // Obtener elementos del DOM
  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("close")[0];

  // Obtener los valores de los campos del formulario
  var nombre_representante_ciro = document.getElementById("nombre_representante_ciro").value;
  var apellido_representante_ciro = document.getElementById("apellido_representante_ciro").value;
  var cedula_representante_ciro = document.getElementById("cedula_representante_ciro").value;
  var parentesco_representante_ciro = document.getElementById("parentesco_representante_ciro").value;
  var profesion_representante_ciro = document.getElementById("profesion_representante_ciro").value;
  var direccion_representante_ciro = document.getElementById("direccion_representante_ciro").value;
  var direccion_tra_representante_ciro = document.getElementById("direccion_tra_representante_ciro").value;
  var telefono_representante_ciro = document.getElementById("telefono_representante_ciro").value;
  var telefono_tra_representante_ciro = document.getElementById("telefono_tra_representante_ciro").value;
  var telefono_opc_representante_ciro = document.getElementById("telefono_opc_representante_ciro").value;
  var vive_si_representante_ciro = document.getElementById("vive_si_representante_ciro").value;
  var vive_no_representante_ciro = document.getElementById("vive_no_representante_ciro").value;
  var state = document.getElementById("state").value;
  var ciudad_select = document.getElementById("ciudad_select").value;
  var municipio_select = document.getElementById("municipio_select").value;
  var parroquia_select = document.getElementById("parroquia_select").value;

  // Asignar los valores a los elementos del modal
  
  document.getElementById("nombre_representante").innerHTML = "Nombre: " + nombre_representante_ciro;
  document.getElementById("apellido_representante").innerHTML = "Apellido: " + apellido_representante_ciro;
  document.getElementById("cedula_representante").innerHTML = "Cedula: " + cedula_representante_ciro;
  document.getElementById("parentesco_representante").innerHTML = "Parentesco: " + parentesco_representante_ciro;
  document.getElementById("profesion_representante").innerHTML = "Profesion: " + profesion_representante_ciro;
  document.getElementById("direccion_representante").innerHTML= "Direccion: " + direccion_representante_ciro;
  document.getElementById("direccion_tra_representante").innerHTML = "Direccion Trabajo: " + direccion_tra_representante_ciro;
  document.getElementById("telefono_representante").innerHTML = "Teléfono: " + telefono_representante_ciro;
  document.getElementById("telefono_tra_representante").innerHTML = "Teléfono de Trabajo: " + telefono_tra_representante_ciro;
  document.getElementById("telefono_opc_representante").innerHTML = "Teléfono Opcional: " + telefono_opc_representante_ciro;
  document.getElementById("vive_si_representante").innerHTML = "Estado activo: " + vive_si_representante_ciro;
  document.getElementById("vive_no_representante").innerHTML = "Estado inactivo: " + vive_no_representante_ciro;
  document.getElementById("id_estado_representante").innerHTML = "Estado: " + state;
  document.getElementById("id_ciudad_representante").innerHTML = "Ciudad: " + ciudad_select;
  document.getElementById("id_municipio_representante").innerHTML = "Municipio: " + municipio_select;
  document.getElementById("id_parroquia_representante").innerHTML = "Parroquia: " + parroquia_select;

  var nombre_alumno_ciro_a = document.getElementById("nombre_alumno_ciro_a").value;
  var apellido_alumno_ciro_a = document.getElementById("apellido_alumno_ciro_a").value;
  var cedula_alumno_ciro_a = document.getElementById("cedula_alumno_ciro_a").value;
  var genero_alumno_ciro_a = document.getElementById("genero_alumno_ciro_a").value;
  var fecha_nac_alumno_ciro_a = document.getElementById("fecha_nac_alumno_ciro_a").value;
  var lugar_nac_alumno_ciro_a = document.getElementById("lugar_nac_alumno_ciro_a").value;
  var state_co = document.getElementById("state_co").value;
  var ciudad_select = document.getElementById("ciudad_select").value;
  var municipio_select = document.getElementById("municipio_select").value;
  var parroquia_select = document.getElementById("parroquia_select").value;
  var direccion_alumno_ciro_a = document.getElementById("direccion_alumno_ciro_a").value;

  var periodo_escolar_alumno_ciro_a = document.getElementById("periodo_escolar_alumno_ciro_a").value;

  var id_procedencia_alumno_ciro_a = document.getElementById("id_procedencia_alumno_ciro_a").value;

  var success_outlined_alumno_ciro_a = document.getElementById("success_outlined_alumno_ciro_a").value;

  var danger_outlined_alumno_ciro_a = document.getElementById("danger_outlined_alumno_ciro_a").value;

  // Asignar los valores a los elementos del modal



  document.getElementById("nombre_alumno").innerHTML = "Nombre: " + nombre_alumno_ciro_a;

    document.getElementById("apellido_alumno").innerHTML = "Apellido: " + apellido_alumno_ciro_a;

  document.getElementById("cedula_alumno").innerHTML = "Cedula: " + cedula_alumno_ciro_a;

  document.getElementById("genero_alumno").innerHTML = "Género: " + genero_alumno_ciro_a;

  document.getElementById("fecha_nac_alumno").innerHTML = "Fecha de nacimiento: " + fecha_nac_alumno_ciro_a;

  document.getElementById("lugar_nac_alumno").innerHTML = "Lugar de nacimiento: " + lugar_nac_alumno_ciro_a;

  document.getElementById("id_estado_alumno").innerHTML = "Estado: " + state_co;

  document.getElementById("id_ciudad_alumno").innerHTML = "Ciudad: " + ciudad_select;

  document.getElementById("id_municipio_alumno").innerHTML = "Municipio: " + municipio_select;

  document.getElementById("id_parroquia_alumno").innerHTML = "Parroquia: " + parroquia_select;

  document.getElementById("direccion_alumno").innerHTML = "Dirección: " + direccion_alumno_ciro_a;

  document.getElementById("periodo_escolar_alumno").innerHTML = "Periodo escolar: " + periodo_escolar_alumno_ciro_a;

  document.getElementById("id_procedencia_alumno").innerHTML = "Procedencia: " + id_procedencia_alumno_ciro_a;

  
  document.getElementById("success_outlined_alumno").innerHTML = "Activo: " + success_outlined_alumno_ciro_a;
  
  document.getElementById("danger_outlined_alumno").innerHTML = "Inactivo: " + danger_outlined_alumno_ciro_a;

  

 

          
  var alergia1_salud =  document.getElementById("alergia1_salud").value;
          
  var dieta_salud = document.getElementById("dieta_salud").value;
          
  var tratamiento_M_salud = document.getElementById("tratamiento_M_salud").value;
          
  var condicion_fisica_salud = document.getElementById("condicion_fisica_salud").value;
          
  var atencion_especial_sal = document.getElementById ("atencion_especial_sal").value;
          
  var nombre_transporte = document.getElementById ("nombre_transporte").value;
          
  var telefono_transporte = document.getElementById ("telefono_transporte").value;
          
  var cedula_transporte = document.getElementById ("cedula_transporte").value;
          
  var numero_de_placa_transporte = document.getElementById  ("numero_de_placa_transporte").value;
          
  var numero_telefonico_opcional_transporte = document.getElementById ("numero_telefonico_opcional_transporte").value;

          
  document.getElementById("arlegia").innerHTML = "Alergia:" + alergia1_salud;
 
          
  document.getElementById("dieta_salud").innerHTML ="Dieta de salud:" + dieta_salud; 

          
  document.getElementById("tratamiento_M").innerHTML ="Tratamiento de Salud:"+tratamiento_M_salud; 

          
  document.getElementById("condicion_fisica_salud").innerHTML ="Condicion Fisica:"+ condicion_fisica;

         
  document.getElementById("atencion_e").innerHTML="Atencion Especial:"+atencion_especial_sal;

          
  document.getElementById ("nombre_tra").innerHTML="Nombre de Transporte:" + nombre_transporte;

          
  document.getElementById ("telefono_tra").innerHTML ="Telefono_tra:" +telefono_transporte;


          
  document.getElementById("cedula_tra").innerHTML= "Cedula_tra:" + cedula_transporte;

         
  document.getElementById("numero_de_placa_tra").innerHTML = "Numero de placa:" + numero_de_placa_transporte;

          
  document.getElementById("numero_telefonico_opcional_tra").innerHTML = "Numero de telefono" +numero_telefonico_opcional_transporte;
    
  var de_donde_proviene_pro = document.getElementById("de_donde_proviene_pro").value;
    
  var motivo_pro = document.getElementById("motivo_pro").value;
    
  var direccion_pro = document.getElementById("direccion_pro").value;
           
  var id_estado_pro = document.getElementById("id_estado_pro").value;
  
  var id_ciudad_pro = document.getElementById("id_ciudad_pro").value;

  var id_municipio_pro = document.getElementById("id_municipio_pro").value;

  var id_parroquia_pro = document.getElementById("id_parroquia_pro").value;
  
  document.getElementById("de_donde_proviene_proce").innerHTML = "De donde proviene:" + de_donde_proviene_pro;

  document.getElementById("motivo_proce").innerHTML = "Motivo:" + motivo_pro;
  

  document.getElementById("direccion_pro").innerHTML = "Direccion:" + direccion_proce;

  document.getElementById("id_estado").innerHTML = "Estado:" + id_estado_pro;

  document.getElementById("id_ciudad").innerHTML = "Ciudad:" + id_ciudad_pro;

  document.getElementById("id_municipio").innerHTML = "Municipio:" + id_municipio_pro;

  document.getElementById("id_parroquia").innerHTML = "Parroquia:" + id_parroquia_pro;

  
  // Asignar función al botón de cerrar
  span.onclick = function() {
    modal.style.display = "none";
  }

  // Cerrar modal al hacer clic fuera del modal
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  // Mostrar el modal
  $('#myModal').modal('show');
}

 
</script>




















