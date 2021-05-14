<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Asistencia</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="../normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a style="color:rgb(131, 145, 156);">Asistencia</a>
            <a href="./rellenarLibro.php">Libro</a>
            <a href="./rellenarCurso.php">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input required type="date" name="day" class="input-1" id="today" >
            <select required class="input-2" name="preceptora">
                <option value="">- Seleccione una opcion -</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php 

    require '../backEnd.php';
    require '../conexionMySQL.php';

    function comprobacionEnvioCustom() {
        if (comprobacionEnvio($_POST['day']) && comprobacionEnvio($_POST['preceptora']) && comprobacionEnvio($_POST['submit'])) {
            return true;
            
        }
    }

    function envio_datos($connect) {
        $agregarDatos = $connect -> prepare('insert into asistencia (dia, preceptora) values (?, ?)');
        echo 'paso 1';
        $agregarDatos -> bindParam(1, $_POST['day'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo $_POST['day'];
        echo 'paso 2';
        $agregarDatos -> bindParam(2, $_POST['preceptora'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 3';
        $agregarDatos -> execute();
        echo 'paso final';   
        
    }

    if ($_POST['submit']) {
        if (comprobacionEnvioCustom() && checkType($_POST['day'], 'string') && checkType($_POST['preceptora'], 'string')) {
            echo $valid;
            sanitizeText($_POST['day']);
            sanitizeText($_POST['preceptora']);
            envio_datos($conexion);
        } else {
            echo $invalid;
        }
}

    ?>
</html>
