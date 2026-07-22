<?php
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sistema de Gestión de Estudiantes</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">       

        <link href="assets/css/estilos.css" rel="stylesheet">           

    </head>

<body class="index-container">

    <div class="container mt-5">

    <div class="card shadow">

    <div class="card-header bg-primary text-white">

        <h2>Sistema de Gestión de Estudiantes</h2>

    </div>

    <div class="card-body" >

    <h5>
        <strong>Bienvenido <?php echo $_SESSION["usuario"];?></strong>
    </h5>

    <h2>Registrar estudiante</h2>


    <form action="actions/guardar.php" method="POST">

        <label class="form-label">Nombre:</label>
        <input type="text" name="nombre" required class="form-control"> 
        

        <label class="form-label mt-3">Correo:</label>
        <input type="email" name="correo" required class="form-control">
        <br><br>

        <button type="submit" class="btn btn-success mt-4">Guardar</button>

    </form>

    <div class="d-flex gap-2 mt-3">
        <a href="views/listar.php" class="btn btn-success">Ver estudiantes</a>

        <form action="auth/logout.php" method="POST">
            <button type="submit" class="btn btn-danger">Cerrar Sesion</button>
        </form>
    </div>    
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if(isset($_SESSION["bienvenido"])){
    unset($_SESSION["bienvenido"]);
?>

<script>
Swal.fire({
    icon: "success",
    title: "¡Bienvenido!",
    text: "Hola <?php echo $_SESSION['usuario']; ?>",
    timer: 1800,
    showConfirmButton: false
});
</script>

<?php } ?>
<!-- *********************** -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if(isset($_SESSION["guardado"])){
    unset($_SESSION["guardado"]);
?>

<script>
Swal.fire({
    icon: "success",
    title: "¡Éxito!",
    text: "Estudiante registrado correctamente",
    confirmButtonColor: "#198754"
});
</script>

<?php
}
?>

</body>
</html>