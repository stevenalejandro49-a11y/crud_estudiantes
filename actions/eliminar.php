<?php

session_start();
if(!isset($_SESSION["usuario"])) {
    header("location: /auth/login.php");
    exit();
}

include("../config/conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM estudiantes WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    $_SESSION["eliminado"]=true;
    header("Location: /views/listar.php");
    exit();
}else{
    echo "Error al eliminar";
}

?>