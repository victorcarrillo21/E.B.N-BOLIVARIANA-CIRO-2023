<?php 

require_once '../basedata/basedata2.php';

  $total = current($conexion->query("SELECT COUNT(idticket) FROM perticket WHERE fecha BETWEEN '$verDesde' AND '$verHasta2'   ")->fetch_assoc() );
  
$sql = "SELECT * FROM horarios";
$resultado = $conn->query($sql);

$P1 = date("d-m-Y");
?>

<div class="container mt-3">
    <h1 class="text-center">Generador de horarios</h1>
<hr>

  <div class="row">

    <div class="col-md-3">
    
      <h3>Agregar horario</h3>
      <br>
       

<form action="#" method="POST">

  <div class="col-mb-4">
    <label for="fecha_nac">Fecha Actual</label>
    <input  type="text" name="periodo" id="periodo" value="<?php echo $P1; ?>" class="form-control" style=" width:50%;">
  </div>

<br>

  <div class="mb-6">
    <label for="dia" class="form-label">Dia</label>
    <select id="dia" name="dia" class="form-control" style=" width:50%;">
      <option value="0">seleccione un dia</option>
        <?php if (!empty($dias)) {
          foreach ($dias as $opciones) {
            echo '<option value="' . $opciones['dia'] . '">' . $opciones['id'] ."-". $opciones['dia'] . '</option>';
          } }?>
    </select>
  </div>

<br>
  
  <div class="mb-6">
    <label for="hora_ent" class="form-label">Hora de Entrada</label>
    <input type="time" class="form-control" id="hora_ent" name="hora_ent" required style=" width:50%;">
  </div>
<br>
  <div class="mb-6">
    <label for="hora_rec1" class="form-label">Hora de Receso (1º, 2º y 3º)</label>
    <input type="time" class="form-control" id="hora_rec1" name="hora_rec1" required style=" width:50%;">
  </div>

<br>
  
  <div class="mb-6">
    <label for="hora_rec2" class="form-label">Hora de Receso (4º, 5º y 6º)</label>
    <input type="time" class="form-control" id="hora_rec2" name="hora_rec2" required style=" width:50%;">
  </div>

<br>

  <div class="mb-6">
    <label for="hora_sal" class="form-label">Hora de Salida</label>
    <input type="time" class="form-control" id="hora_sal" name="hora_sal" required style=" width:50%;">
  </div>

<br>

  <input type="submit" class="btn btn-primary" value="Agregar horario">

<br>

</form>

  </div>
      <div class="col-md-9">
        <h3>Horarios programados</h3>
        <table class="table" id="tabla-horarios">
          <thead>
            <tr>
              <th>Día</th>
              <th>Hora de Entrada</th>
              <th>Hora de Salida</th>
              <th>Receso 1º, 2º y 3º</th>
              <th>Receso 4º, 5º y 6º</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aquí se mostrarán los horarios programados utilizando PHP -->              
          </tbody>
        </table>
      </div>
    </div>
</div>
<br>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>                     
  
</body>
</html>

<script>
  // Agrega un evento de envío al formulario para agregar horarios
  document.querySelector('#formulario').addEventListener('submit', agregarHorario);

  function agregarHorario(evento) {
  // Previene el comportamiento por defecto del formulario
  evento.preventDefault();

  // Obtiene los valores de los campos del formulario
  const dia = document.querySelector('#dia').value;
  const hora_ent = document.querySelector('#hora_ent').value;
  const hora_sal = document.querySelector('#hora_sal').value;

  // Crea una nueva fila en la tabla con los valores del horario
  const tabla = document.querySelector('#tabla-horarios tbody');
  const fila = tabla.insertRow();
  fila.id = `fila-${tabla.rows.length}`; // Agrega un identificador único a la fila
  const celdaDia = fila.insertCell();
  const celdaHora_ent = fila.insertCell();
  const celdaHora_sal = fila.insertCell();
  const celdaAcciones = fila.insertCell();
  celdaDia.innerHTML = dia;
  celdaHora_ent.innerHTML = hora_ent;
  celdaHora_sal.innerHTML = hora_sal;
  celdaAcciones.innerHTML = `
    <input type='button' class='btn btn-success btn-sm' value='Editar' onclick='editarHorario(this)'>
    <input type='button'  class='btn btn-danger btn-sm' onclick='eliminarHorario('${fila.id}')'>
  `;

  // Limpia los campos del formulario
  document.querySelector('#dia').value = '';
  document.querySelector('#hora_ent').value = '';
  document.querySelector('#hora_sal').value = '';

  // Actualiza el contador de horarios
  const contador = document.querySelector('#contador');
  contador.textContent = parseInt(contador.textContent) + 1;
}

function editarHorario(boton) {
  // Obtiene la fila correspondiente al botón
  const fila = boton.parentNode.parentNode;

  // Obtiene los valores de la fila
  const dia = fila.cells[0].innerHTML;
  const hora_ent = fila.cells[1].innerHTML;
  const hora_sal = fila.cells[2].innerHTML;

  // Actualiza los campos del formulario con los valores de la fila
  document.querySelector('#dia').value = dia;
  document.querySelector('#hora_ent').value = hora_ent;
  document.querySelector('#hora_sal').value = hora_sal;

  // Crea un nuevo botón para guardar los cambios
  const botonGuardar = document.createElement('input');
  botonGuardar.type = 'button';
  botonGuardar.classList.add('btn', 'btn-primary', 'btn-sm');
  botonGuardar.textContent = 'Guardar';
  botonGuardar.onclick = function() {
    // Actualiza los valores de la fila con los valores del formulario
    fila.cells[0].innerHTML = document.querySelector('#dia').value;
    fila.cells[1].innerHTML = document.querySelector('#hora_ent').value;
    fila.cells[2].innerHTML = document.querySelector('#hora_sal').value;

    // Elimina los botones de editar y eliminar
    fila.cells[3].innerHTML = `
      <input type='button' class='btn btn-success btn-sm' value='Editar' onclick='editarHorario(this)'>
      <input type='button' class='btn btn-danger btn-sm' onclick='eliminarHorario('${fila.id}')'>
    `;

    // Habilita el botón eliminar
    const botonEliminar = fila.querySelector('.btn-danger');
    botonEliminar.disabled = false;
  };

  // Crea un nuevo botón para eliminar la fila
  const botonEliminar = document.createElement('input');
  botonEliminar.type = 'button';
  botonEliminar.classList.add('btn', 'btn-danger', 'btn-sm');
  botonEliminar.textContent = 'Eliminar';
  botonEliminar.onclick = function() {
    eliminarHorario(fila.id);
  };

  // Reemplaza el botón editar por el botón guardar y el botón eliminar
  fila.cells[3].innerHTML = '';
  fila.cells[3].appendChild(botonGuardar);
  fila.cells[3].appendChild(document.createTextNode(' '));
  fila.cells[3].appendChild(botonEliminar);

  // Deshabilita el botón "Eliminar" mientras se está editando la fila
  const botonEliminarActual = fila.querySelector('.btn-danger');
  botonEliminarActual.disabled = true;
}

function eliminarHorario(idFila) {
  // Muestra un mensaje de confirmación
  if (confirm('¿Estás seguro de que quieres eliminar este horario?')) {
    // Obtiene la fila correspondiente al id
    const fila = document.getElementById(idFila);

    // Elimina la fila
    fila.remove();

    // Actualiza el contador de horarios
    const contador = document.querySelector('#contador');
    contador.textContent = parseInt(contador.textContent) - 1;
  }
}
  