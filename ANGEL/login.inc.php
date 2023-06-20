<?php
 
if(isset($_POST["submit"])){

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    include 'clases/basedata2.php';
    include 'clases/Login/login.classes.php';
    include 'clases/Login/login.contrl.php';

    $login = new loginContrl($usuario, $clave);

    $login->loginUser();
    header("location: ../index.php?error=none");

}