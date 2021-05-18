<?php

require './generacionDeDatos.php';

$conexion -> query('delete from estudiante_asistencia');
$conexion -> query('delete from estudiante_curso');
$conexion -> query('delete from estudiante_libro');

$conexion -> query('delete from libro');
$conexion -> query('delete from estudiante');
$conexion -> query('delete from asistencia');
$conexion -> query('delete from curso');

if (isset($_POST['submit'])) {
    if ($_POST['asistencia'] || $_POST['estudiante'] || $_POST['curso'] || $_POST['libro']){
    
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
    } else {
        echo '<div class="log">';
        echo '<h2 class="invalid">Por favor, defina un numero de filas a generar en alguna de las tablas...</h2>';
        echo '</div>';
    }
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
</head>
<body>
    <section class="generator-message">Volviendo al generador en 5 segundos...</section>
    <script src="script.js"></script>
</body>
</html>