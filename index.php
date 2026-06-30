<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistema de Gestión de Estudiantes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h2>Sistema de Gestión de Estudiantes</h2>

</div>

<div class="card-body">

<h2>Registrar estudiante</h2>

<form action="guardar.php" method="POST">

    Nombre:
    <input type="text" name="nombre" required>
    <br><br>

    Correo:
    <input type="email" name="correo" required>
    <br><br>

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>

<br>

<a href="listar.php" class="btn btn-success">Ver estudiantes</a>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
</body>
</html>