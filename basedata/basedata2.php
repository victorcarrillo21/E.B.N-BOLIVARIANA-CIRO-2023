<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos_ciroo";

// Conexión con mysqli
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

// Agregar estas dos líneas para verificar la conexión
echo "Conexión establecida correctamente<br>";
echo "La versión del servidor MySQL es: " . mysqli_get_server_info($conn);


// Realizar consulta con mysqli
$sql = "SELECT * FROM estados";
$resultado = mysqli_query($conn, $sql);

// Conexión con PDO
try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Consulta con PDO
$stmt = $conn_pdo->query("SELECT * FROM estados");

// Obtener resultados
//while ($row = $stmt->fetch()) {
    //echo "<option value='" . $row['id_estado'] . "'>" . $row
    //['estado'] . "</option>";}


// Establecer la variable $conn para utilizarla en otras partes del código
$GLOBALS['conn'] = $conn;


// Cerrar conexiones
mysqli_close($conn);
$conn_pdo = null;
?>
 

