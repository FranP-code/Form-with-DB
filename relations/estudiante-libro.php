<!DOCTYPE html>
<html lang="es" id="estudiante-libro_html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación Estudiante-Libro</title>
    <link rel="stylesheet" href="./relations.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="header-relacion" id="header">
        <h1>Relación <span class="relacion">Estudiante-Libro</span></h1>
    </header>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="number" placeholder="DNI" name="dni" class="input-yellow-1" required>
        <input type="number" placeholder="# de libro" name="id-libro" class="input-yellow-1" required>
        <input type="number" placeholder="Deuda del estudiante" name="deuda" class="input-yellow-1" required>
        <input type="submit" value="Enviar" name='submit' class="submit">
    </form>

    <?php

    require './logic/estudiante-libro-logic.php';

    if ($_POST['deuda'] < 5) {
        if ($_POST['submit']) {
            if (comprobacionEnvioCustom() && checkType($_POST['dni'], 'string') && checkType($_POST['id-libro'], 'string') && checkType($_POST['deuda'], 'string')) {
                sanitizeText($_POST['dni']);
                sanitizeText($_POST['id-libro']);
                sanitizeText($_POST['deuda']);
                envio_datos($conexion);

                if ($validation) {
                   echo $valid;
            }   else {
                    echo $invalid;
            } 
            }
        }
    } else {
        echo '<h2>La deuda del estudiante es muy alta. Devuelva un libro</h2>';
    }

    ?>
</body>
</html>