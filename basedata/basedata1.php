<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos_ciroo";

try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa<br>";

    // Obtener datos para los select
    $estados = $conn_pdo->query("SELECT id_estado, estado FROM estados"); 
    $ciudades = $conn_pdo->query("SELECT id_ciudad, id_estado, ciudad FROM ciudades"); 
    $municipios = $conn_pdo->query("SELECT id_municipio, id_estado, municipio FROM municipios"); 
    $parroquias = $conn_pdo->query("SELECT id_parroquia ,id_municipio, parroquia FROM parroquias");


    $conn_pdo->query("SET NAMES 'utf8'");

    // Verificación del envío de formulario
    if (!empty($_POST)) {
    $message = '';
    
    // Asignar valores de los campos a las variables correspondientes
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $parentesco = $_POST['parentesco'];
    $profesion = $_POST['profesion'];
    $direccion = $_POST['direccion'];
    $direccion_tra = $_POST['direccion_tra'];
    $telefono = $_POST['telefono'];
    $telefono_tra = $_POST['telefono_tra'];
    $vive = $_POST['vive'];
    $telefono_opc = $_POST['telefono_opc'];
    $id_estado = $_POST['id_estado'];
    $id_ciudad = $_POST['id_ciudad'];
    $id_municipio = $_POST['id_municipio'];
    $id_parroquia = $_POST['id_parroquia'];

    // Validar datos del formulario
    if (empty($nombre)) {
        $message = "El campo 'nombre' es obligatorio. Por favor, complete el campo y vuelva a intentarlo.";
    } else {
        // Preparar consulta SQL
        $sql = "INSERT INTO representante (nombre, apellido, cedula, parentesco, profesion, direccion, direccion_tra, telefono, telefono_tra, vive, telefono_opc, id_estado, id_ciudad, id_municipio, id_parroquia) VALUES (:nombre, :apellido, :cedula, :parentesco, :profesion, :direccion, :direccion_tra, :telefono, :telefono_tra, :vive, :telefono_opc, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)";

        // Preparar consulta preparada
        $stmt = $conn_pdo->prepare($sql);

        // Vincular valores a los marcadores de posición en la consulta preparada
       // Vincular parámetros
       $stmt->bindParam(':nombre', $nombre);
       $stmt->bindParam(':apellido', $apellido);
       $stmt->bindParam(':cedula', $cedula);
       $stmt->bindParam(':parentesco', $parentesco);
       $stmt->bindParam(':profesion', $profesion);
       $stmt->bindParam(':direccion', $direccion);
       $stmt->bindParam(':direccion_tra', $direccion_tra);
       $stmt->bindParam(':telefono', $telefono);
       $stmt->bindParam(':telefono_tra', $telefono_tra);
       $stmt->bindParam(':vive', $vive);
       $stmt->bindParam(':telefono_opc', $telefono_opc);
       $stmt->bindParam(':id_estado', $id_estado);
       $stmt->bindParam(':id_ciudad', $id_ciudad);
       $stmt->bindParam(':id_municipio', $id_municipio);
       $stmt->bindParam(':id_parroquia', $id_parroquia);

        // Ejecutar consulta preparada
        if ($stmt->execute()) {
            // Redirigir al usuario a una página de éxito
        
        } else {
            $message = "Error al insertar representante: " . $stmt->errorInfo()[2];
        }
    }
}

} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

