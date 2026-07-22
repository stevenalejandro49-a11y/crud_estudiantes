<?php

include("conexion.php");

$nombre = "jose";
$usuario = "admin";
$password = password_hash("123456", PASSWORD_DEFAULT); //esta linea guarda un hash seguro en las claves
$rol = "admin";

$sql= "INSERT INTO usuarios(nombre, usuario, password, rol)
VALUES('$nombre','$usuario', '$password', '$rol')";

if(mysqli_query($conexion,$sql)){
    echo "administrador creado correctamente";
}else{
    echo "error al crear el administrador";
}

?>