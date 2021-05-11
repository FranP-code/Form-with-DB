<?php

require './generacionDeDatos.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generacion de Datos</title>
    <link rel="stylesheet" href="./styles.css" >
    <link rel="stylesheet" href="../normalize.css" >
</head>
<body>
    <header>
        <h1>Generador de datos</h1>
    </header>
    <div class="grid-container">
        <div class="titles">
            <h2>Cantidad de Asistencias</h2>
            <h2>Cantidad de Estudiantes</h2>
            <h2>Cantidad de Libros</h2>
            <h2>Generar cursos?</h2>
        </div>
            <form method="POST" action="ejecucion_funciones.php" class="form">
                <div class="input-block">
                    <input type="number">
                    <input type="number">
                    <input type="number">
                    <input type="checkbox" name="submit-cursos">
                </div>
                <input type="submit">
            </form>
        </div>
</body>
</html>
