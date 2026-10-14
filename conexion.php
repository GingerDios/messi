
<?php

$conexion = new mysqli("localhost", "root", "", "despedida_messi");

if($conexion->connect_error){
    die("Error de conexion");
}

$conexion->set_charset("utf8mb4");

?>