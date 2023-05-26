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


   <!-- Bootstrap core JavaScript-->
   <!--Bootstrap 3-5-2023--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="../../vendor/jquery/jquery.min.js"></script>
   <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>