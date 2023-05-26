<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos_ciroo";

// Conexión con mysqli
$conn = mysqli_connect($servername, $username, $password, $dbname);

{ 


    // Obtención de valores de formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $cedula = isset($_POST['cedula']) ? $_POST['cedula'] : "";
    $parentesco = isset($_POST['parentesco']) ? $_POST['parentesco'] : "";
    $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : "";
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
    $direccion_tra = isset($_POST['direccion_tra']) ? $_POST['direccion_tra'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
    $telefono_tra = isset($_POST['telefono_tra']) ? $_POST['telefono_tra'] : "";
    $vive = isset($_POST['si']) ? 'si' : 'no';
    $telefono_opc = isset($_POST['telefono_opc']) ? $_POST['telefono_opc'] : "";
    $id_estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    // LO NUEVO
    $id_ciudad = "";
    $id_municipio = "";
    $id_parroquia = ""; 
    
    if(isset($_POST['ciudad'])) {
        $id_ciudad = $_POST['ciudad'];
        //Resto del código
      }
       
        if(isset($_POST['municipio'])) {
            $id_municipio = $_POST['municipio'];
            //Resto del código
          }
      
      if(isset($_POST['parroquia'])) {
        $id_parroquia = $_POST['parroquia'];
        //Resto del código
      }
    }
    
    // Consulta preparada con PDO
    $sql = "INSERT INTO representante (nombre,apellido) VALUES ('.$nombre.','.$apellido.',$cedula)";
    $stmt = $conn->query($sql);

    if($stmt){
          echo "Registro insertado con la conexión";
    }else{
          echo "Ocurrior un error";
    }

  /*  $sql = "INSERT INTO representante (nombre, apellido, cedula, parentesco, profesion, direccion, direccion_tra, telefono, telefono_tra, vive, telefono_opc, id_estado, id_ciudad, id_municipio, id_parroquia) VALUES (:nombre, :apellido, :cedula, :parentesco, :profesion, :direccion, :direccion_tra, :telefono, :telefono_tra, :vive, :telefono_opc, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)";
    $stmt = $conn_pdo->prepare($sql);*/

    return $conn;
    $conn = null;
?>