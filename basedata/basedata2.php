<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  
  $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
  
  $apellido = isset($_POST['apellido'])?$_POST['apellido']:""; 

  $genero = isset($_POST['genero'])?$_POST['genero']:"";

  $fecha_nac = isset($_POST['fecha_nac'])?$_POST['fecha_nac'] :"";
  $lugar_nac = isset($_POST['lugar_nac'])?$_POST['lugar_nac']:"";

  $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";

  $periodo_escolar = isset($_POST['periodo_escolar'])?$_POST['periodo_escolar']:"";

  $id_estado = isset($_POST['id_estado'])?$_POST['id_estado']:""; 

  $id_ciudad = isset($_POST['id_ciudad'])?$_POST['id_ciudad']:""; 

  $id_municipio = isset($_POST['id_municipio'])?$_POST['id_municipio']:""; 

  $id_parroquia = isset($_POST['id_parroquia'])?$_POST['id_parroquia']:""; 

  $id_procedencia = isset($_POST['id_procedencia'])?$_POST['id_procedencia']:""; 

  $status = isset($_POST['status'])?$_POST['status']:"";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "basededatos_ciroo";

  try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa<br>";
    
    if (empty($nombre)){ 
        $message = "El campo 'nombre' es obligatorio";
        echo $message;
        exit;
    }

    $sql = "INSERT INTO alumno (nombre, apellido, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, id_procedencia, status) VALUES (:nombre, :apellido, :genero, :fecha_nac, :lugar_nac, :direccion, :periodo_escolar, :id_estado, :id_ciudad, :id_municipio, :id_parroquia, :id_procedencia, :status)";

    $stmt = $conn_pdo->prepare($sql);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':fecha_nac', $fecha_nac);
    $stmt->bindParam(':lugar_nac', $lugar_nac);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':periodo_escolar', $periodo_escolar);
    $stmt->bindParam(':id_estado', $id_estado);
    $stmt->bindParam(':id_ciudad', $id_ciudad);
    $stmt->bindParam(':id_municipio', $id_municipio);
    $stmt->bindParam(':id_parroquia', $id_parroquia);
    $stmt->bindParam(':id_procedencia', $id_procedencia);
    $stmt->bindParam(':status', $status);

    if ($stmt->execute()) {
      echo "Los datos se han guardado exitosamente en la base de datos.";
    } else {
      $message = "Error al insertar alumno: " . $stmt->errorInfo()[2];
      echo $message;
      exit;
    }

  } catch(PDOException $e) {
    echo "Error al guardar los datos en la base de datos: " . $e->getMessage();
  }
}
?>