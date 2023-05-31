<?php
require_once('db.php');

$json = file_get_contents('php://input');
$datos = json_decode($json);

if (isset($datos->id_select) && isset($datos->value_select)) { // Verifica que las variables estén definidas
    $id_select = $datos->id_select;
    $value_select = $datos->value_select;
   
   // echo "$id_select",''."$value_select";

    $tabla = "";
    $id_tabla = "";

    if ($id_select === "state") {
        $tabla = "estados";
        $id_tabla = "id_estado";
    } else if ($id_select === "municipio_select") {
        $tabla = "municipios";
        $id_tabla = "id_municipio";
    } else if ($id_select === "ciudad_select") {
        $tabla = "ciudades";
        $id_tabla = "id_ciudad";
    } else if ($id_select === "parroquia_select") {
        $tabla = "parroquias";
        $id_tabla = "id_parroquia";
    }

    if (!empty($tabla) && !empty($id_tabla)) { // Verifica que las variables estén definidas y no estén vacías
        $consulta = $conexion->query("SELECT * FROM $tabla WHERE $id_tabla = '$value_select'");
        if ($consulta !== false) {
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultados);
        } else {
            echo "Error en la consulta SQL";
        }
    } else {
        echo "Variable de tabla o columna no definida";
    }
} else {
    echo "Variables no definidas";
}















//DATOS REUTILIZABLE INICIIO

//require_once('db.php');
/*$json = file_get_contents('php://input');
$datos = json_decode($json);

echo $id_select = $datos->id_select;
echo $value_select = $datos->value_select;

$tabla="";

if ($id_select==="state"){
   $tabla = "estados";
   $id_tabla = "id_estado";
}else if($id_select==="parroquia_select"){
    $tabla = "parroquias";
   $id_tabla = "id_parroquia";
}



$consulta = $conexion->query("SELECT * FROM $tabla where $id_tabla = '$value_select'");
$resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

*/

         //FINALIZANDO DATOS REUTILIZABLE 13-5-2023

// aqui voy a mandar los datos que he extraido de la db en formato json a javascript

//print_r($resultados);





/*$frutas = ["Manzana", "Banana", "Naranja", "Pera", "Piña"];

// Convierte el array $frutas a una cadena JSON
$frutas_json = json_encode($frutas);

// Imprime la cadena JSON
echo $frutas_json;
*/
