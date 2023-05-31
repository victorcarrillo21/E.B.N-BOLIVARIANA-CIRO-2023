// Get form data
/*
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$parentesco = $_POST['parentesco'];
$profesion = $_POST['profesion'];
$direccion = $_POST['direccion'];
$direccion_tra = $_POST['direccion_tra'];
$telefono = $_POST['telefono'];
$telefono_tra = $_POST['telefono_tra'];
$vive = isset($_POST['vive']) ? 1 : 0;
$telefono_opc = isset($_POST['telefono_opc']) ? $_POST['telefono_opc'] : null;
$id_estado = isset($_POST['state']) ? $_POST['state'] : null;
$id_ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
$id_municipio = isset($_POST['municipio']) ? $_POST['municipio'] : null;
$id_parroquia = isset($_POST['parroquia']) ? $_POST['parroquia'] : null;

// Insert data into database
try {
    $conn_pdo = new PDO('mysql:host=localhost;dbname=nombre_de_la_base_de_datos', 'usuario', 'contraseña');
    $conn_pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn_pdo->prepare("INSERT INTO representante (nombre, apellido, cedula, parentesco, profesion, direccion, direccion_tra, telefono, telefono_tra, vive, telefono_opc, id_estado, id_ciudad, id_municipio, id_parroquia) VALUES (:nombre, :apellido, :cedula, :parentesco, :profesion, :direccion, :direccion_tra, :telefono, :telefono_tra, :vive, :telefono_opc, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)");

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':cedula', $cedula);
    $stmt->bindParam(':parentesco', $parentesco);
    $stmt->bindParam(':profesion', $profesion);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':direccion_tra', $direccion_tra);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':telefono_tra', $telefono_tra);
    $stmt->bindParam(':vive', $vive, PDO::PARAM_BOOL);
    $stmt->bindParam(':telefono_opc', $telefono_opc);
    $stmt->bindParam(':id_estado', $id_estado);
    $stmt->bindParam(':id_ciudad', $id_ciudad);
    $stmt->bindParam(':id_municipio', $id_municipio);
    $stmt->bindParam(':id_parroquia', $id_parroquia);

    $stmt->execute();
    $stmt->closeCursor();
    $conn_pdo = null;
    echo "Los datos se han guardado exitosamente en la base de datos.";
} catch(PDOException $e) {
    echo "Error al guardar los datos en la base de datos: " . $e->getMessage();
}

?>