<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "bd_estudiantes"
);

if (!$conexion) {
    die("Error de conexión");
}

?>