<?php
include('conexion.php');
$ciudad_id = $_POST['ciudad_id'];
$result = mysqli_query($conexion, "SELECT * FROM municipios WHERE id_ciudad = '$ciudad_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_municipio'] . "'>" . $row['municipio'] . "</option>";
}
?>
```