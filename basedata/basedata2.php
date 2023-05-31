<?php  


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$fecha_nac = $_POST['fecha_nac'];
$lugar_nac = $_POST['lugar_nac'];
$direccion = $_POST['direccion'];
$periodo_escolar = $_POST['periodo_escolar'];
$id_estado = $_POST['id_estado'];
$id_ciudad = $_POST['id_ciudad'];
$id_municipio = $_POST['id_municipio'];
$id_parroquia = $_POST['id_parroquia'];
$id_procedencia = $_POST['id_procedencia'];
$status = $_POST['status'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos_ciroo";

try {
  $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa<br>";





  $stmt= $conn_pdo->prepare("INSERT INTO alumno (nombre, apellido, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, procedencia, status) VALUES (:nombre, :apellido, :genero, :fecha_nac, :lugar_nac, :direccion, :periodo_escolar, :id_estado, :id_ciudad, :id_municipio, :id_parroquia, :id_procedencia, :status)");



  $conn_pdo->query("SET NAMES 'utf8'");


  
  $stmt->bindParam(':nombre', $nombre);
  $stmt->bindParam(':apellido',$apellido);
  $stmt->bindParam(':genero', $genero);
  $stmt->bindParam(':fecha_nac', $fecha_nac);
  $stmt->bindParam(':lugar_nac', $lugar_nac);
  $stmt->bindParam(':direccion', $direccion);
  $stmt->bindParam(':periodo_escolar', $periodo_escolar);
  $stmt->bindParam(':id_estado', $id_estado);
  $stmt->bindParam(':id_ciudad', $id_ciudad);
  $stmt->bindParam(':id_municipio', $id_municipio);
  $stmt->bindParam(':id_parroquia', $id_parroquia);
  $stmt->bindParam(':id_procedencia', $procedencia);
  $stmt->bindParam(':status', $status);
  
  
  
  
  
  $stmt->execute();
  $stmt->closeCursor();
  $conn_pdo = null;





  echo "Los datos se han guardado exitosamente en la base de datos.";





} catch(PDOException $e) {
  echo "Error al guardar los datos en la base de datos: " . $e->getMessage();
}