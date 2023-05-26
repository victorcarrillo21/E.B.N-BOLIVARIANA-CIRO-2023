<?php 

require_once 'basedata/db.php';

$dias = $conn_pdo->query("SELECT * FROM dias"); 

if (!empty( $_POST['dia'])) {
 
  $sql = "INSERT INTO horarios (dia, hora_ent, hora_sal) VALUES (:dia, :hora_ent, :hora_sal)";
  $stmt = $conn_pdo->prepare($sql);
  $stmt->bindParam(':dia',$_POST['dia']);
  $stmt->bindParam(':hora_ent',$_POST['hora_ent']);
  $stmt->bindParam(':hora_sal',$_POST['hora_sal']);

  if ($stmt->execute()) {
    echo "Horario agregado exitosamente";

  } else {
    echo "Error al agregar el horario: " . $conn_pdo->errorInfo()[2];
  }

} else if (isset($_POST['dia'], $_POST['hora_ent'], $_POST['hora_sal'])) {

  $dia = $_POST['dia'];
  $hora_ent = $_POST['hora_ent'];
  $hora_sal = $_POST['hora_sal'];

  $sql = "UPDATE horarios SET dia='$dia', hora_ent='$hora_ent', hora_sal='$hora_sal' WHERE  id=$id";
  if ($conn_pdo->query($sql)) {
    echo "Horario actualizado exitosamente";
  } else {
    echo "Error al agregar el horario: " . $conn_pdo->errorInfo()[2];
  }

} else {
  // Comprueba cuál variable $_POST no está definida y muestra un mensaje de error
 if(!isset($_POST['dia'])) {
    echo "No se ha definido el día";
  } else if(!isset($_POST['hora_ent'])) {
    echo "No se ha definido la hora";
  } else if(!isset($_POST['hora_sal'])) {
    echo "No se ha definido la hora";
  } else {
    echo "No se enviaron los datos necesarios";
  }
}

$sql = "SELECT * FROM horarios";
$resultado = $conn_pdo->query($sql);

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
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    
</head>
<body>

<div class="container mt-3">
    <h1 class="text-center">Generador de horarios</h1>
<hr>

  <div class="row">

    <div class="col-md-4">

      <h3>Agregar horario</h3>

<form action="#" method="POST">

  <div class="mb-3">
    <label for="dia" class="form-label">Dia:</label>
          <select class="form-control" id="dia" name="dia" required>
            <option value="0">seleccione un dia</option>
                <?php if (!empty($dias)) {
                        foreach ($dias as $opciones) {
                            echo '<option value="' . $opciones['id'] . '">' . $opciones['id'] ."-". $opciones['dia'] . '</option>';
                } }?>
          </select>
  </div>

  <div class="mb-3">
    <label for="hora_ent" class="form-label">Hora de Entrada:</label>
    <input type="time" class="form-control" id="hora_ent" name="hora_ent" required>
  </div>

  <div class="mb-3">
    <label for="hora_sal" class="form-label">Hora de Salida:</label>
    <input type="time" class="form-control" id="hora_sal" name="hora_sal" required>
  </div>
  
  <input type="submit" class="btn btn-primary" value="Agregar horario">

</form>

  </div>
      <div class="col-md-8">
        <h3>Horarios programados</h3>
        <table class="table" id="tabla-horarios">
          <thead>
            <tr>
              <th>Día</th>
              <th>Hora de Entrada</th>
              <th>Hora de Salida</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aquí se mostrarán los horarios programados utilizando PHP -->
          <?php

if ($resultado->rowCount() > 0) {
  echo "<table>";
  echo "<tr><th>Día</th><th>Hora de entrada</th><th>hora de salida</th></tr>";
  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['dia']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['hora_ent']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['hora_sal']) . "</td>";
    echo "<td><button type='button' class='btn btn-success btn-sm' onclick='editarHorario(this)'>Editar</button> <button type='button' class='btn btn-danger btn-sm' onclick='eliminarHorario(" . $fila['id'] . ")'>Eliminar</button></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron horarios";
}



?>
          
          
          </tbody>
        </table>
      </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>                     
  
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
    <button type="button" class="btn btn-success btn-sm" onclick="editarHorario(this)">Editar</button>
    <button type="button" class="btn btn-danger btn-sm" onclick="eliminarHorario('${fila.id}')">Eliminar</button>
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
  const botonGuardar = document.createElement('button');
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


      <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="../E.B.N BOLIVARIANA CIRO 2023/vendor/jquery/jquery-3.6.4.min.js"></script>

</body>
</html>