<?php

        require_once("controller/alumno_controller.php");
        $obj = new alumnoController();
        $obj->guardar($_POST['nombre']);
        echo $_POST ['nombre'];

?>