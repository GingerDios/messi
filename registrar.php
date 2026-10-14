
<?php

include("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = trim($_POST["nombre"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    if($nombre != "" && $mensaje != "" && strlen($nombre) <= 50 && strlen($mensaje) <= 150){

        $sql = $conexion->prepare("INSERT INTO hinchas(nombre, mensaje) VALUES(?, ?)");
        $sql->bind_param("ss", $nombre, $mensaje);

        if($sql->execute()){
            header("Location: index.php#video");
            exit;
        }else{
            echo "No se pudo registrar el hincha";
        }

    }else{
        echo "Completa los campos correctamente";
    }

}else{
    header("Location: index.php");
    exit;
}

?>
