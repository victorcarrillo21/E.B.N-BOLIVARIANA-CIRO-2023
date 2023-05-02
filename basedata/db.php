<?php
$dsn = 'mysql:host=localhost;dbname=basededatos_ciroo';
$usuario = 'root';
$contraseña = '';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    // echo "conectado exitosamente";
} catch (PDOException $e) {
    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
}