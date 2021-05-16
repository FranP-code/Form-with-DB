<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Rellenar estudiante</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="../normalize.css">
    <script src="script.js"></script>
</head>

<body>
    <header>
        <div class="header-links">
            <a style="color:rgb(131, 145, 156);">Estudiante</a>
            <a href="./rellenarAsistencia.php" id="asistencia-link">Asistencia</a>
            <a href="./rellenarLibro.php" id="libro-link">Libro</a>
            <a href="./rellenarCurso.php" id="curso-link">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="text" placeholder="Nombre" name="name" class="input-1" id="name" required>
            <input type="number" placeholder="DNI" name="dni" class="input-2 no-arrow" id="dni" required>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php

    
    require '../backEnd.php';
    require '../conexionMySQL.php';

    function comprobacionEnvioCustom() {
        if (comprobacionEnvio($_POST['name']) && comprobacionEnvio($_POST['dni']) && comprobacionEnvio($_POST['submit'])) {
            return true;
            
        }
    }

    function envio_datos($connect) {
        $agregarDatos = $connect -> prepare('insert into estudiante (dni, nombre) values (?, ?)');
        echo 'paso 1';
        $agregarDatos -> bindParam(1, $_POST['dni'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 2';
        $agregarDatos -> bindParam(2, $_POST['name'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 3';
        $agregarDatos -> execute();
        echo 'paso final';   
    }

    
    if ($_POST['submit']) {
        if (comprobacionEnvioCustom() && checkType($_POST['name'], 'string') && checkType($_POST['dni'], 'string')) {
            echo $valid;
            sanitizeText($_POST['name']);
            sanitizeText($_POST['dni']);
            envio_datos($conexion);
        } else {
            echo $invalid;
        }    
    }


    ?>
    </body>
</html>