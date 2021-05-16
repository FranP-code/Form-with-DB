<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Curso</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="../normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a href="./rellenarAsistencia.php">Asistencia</a>
            <a href="./rellenarLibro.php">Libro</a>
            <a style="color:rgb(131, 145, 156);">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="number" placeholder="ID de clase" name="id" class="input-1 no-arrow" id="id" required>
            <select type="range" placeholder="Seleccione un año" name="year" class="input-2" id="" required>
                <option value="">- Seleccione una opcion -</option>
                <option value="1">1º</option>
                <option value="2">2º</option>
                <option value="3">3º</option>
                <option value="4">4º</option>
                <option value="5">5º</option>
                <option value="6">6º</option>
            </select>
            <select type="range" placeholder="Seleccione un año" name="division" class="input-3" id="" required>
                <option value="">- Seleccione una opcion -</option>
                <option value="1">1ra</option>
                <option value="2">2da</option>
                <option value="3">3era</option>
                <option value="4">4ta</option>
                <option value="Eco">Economia</option>
                <option value="Soc">Sociales</option>
                <option value="Art">Artes</option>
            </select>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php

    require '../backEnd.php';
    require '../conexionMySQL.php';

    function comprobacionEnvioCustom() {
        if (comprobacionEnvio($_POST['id']) && comprobacionEnvio($_POST['year']) && comprobacionEnvio($_POST['division']) && comprobacionEnvio($_POST['submit'])) {
            return true;
            
        }
    }
    
    
    function envio_datos($connect) {
        $agregarDatos = $connect -> prepare('insert into curso (id, año, division) values (?, ?, ?)');
        echo 'paso 1';
        $agregarDatos -> bindParam(1, $_POST['id'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 2';
        $agregarDatos -> bindParam(2, $_POST['year'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 3';
        $agregarDatos -> bindParam(3, $_POST['division'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 4';
        $agregarDatos -> execute();
        echo 'paso final';   
        
    }
    
    if ($_POST['submit']) {
        if (comprobacionEnvioCustom() && checkType($_POST['id'], 'string') && checkType($_POST['year'], 'string') && checkType($_POST['division'], 'string')) {
            echo $valid;
            sanitizeText($_POST['id']);
            sanitizeText($_POST['year']);
            sanitizeText($_POST['division']);
            envio_datos($conexion);
        } else {
            echo $invalid;
        }
    }
    ?>
</html>
