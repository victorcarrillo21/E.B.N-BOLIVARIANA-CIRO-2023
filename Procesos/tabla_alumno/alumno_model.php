<?php

        class alumno_Model{
                private $PDO;
                public function __construct()
                {           
                        require_once("../../basedata/db2.php");
                        $con = new db();
                        $this->PDO = $con->conexion();


                }
                public function insertar($nombre, /*$apellido, $genero, $fecha_nac, $lugar_nac, $direccion, $periodo_escolar, $id_estado, $id_ciudad, $id_municipio, $id_parroquia, $id_procedencia, $status*/){
                $stmt=$this->PDO->prepare("INSERT INTO alumno (nombre, /*apellido, genero, fecha_nac, lugar_nac, direccion, periodo_escolar, id_estado, id_ciudad, id_municipio, id_parroquia, id_procedencia, status*/) VALUES (:nombre,/* :apellido, :genero, :fecha_nac, :lugar_nac, :direccion, :periodo_escolar, :id_estado, :id_ciudad, :id_municipio, :id_parroquia, :id_procedencia, :status*/)");    
                $stmt->bindParam(':nombre', $nombre);
            /*  $stmt->bindParam(':apellido', $apellido);
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
                $stmt->bindParam(':status', $status);*/

                return ($stmt->execute()) ? $this->PDO->lastInsertId() : false;


                }




        }