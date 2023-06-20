<?php
include('conexion.php');
$estado_id = $_POST['estado_id'];
$result = mysqli_query($conexion, "SELECT * FROM ciudades WHERE id_estado = '$estado_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_ciudad'] . "'>" . $row['ciudad'] . "</option>";
}
?>
```

<?php
include('conexion.php');
$ciudad_id = $_POST['ciudad_id'];
$result = mysqli_query($conexion, "SELECT * FROM municipios WHERE id_ciudad = '$ciudad_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_municipio'] . "'>" . $row['municipio'] . "</option>";
}
?>
```

<?php
include('conexion.php');
$municipio_id = $_POST['municipio_id'];
$result = mysqli_query($conexion, "SELECT * FROM parroquias WHERE id_municipio = '$municipio_id'");
while ($row = mysqli_fetch_array($result)) {
   echo "<option value='" . $row['id_parroquia'] . "'>" . $row['parroquia'] . "</option>";
}
?>