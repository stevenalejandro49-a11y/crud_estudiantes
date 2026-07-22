<?php

session_start();
if(!isset($_SESSION["usuario"])) {
    header("location: /auth/login.php");
    exit();
}

include("../config/conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO estudiantes(nombre, correo)
VALUES('$nombre', '$correo')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    
    $_SESSION["guardado"] = true;
    header("location: ../index.php");
    exit();
    
} else {
    echo "Error al guardar";
}

?>