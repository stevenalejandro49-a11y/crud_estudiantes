<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

include("../config/conexion.php");

$usuario =$_POST["usuario"];
$password =$_POST["password"];

$sql = "SELECT * FROM usuarios WHERE usuario= '$usuario'";

$resultado = mysqli_query($conexion, $sql); //ejecuta la cosulta y guarda la respuesta en resultado

if (mysqli_num_rows($resultado) > 0){
    $datos = mysqli_fetch_assoc($resultado);

    if (password_verify($password, $datos["password"])){
        session_start();// analogia se abre la mochila
        $_SESSION["usuario"] = $datos["usuario"];//se guarda en la mochila usuario del valor encontrado en la base de datos $datos["usuario"]
        $_SESSION["bienvenido"] = true;
        header("location: ../index.php");
        exit();
    } else{
            header("Location: /auth/login.php?error=1");
            exit();
    }
}else{
        header("Location: /auth/login.php?error=1");
         exit();
}
?>