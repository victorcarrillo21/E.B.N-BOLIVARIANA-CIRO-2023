<?php

class Signup extends baseData {

    protected function setUser($usuario, $gmail, $clave){
        $stmt = $this->conexion()->prepare('INSERT INT users (usuario, corro_electronico, contrasena) VALUE ( ?, ?, ? );');
        
        $password = password_hash($contrasena, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($usuario, $gmail, $password))){
            $$stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function checkUser($usuario, $gmail){
        $stmt = $this->conexion()->prepare('SELECT usuario FROM users WHERE usuario = ? OR corro_electonico = ?;');
        $result;
        if(!$stmt->execute(array($usuario, $gmail))){
            $$stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}