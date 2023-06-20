<?php

if(isset($_POST["Iniciar sesión"])){

    $usuario = $_POST["usuario"];
    $gmail = $_POST["corro_electronico"];
    $clave = $_POST["clave"];
    $confirm_clave = $_POST["confirm_clave"];

    include 'clases/basedata2.php';
    include 'clases/Signup/signup.classes.php';
    include 'clases/Signup/signup.contrl.php';

    $signup = new signupContrl($usuario, $gmail, $clave, $confirm_clave);

    $signup->singupUser();
    header("location: ../login.php?error=none");
    exit();

}