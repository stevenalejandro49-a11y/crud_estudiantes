<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM estudiantes WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("Location: listar.php");
}else{
    echo "Error al eliminar";
}

?>