<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form method="POST" action="formulario.php">
    <link rel="stylesheet" href="style.css">
    <title>Estudiantes</title>
</head>
<?php 'conexion.php'; ?>
<body>
<form>
    <h1>Registro de estudiantes</h1>
    <label for="nombre">Nombre del Estudiante:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="universidad">En que universidad esta estudiando:</label>
    <input type="text" id="universidad" name="universidad" required>

    <label for="carrera">Carrera que está estudiando:</label>
    <input type="text" id="carrera" name="carrera" required>

    <label for="semestre">Semestre:</label>
    <input type="text" id="semestre" name="semestre" required>

    <button type="submit">Enviar</button>
</form>
</body>
</html>