<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO estudiantes(nombre, correo)
VALUES('$nombre', '$correo')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar";
}

?>