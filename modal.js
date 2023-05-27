

document.addEventListener("DOMContentLoaded", function(event) {
const submitBtn = document.getElementById('submitBtn');
const myForm = document.getElementById('myForm');

submitBtn.addEventListener('click', function() {
  const nombre = document.getElementById('nombre').value;
  console.log(nombre);

  const apellido = document.getElementById('apellido').value;
  console.log(nombre);

  const cedula = document.getElementById('cedula').value;
  const parentesco = document.getElementById('parentesco').value;
  const profesion = document.getElementById('profesion').value;
  const direccion = document.getElementById('direccion').value;
  const direccion_tra = document.getElementById('direccion_tra').value;
  const telefono = document.getElementById('telefono').value;
  const telefono_tra = document.getElementById('telefono_tra').value; // Corregido
  const telefono_opc = document.getElementById('telefono_opc').value;
  const vive = document.querySelector('input[name="vive"]:checked').value; // Seleccionar el valor del elemento de entrada de radio marcado
  const state = document.getElementById('state').value;
  const ciudad_select = document.getElementById('ciudad_select').value;
  const municipio_select = document.getElementById('municipio_select').value;
  const parroquia_select = document.getElementById('parroquia_select').value;



  document.getElementById('modal-nombre').innerHTML = nombre;
  document.getElementById('modal-apellido').innerHTML = apellido;
  document.getElementById('modal-cedula').innerHTML = cedula;
  document.getElementById('modal-parentesco').innerHTML = parentesco;
  document.getElementById('modal-profesion').innerHTML = profesion;
  document.getElementById('modal-direccion').innerHTML = direccion;
  document.getElementById('modal-direccion-trabajo').innerHTML = direccion_tra;
  document.getElementById('modal-telefono').innerHTML = telefono;
  document.getElementById('modal-telefono-trabajo').innerHTML = telefono_tra;
  document.getElementById('modal-telefono-opcional').innerHTML = telefono_opc;
  document.getElementById('modal-vive').innerHTML = vive;
  document.getElementById('modal-estado').innerHTML = state;
  document.getElementById('modal-ciudad').innerHTML = ciudad_select;
  document.getElementById('modal-municipio').innerHTML = municipio_select;
  document.getElementById('modal-parroquia').innerHTML = parroquia_select;

  const myModal = new bootstrap.Modal(document.getElementById('myModal'));
myModal.show();
});

  const enviarBtn = document.getElementById('modal-enviar-btn');
enviarBtn.addEventListener('click', function() {
  const xmlhttp = new XMLHttpRequest();
  const url = "basedata/basedata1.php";
  const params = "nombre=" + nombre + "&apellido=" + apellido + "&cedula=" + cedula + "&parentesco=" + parentesco +"&profesion=" + profesion + "&direccion=" + direccion + "&direccion_tra=" + direccion_tra + "&telefono=" + telefono + "&telefono_tra=" + telefono_tra + "&telefono_opc=" + telefono_opc + "&vive=" + vive + "&state=" + state + "&ciudad_select=" + ciudad_select + "&municipio_select=" + municipio_select + "&parroquia_select=" + parroquia_select;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      console.log(xmlhttp.responseText);
      // Cerrar el modal después de enviar los datos
      myModal.hide();
      // Mostrar el mensaje de éxito
      document.getElementById('mensaje-exito').style.display = 'block';
    }
  };
  xmlhttp.send(params);
});

});
