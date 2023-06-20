<?php   
class alumnoController
{
    private $model;
    public function __construct()
    {

        require_once("../../tabla_alumno/alumno_model.php");
        $this->model=new alumno_Model();

         

    }
        public function guardar($nombre,/* $apellido, $genero, $fecha_nac, $lugar_nac, $direccion, $periodo_escolar, $id_estado, $id_ciudad, $id_municipio, $id_parroquia, $id_procedencia, $status*/){

        $id =  $this->model->insertar($nombre,/* $apellido, $genero, $fecha_nac, $lugar_nac, $direccion, $periodo_escolar, $id_estado, $id_ciudad, $id_municipio, $id_parroquia, $id_procedencia, $status*/);
          return ($id!=false) ? header("Location:show.php?id=".$id) : header ("Location:create.php") ;
        }

}

?> 