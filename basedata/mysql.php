<?php
require_once('db.php');
$json = file_get_contents('php://input');
$datos = json_decode($json);
$id = $datos->id;


$consulta = $conexion->query("SELECT * FROM ciudades where id_estado = '$id'");
$resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

// aqui voy a mandar los datos que he extraido de la db en formato json a javascript

//print_r($resultados);

echo json_encode($resultados);

