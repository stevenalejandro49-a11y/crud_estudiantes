<?php

include("conexion.php");

$sql = "SELECT * FROM estudiantes";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de estudiantes</title>
</head>
<body>

<h2>Lista de estudiantes</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correosdsds</th>
    <th>Acciones</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['correo']; ?></td>

    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a> |
        <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
        onclick="return confirm('¿Está seguro de eliminar este estudiante?');">
        Eliminar
        </a>
    </td>

</tr>

<?php } ?>

</table>

<br>

<a href="index.php">Volver</a>

</body>
</html>