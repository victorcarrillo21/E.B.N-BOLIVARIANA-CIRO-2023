 <?php
// Obtener la conexión a la base de datos
$conn = new PDO("mysql:host=localhost;dbname=basededatos_ciroo", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['estado'])) {
    // Consultar las ciudades correspondientes al estado seleccionado
    $stmt = $conn->prepare("SELECT * FROM ciudades WHERE id_estado = ?");
    $stmt->execute([$_POST['estado']]);
    $ciudades = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver las opciones para el select de ciudades
    foreach ($ciudades as $ciudad) {
        echo '<option value="' . $ciudad['id_ciudad'] . '">' . $ciudad['ciudad'] . '</option>';
    }
    


} elseif (isset($_POST['ciudad'])) {
   // Consultar los municipios correspondientes a la ciudad seleccionada
   $stmt = $conn->prepare("SELECT * FROM municipios WHERE id_estado = ?");
   $stmt->execute([$_POST['ciudad']]);
   $municipios = $stmt->fetchAll(PDO::FETCH_ASSOC);

 

// Devolver las opciones para el select de municipios
echo '<option value=""></option>';
foreach ($municipios as $municipio) {
    echo '<option value="' . $municipio['id_municipio'] . '">' . $municipio['municipio'] . '</option>';
}
     
} elseif (isset($_POST['ciudad'])) {
   // Consultar los municipios correspondientes a la ciudad seleccionada
   $stmt = $conn->prepare("SELECT * FROM municipios WHERE id_ciudad = ?");
   $stmt->execute([$_POST['ciudad']]);
   $municipios = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Devolver las opciones para el select de municipios
echo '<option value=""></option>';
foreach ($municipios as $municipio) {
    echo '<option value="' . $municipio['id_municipio'] . '">' . $municipio['municipio'] . '</option>';
}
     
     

} elseif (isset($_POST['municipio'])) {
    // Consultar las parroquias correspondientes al municipio seleccionado
    $stmt = $conn->prepare("SELECT * FROM parroquias WHERE id_municipio = ?");
    $stmt->execute([$_POST['municipio']]);
    $parroquias = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver las opciones para el select de parroquias
    foreach ($parroquias as $parroquia) {
        echo '<option value="' . $parroquia['id_parroquia'] . '">' . $parroquia['parroquia'] . '</option>';
    }
}
?>



