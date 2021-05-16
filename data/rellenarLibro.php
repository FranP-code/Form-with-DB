<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Libro</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="../normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a href="./rellenarAsistencia.php">Asistencia</a>
            <a style="color:rgb(131, 145, 156);">Libro</a>
            <a href="./rellenarCurso.php">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="number" placeholder="# de libro" name="id" class="input-1 no-arrow" id="" required>
            <input type="text" placeholder="Titulo" name="title" class="input-2" id="" required >
            <input type="number" placeholder="Cantidad" name="amount" class="input-3" id="" required>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php

    require '../backEnd.php';
    require '../conexionMySQL.php';

    function comprobacionEnvioCustom() {
        if (comprobacionEnvio($_POST['id']) && comprobacionEnvio($_POST['title']) && comprobacionEnvio($_POST['amount']) && comprobacionEnvio($_POST['submit'])) {
            return true;
            
        }
    }

    function envio_datos($connect) {
        $agregarDatos = $connect -> prepare('insert into libro (id_libro, titulo, cantidad) values (?, ?, ?)');
        echo 'paso 1';
        $agregarDatos -> bindParam(1, $_POST['id'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 2';
        $agregarDatos -> bindParam(2, $_POST['title'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 3';
        $agregarDatos -> bindParam(3, $_POST['amount'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 4';
        $agregarDatos -> execute();
        echo 'paso final';   
        
    }

    if ($_POST['submit']) {
        if (comprobacionEnvioCustom() && checkType($_POST['id'], 'string') && checkType($_POST['title'], 'string') && checkType($_POST['amount'], 'string')) {
            echo $valid;
            sanitizeText($_POST['id']);
            sanitizeText($_POST['title']);
            sanitizeText($_POST['amount']);
            envio_datos($conexion);
        } else {
            echo $invalid;
        }
    }

    ?>
</html>
