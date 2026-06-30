<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "UPDATE estudiantes 
SET nombre='$nombre', correo='$correo' 
WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("Location: listar.php");
}else{
    echo "Error al actualizar";
}

?>