<?php

session_start();
if(!isset($_SESSION["usuario"])) {
    header("location: /auth/login.php");
    exit();
}

include("../config/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];


$sql = "UPDATE estudiantes 
SET nombre='$nombre', correo='$correo' 
WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    $_SESSION["Actualizado"] = true;
    header("location: ../views/listar.php");
    exit();
}else{
    echo "Error al actualizar";
}

?>