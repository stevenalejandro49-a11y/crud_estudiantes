<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM estudiantes WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Editar estudiante</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h2>Editar estudiante</h2>

</div>

<div class="card-body">

<body>

<h2>Editar estudiante</h2>

<form action="actualizar.php" method="POST">

    <div class="mb-3">

        <label class="form-label">Nombre</label>

        <input
        type="text"
        name="nombre"
        class="form-control"
        value="<?php echo $fila['nombre']; ?>">

        </div>

        <div class="mb-3">

        <label class="form-label">Correo</label>

        <input
        type="email"
        name="correo"
        class="form-control"
        value="<?php echo $fila['correo']; ?>">

    </div>

</form>
    <button type="submit" class="btn btn-primary" >
        Actualizar estudiante
    </button>


    <a href="listar.php" class="btn btn-secondary">Volver</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>