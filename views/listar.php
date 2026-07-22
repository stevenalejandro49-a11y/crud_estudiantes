<?php

session_start();
if(!isset($_SESSION["usuario"])) {
    header("location: /auth/login.php");
    exit();
}

include("../config/conexion.php");

$sql = "SELECT * FROM estudiantes";

$resultado = mysqli_query($conexion, $sql);



?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lista de estudiantes</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../assets/css/estilos.css" rel="stylesheet">

    </head>

<body class="listar-container">



<div class="container">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h2>Lista de estudiantes</h2>

</div>

<div class="card-body">

<h2>Lista de estudiantes</h2>

<a href="../index.php" class="btn btn-success mb-3">
➕ Nuevo estudiante
</a>

<table class="table table-striped table-hover">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Acciones</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['correo']; ?></td>

    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>"
            class="btn btn-warning btn-sm">
            Editar
            </a>

            <a href="../actions/eliminar.php?id=<?php echo $fila['id']; ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('¿Está seguro de eliminar este estudiante?');">
            Eliminar
        </a>
    </td>
</tr>

<?php } ?>

</table>

<br>

<a href="/index.php" class="btn btn-secondary">
Volver
</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset($_SESSION["Actualizado"])){
    unset($_SESSION["Actualizado"]);
?>

<script>
Swal.fire({
    icon: "success",
    title: "¡Registro Editado!",
    text: "Hola <?php echo $_SESSION['usuario']; ?>",
    timer: 1800,
    showConfirmButton: false
});
</script>

<?php } ?>


<?php
if(isset($_SESSION["eliminado"])){
    unset($_SESSION["eliminado"]);
?>

<script>
Swal.fire({
    icon: "success",
    title: "¡Registro eliminado!",
    text: "Hola <?php echo $_SESSION['usuario']; ?>",
    timer: 1800,
    showConfirmButton: false
});
</script>

<?php } ?>

</body>

</html>