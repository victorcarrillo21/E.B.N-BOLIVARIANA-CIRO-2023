<?php
require_once('db.php');
$json = file_get_contents('php://input');
$datos = json_decode($json);

echo $id_select = $datos->id_select;
echo $value_select = $datos->value_select;

$tabla="";

if ($id_select==="state"){
   $tabla = "estados";
   $id_tabla = "id_estado";
}else if($id_select==="municipio_select"){
    $tabla = "municipios";
   $id_tabla = "id_municipio";
}


$consulta = $conexion->query("SELECT * FROM $tabla where $id_tabla = '$value_select'");
$resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);



// aqui voy a mandar los datos que he extraido de la db en formato json a javascript

//print_r($resultados);


echo json_encode($resultados);


/*$frutas = ["Manzana", "Banana", "Naranja", "Pera", "Piña"];

// Convierte el array $frutas a una cadena JSON
$frutas_json = json_encode($frutas);

// Imprime la cadena JSON
echo $frutas_json;
*/
