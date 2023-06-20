<?PHP
require_once 'vendor/autoload.php';
use Victor\Poo\db;
 

$db = new db();
$conn = $db->conexion();

/*class Horario {
	private string $fecha;
	private string $dia;
	private string $hora_ent;
	private string $hora_rec1;
	private string $hora_rec2;
	private string $hora_sal;

	public function __construct(string $fecha, string $dia, string $hora_ent, string $hora_rec1, string $hora_rec2, string $hora_sal) {
		$this->fecha = $fecha;
		$this->dia = $dia;
		$this->hora_ent = $hora_ent;
		$this->hora_rec1 = $hora_rec1;
		$this->hora_rec2 = $hora_rec2;
		$this->hora_sal = $hora_sal;
	}

	public function getFecha(): string {
		return $this->fecha;
	}

	public function setFecha(string $fecha): void {
		$this->fecha = $fecha;
	}

	public function getDia(): string {
		return $this->dia;
	}

	public function setDia(string $dia): void {
		$this->dia = $dia;
	}

	public function getHoraEnt(): string {
		return $this->hora_ent;
	}

	public function setHoraEnt(string $hora_ent): void {
		$this->hora_ent = $hora_ent;
	}

	public function getHoraRec1(): string {
		return $this->hora_rec1;
	}

	public function setHoraRec1(string $hora_rec1): void {
		$this->hora_rec1 = $hora_rec1;
	}

	public function getHoraRec2(): string {
		return $this->hora_rec2;
	}

	public function setHoraRec2(string $hora_rec2): void {
		$this->hora_rec2 = $hora_rec2;
	}

	public function getHoraSal(): string {
		return $this->hora_sal;
	}

	public function setHoraSal(string $hora_sal): void {
		$this->hora_sal = $hora_sal;
	}
}

    

 */
    
$horas=new Horario("2023-06-15", "martes", "08:00", "10:00", "12:00", "16:00");
   phpinfo();
   




$db = new db();
$conn = $db->conexion();

$dias = $conn->query("SELECT * FROM dia")->fetchAll();



if (!empty( $_POST['dia'])) {

  $sql = "INSERT INTO horarios (fecha, dia, hora_ent, hora_rec1, hora_rec2, hora_sal) VALUES (:fecha, :dia, :hora_ent, :hora_rec1, :hora_rec2, :hora_sal)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':dia',$_POST['dia']);
  $stmt->bindParam(':fecha',$_POST['fecha']);
  $stmt->bindParam(':hora_ent',$_POST['hora_ent']);
  $stmt->bindParam(':hora_rec1',$_POST['hora_rec1']);
  $stmt->bindParam(':hora_rec2',$_POST['hora_rec2']);
  $stmt->bindParam(':hora_sal',$_POST['hora_sal']);
  

  if ($stmt->execute()) {
    echo "Horario agregado exitosamente";
  } else {
    echo "Error al agregar el horario: " . $conn->errorInfo()[2];
  }

} else if (isset($_POST['dia'], $_POST['hora_ent'], $_POST['hora_sal'])) {

  $fecha = $_POST['fecha'];
  $dia = $_POST['dia'];
  $hora_rec1 = $_POST['hora_rec1'];
  $hora_rec2 = $_POST['hora_rec2'];
  $hora_ent = $_POST['hora_ent'];
  $hora_sal = $_POST['hora_sal'];

  $sql = "UPDATE horarios SET fecha='$fecha', dia='$dia', hora_rec1='$hora_rec1', hora_rec2='$hora_rec2', hora_ent='$hora_ent', hora_sal='$hora_sal' WHERE  id=$id";
  if ($conn->query($sql)) {
    echo "Horario actualizado exitosamente";
  } else {
    echo "Error al agregar el horario: " . $conn->errorInfo()[2];
  }

}

$sql = "SELECT * FROM horarios";
$resultado = $conn->query($sql);


$P1 = date("d-m-Y");
?>

<div class="container mt-3">
    <h1 class="text-center">Generador de horarios</h1>
<hr>

  <div class="row">

    <div class="col-md-2">
    
      <h3>Agregar horario</h3>
      <br>
       

<form action="#" method="POST">

  <div class="col-mb-4">
    <label for="fecha">Fecha Actual</label>
    <input  type="text" name="fecha" id="fecha" value="<?php echo $P1; ?>" class="form-control">
  </div>

<br>

  <div class="mb-6">
    <label for="dia" class="form-label">Dia</label>
    <select id="dia" name="dia" class="form-control" >
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
    <input type="time" class="form-control" id="hora_ent" name="hora_ent" required >
  </div>
<br>
  <div class="mb-6">
    <label for="hora_rec1" class="form-label">Hora de Receso (1º, 2º y 3º)</label>
    <input type="time" class="form-control" id="hora_rec1" name="hora_rec1" required >
  </div>

<br>
  
  <div class="mb-6">
    <label for="hora_rec2" class="form-label">Hora de Receso (4º, 5º y 6º)</label>
    <input type="time" class="form-control" id="hora_rec2" name="hora_rec2" required >
  </div>

<br>

  <div class="mb-6">
    <label for="hora_sal" class="form-label">Hora de Salida</label>
    <input type="time" class="form-control" id="hora_sal" name="hora_sal" required >
  </div>

<br>

  <input type="submit" class="btn btn-primary" value="Agregar horario">

<br>

</form>

  </div>
      <div class="col-md-10">
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
            <?php
           
              while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['dia']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['hora_ent']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['hora_rec1']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['hora_rec2']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['hora_sal']) . "</td>";
                echo "<td><button type='button' class='btn btn-success btn-sm' onclick='editarHorario(this)'>Editar</button> <button type='button' class='btn btn-danger btn-sm' onclick='eliminarHorario(" . $fila['id'] . ")'>Eliminar</button></td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
        <button class="btn btn-primary" href="pdf.php"><center><span>Crear PDF</span></center></button>
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
  const hora_rec1 = document.querySelector('#hora_rec1').value;
  const hora_rec2 = document.querySelector('#hora_rec2').value;
  const hora_sal = document.querySelector('#hora_sal').value;

  // Crea una nueva fila en la tabla con los valores del horario
  const tabla = document.querySelector('#tabla-horarios tbody');
  const fila = tabla.insertRow();
  fila.id = `fila-${tabla.rows.length}`; // Agrega un identificador único a la fila
  const celdaDia = fila.insertCell();
  const celdaHora_ent = fila.insertCell();
  const celdaHora_rec1 = fila.insertCell();
  const celdaHora_rec2 = fila.insertCell();
  const celdaHora_sal = fila.insertCell();
  const celdaAcciones = fila.insertCell();
  celdaDia.innerHTML = dia;
  celdaHora_ent.innerHTML = hora_ent;
  celdaHora_rec1.innerHTML = hora_rec1;
  celdaHora_rec2.innerHTML = hora_rec2;
  celdaHora_sal.innerHTML = hora_sal;
  celdaAcciones.innerHTML = `
    <input type='button' class='btn btn-success btn-sm' value='Editar' onclick='editarHorario(this)'>
    <input type='button'  class='btn btn-danger btn-sm' onclick='eliminarHorario('${fila.id}')'>
  `;

  // Limpia los campos del formulario
  document.querySelector('#dia').value = '';
  document.querySelector('#hora_ent').value = '';
  document.querySelector('#hora_rec1').value = '';
  document.querySelector('#hora_rec2').value = '';
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
  const hora_rec1 = fila.cells[1].innerHTML;
  const hora_rec2 = fila.cells[1].innerHTML;
  const hora_sal = fila.cells[2].innerHTML;

  // Actualiza los campos del formulario con los valores de la fila
  document.querySelector('#dia').value = dia;
  document.querySelector('#hora_ent').value = hora_ent;
  document.querySelector('#hora_rec1').value = hora_ent;
  document.querySelector('#hora_rec2').value = hora_ent;
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
    fila.cells[1].innerHTML = document.querySelector('#hora_rec1').value;
    fila.cells[1].innerHTML = document.querySelector('#hora_rec2').value;
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
  