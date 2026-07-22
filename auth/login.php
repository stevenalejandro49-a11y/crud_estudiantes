<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Gestión de Estudiantes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="../assets/css/estilos.css" rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">   
                <h2>Sistema de Gestión de Estudiantes</h2>
            </div>

        <div class="card-body" >   
            <form action="autenticar.php" method="POST">
                <label class="form-label fw-bold">Usuario</label><br>
                <input type="text" name="usuario" class="form-control"><br>
                <label class="form-label fw-bold">Contraseña</label><br>
                <input type="password" name="password" class="form-control"><br><BR>
                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>  
              
        </div>  
        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php if(isset($_GET['error'])){ ?>

        <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Usuario o contraseña incorrectos',
            confirmButtonColor: '#198754'
        });
        </script>

        <?php } ?>  


<?php if(isset($_GET["logout"])){ ?>
<script>
Swal.fire({
    icon: "success",
    title: "Sesión cerrada",
    text: "Has cerrado sesión correctamente."
});
</script>
<?php } ?>      

</body>    
</html>