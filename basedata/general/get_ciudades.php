<?php
include('conexion.php');
$estado_id = $_POST['estado_id'];
$result = mysqli_query($conexion, "SELECT * FROM ciudades WHERE id_estado = '$estado_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_ciudad'] . "'>" . $row['ciudad'] . "</option>";
}
?>
```