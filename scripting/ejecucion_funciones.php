<?php

require './generacionDeDatos.php';

$conexion -> query('delete from libro');
$conexion -> query('delete from estudiante');
$conexion -> query('delete from asistencia');
$conexion -> query('delete from curso');

if (isset($_POST['submit'])) {
    echo '<div class="log">';
    if ($_POST['asistencia']) {
        generarAsistencia($_POST['asistencia']);

    }
    if ($_POST['estudiante']) {
        generarEstudiante($_POST['estudiante']);

    }

    if ($_POST['curso']) {
        generarCursos();
    }

    if ($_POST['libro']) {
        generarLibros($_POST['libro']);

    }
    echo '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos generados!</title>
    <link rel="stylesheet" href="styles.css">
    <script link="script.js"></script>
</head>
<body>
    <section class="generator-message">Volviendo al generador en 3 segundos...</section>
</body>
</html>