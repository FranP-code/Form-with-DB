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
            <form method="POST" action="ejecucion_funciones.php" class="form">
                <div class="flex-container">
                    <div class="flex-item">
                        <h2 id="asistencias">Cantidad de Asistencias</h2>
                        <input type="number" class="no-arrow" id="asistencias-submit">
                    </div>
                    <div class="flex-item">
                        <h2 id="estudiantes">Cantidad de Estudiantes</h2>
                        <input type="number" class="no-arrow" id="estudiantes-submit">
                    </div>
                    <div class="flex-item">
                        <h2 id="libros">Cantidad de Libros</h2>
                        <input type="number" class="no-arrow" id="libros-submit">
                    </div>
                    <div class="flex-item">
                        <h2 id="cursos">Generar cursos?</h2>
                        <input type="checkbox" class="checkbox">
                    </div>
                </div>
                <div class="container-submit">
                    <input type="submit" class="submit" value="Enviar">
                </div>
            </form>
</body>
</html>
