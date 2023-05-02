<?php 
        
        include_once "alumno.php"    
        $estatus = mysqli_query($mysqli, "SELECT id_estado, estado FROM estados"); 
        $ciudad = mysqli_query($mysqli, "SELECT id_ciudad, id_estado, ciudad FROM ciudades"); 
        $municipio = mysqli_query($mysqli, "SELECT id_municipio, id_estado, municipio FROM municipios"); 
        $parroquia = mysqli_query($mysqli, "SELECT id_parroquia ,id_municipio, parroquia FROM parroquias");
       
        $message = '';
    
        if (!empty($_POST['nombre'])){
        $sql = "INSERT INTO alumno (nombre, apellido, cedula, genero, fecha_nac, lugar_nac, direccion, id_estado, id_ciudad, id_municipio, id_parroquia) 
        VALUES(:nombre, :apellido, :cedula, :genero, :fecha_nac, :lugar_nac, :direccion, :id_estado, :id_ciudad, :id_municipio, :id_parroquia)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre',$_POST['nombre']);
        $stmt->bindParam(':apellido',$_POST['apellido']);
        $stmt->bindParam(':cedula',$_POST['cedula']);
        $stmt->bindParam(':genero',$_POST['genero']);
        $stmt->bindParam(':fecha_nac',$_POST['fecha_nac']);
        $stmt->bindParam(':lugar_nac',$_POST['lugar_nac']);
        $stmt->bindParam(':direccion',$_POST['direccion']);
        $stmt->bindParam(':id_estado',$_POST['estado']);
        $stmt->bindParam(':id_ciudad',$_POST['ciudad']);
        $stmt->bindParam(':id_municipio',$_POST['municipio']);
        $stmt->bindParam(':id_parroquia',$_POST['parroquia']);
        if (!empty($_POST[''])){
            $no = 'no';
            $stmt->bindParam(':vive',$no);
        
    
            if($stmt->execute()) {
                $message = 'registrado con exito, usuario creado';
            } else {
                $message = 'lo siento no se pudo registrar por un error';
            }   
        }
    
    ?>