<?php
include('conexion.php');
$municipio_id = $_POST['municipio_id'];
$result = mysqli_query($conexion, "SELECT * FROM parroquias WHERE id_municipio = '$municipio_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_parroquia'] . "'>" . $row['parroquia'] . "</option>";
}
?>