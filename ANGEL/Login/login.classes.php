<?php

namespace Ciro\Bolivariana\Login;


require_once(__DIR__ . '/../basedata/angel.bd.php');

echo realpath(__DIR__ . '/../basedata/angel.bd.php');




use Ciro\Bolivariana\baseData\ciro\baseData;

$instancia = new baseData();

class Login extends baseData
{
    protected function getUser($usuario, $clave)
    {
        $stmt = $this->conexion()->prepare('SELECT contrasena FROM users WHERE usuario = ? OR corro_electonico = ?;');

        if(!$stmt->execute(array($usuario, $clave))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }

        $hash= $stmt->fetchAll;
        $checkHash = password_verify($contrasena, $hash[0][contrasena]);

        if ($checkHash == false) {
            header("location: ../login.php?error=paswordInvalid");
            exit();
        } elseif ($checkHash == false) {
            $stmt = $this->conexion()->prepare('SELECT contrasena FROM users WHERE usuario = ? OR corro_electonico = ?;');

            if(!$stmt->execute(array($usuario, $gmail, $clave))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $$stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll;
            session_start();
            $_SESSION["userid"] = $user[0]["user_id"];
            $_SESSION["userusuario"] = $user[0]["user_usuario"];

        }

        $stmt = null;
    }

}

/*¿Cómo puedo verificar la ruta del archivo "angel.bd.php"?
¿Cómo puedo saber si la definición de la clase "baseData" tiene el namespace correcto?
¿Cómo puedo omitir la sentencia "use" para la clase PDO en el archivo "login.classes.php"?*/
