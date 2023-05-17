<?php 

require_once 'basedata/basedata1.php';

if (isset($_POST['periodo'], $_POST['dia'], $_POST['hora'])) {
  $periodo = $_POST['periodo'];
  $dia = $_POST['dia'];
  $hora = $_POST['hora'];

  $sql = "INSERT INTO horarios (periodo, dia, hora) VALUES ($periodo, $dia, $hora)";
  $stmt = $conn_pdo->prepare($sql);
  $stmt->execute([$periodo, $dia, $hora]);
  
  if ($stmt) {
    echo "Horario agregado exitosamente";

  } else {
    echo "Error al agregar el horario: " . $conn_pdo->errorInfo()[2];
  }
} else if (isset($_POST['id'], $_POST['periodo'], $_POST['dia'], $_POST['hora'])) {
  $id = $_POST['id'];
  $periodo = $_POST['periodo'];
  $dia = $_POST['dia'];
  $hora = $_POST['hora'];

  $sql = "UPDATE horarios SET periodo='$periodo', dia='$dia', hora='$hora' WHERE id=$id";

  if ($conn_pdo->query($sql)) {
    echo "Horario actualizado exitosamente";
  } else {
    echo "Error al agregar el horario: " . $conn_pdo->errorInfo()[2];
  }
} else {
  // Comprueba cuál variable $_POST no está definida y muestra un mensaje de error
  if(!isset($_POST['periodo'])) {
    echo "No se ha definido el periodo";
  } else if(!isset($_POST['dia'])) {
    echo "No se ha definido el día";
  } else if(!isset($_POST['hora'])) {
    echo "No se ha definido la hora";
  } else {
    echo "No se enviaron los datos necesarios";
  }
}

$sql = "SELECT * FROM horarios";
$resultado = $conn_pdo->query($sql);

if ($resultado->rowCount() > 0) {
  echo "<table>";
  echo "<tr><th>Periodo</th><th>Día</th><th>Hora</th><th>Acciones</th></tr>";
  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['periodo']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['dia']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['hora']) . "</td>";
    echo "<td><button type='button' class='btn btn-success btn-sm' onclick='editarHorario(this)'>Editar</button> <button type='button' class='btn btn-danger btn-sm' onclick='eliminarHorario(" . $fila['id'] . ")'>Eliminar</button></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron horarios";
}

 

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generador de horarios</title>
  <!-- Importa los archivos de Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-3">
    <h1 class="text-center">Generador de horarios</h1>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h3>Agregar horario</h3>
        <form id="formulario" action="horario.php" method="POST">
  <div class="mb-3">
    <label for="periodo" class="form-label">Periodo:</label>
    <input type="text" class="form-control" id="periodo" name="periodo" required>
  </div>
  <div class="mb-3">
    <label for="dia" class="form-label">Día:</label>
    <select class="form-control" id="dia" name="dia" required>
      <option value="">Seleccione un día</option>
      <option value="Lunes">Lunes</option>
      <option value="Martes">Martes</option>
      <option value="Miércoles">Miércoles</option>
      <option value="Jueves">Jueves</option>
      <option value="Viernes">Viernes</option>
      <option value="Sábado">Sábado</option>
      <option value="Domingo">Domingo</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="hora" class="form-label">Hora:</label>
    <input type="time" class="form-control" id="hora" name="hora" required>
  </div>
  <button type="submit" class="btn btn-primary">Agregar horario</button>
</form>
      </div>
      <div class="col-md-8">
        <h3>Horarios programados</h3>
        <table class="table" id="tabla-horarios">
          <thead>
            <tr>
              <th>Periodo</th>
              <th>Día</th>
              <th>Hora</th>
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

  <script>
  // Agrega un evento de envío al formulario para agregar horarios
  document.querySelector('#formulario').addEventListener('submit', agregarHorario);

  function agregarHorario(evento) {
  // Previene el comportamiento por defecto del formulario
  evento.preventDefault();

  // Obtiene los valores de los campos del formulario
  const periodo = document.querySelector('#periodo').value;
  const dia = document.querySelector('#dia').value;
  const hora = document.querySelector('#hora').value;

  // Crea una nueva fila en la tabla con los valores del horario
  const tabla = document.querySelector('#tabla-horarios tbody');
  const fila = tabla.insertRow();
  fila.id = `fila-${tabla.rows.length}`; // Agrega un identificador único a la fila
  const celdaPeriodo = fila.insertCell();
  const celdaDia = fila.insertCell();
  const celdaHora = fila.insertCell();
  const celdaAcciones = fila.insertCell();
  celdaPeriodo.innerHTML = periodo;
  celdaDia.innerHTML = dia;
  celdaHora.innerHTML = hora;
  celdaAcciones.innerHTML = `
    <button type="button" class="btn btn-success btn-sm" onclick="editarHorario(this)">Editar</button>
    <button type="button" class="btn btn-danger btn-sm" onclick="eliminarHorario('${fila.id}')">Eliminar</button>
  `;

  // Limpia los campos del formulario
  document.querySelector('#periodo').value = '';
  document.querySelector('#dia').value = '';
  document.querySelector('#hora').value = '';

  // Actualiza el contador de horarios
  const contador = document.querySelector('#contador');
  contador.textContent = parseInt(contador.textContent) + 1;
}

function editarHorario(boton) {
  // Obtiene la fila correspondiente al botón
  const fila = boton.parentNode.parentNode;

  // Obtiene los valores de la fila
  const periodo = fila.cells[0].innerHTML;
  const dia = fila.cells[1].innerHTML;
  const hora = fila.cells[2].innerHTML;

  // Actualiza los campos del formulario con los valores de la fila
  document.querySelector('#periodo').value = periodo;
  document.querySelector('#dia').value = dia;
  document.querySelector('#hora').value = hora;

  // Crea un nuevo botón para guardar los cambios
  const botonGuardar = document.createElement('button');
  botonGuardar.type = 'button';
  botonGuardar.classList.add('btn', 'btn-primary', 'btn-sm');
  botonGuardar.textContent = 'Guardar';
  botonGuardar.onclick = function() {
    // Actualiza los valores de la fila con los valores del formulario
    fila.cells[0].innerHTML = document.querySelector('#periodo').value;
    fila.cells[1].innerHTML = document.querySelector('#dia').value;
    fila.cells[2].innerHTML = document.querySelector('#hora').value;

    // Elimina los botones de editar y eliminar
    fila.cells[3].innerHTML = `
      <button type="button" class="btn btn-success btn-sm" onclick="editarHorario(this)">Editar</button>
      <button type="button" class="btn btn-danger btn-sm" onclick="eliminarHorario('${fila.id}')">Eliminar</button>
    `;

    // Habilita el botón eliminar
    const botonEliminar = fila.querySelector('.btn-danger');
    botonEliminar.disabled = false;
  };

  // Crea un nuevo botón para eliminar la fila
  const botonEliminar = document.createElement('button');
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
  </script>
</body>
</html>