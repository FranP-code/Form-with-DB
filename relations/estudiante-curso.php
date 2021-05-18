<!DOCTYPE html>
<html lang="es" id="estudiante-curso_html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación Estudiante-Curso</title>
    <link rel="stylesheet" href="./relations.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="header-relacion" id="header">
        <h1>Relación <span class="relacion">Estudiante-Curso</span></h1>
    </header>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input name="dni" type="number" placeholder="DNI"  class="input-green-1" required>
        <select name="curso" class="input-green-1" required>
            <option value="">Seleccione una opción</option>    
            <?php

    function generarCursos() {
        require '../conexionMySQL.php';
        require '../scripting/palabras.php';
    
        $idC = 0;
    
        for ($i=0; $i < count($año) ; $i++) {
    
            switch ($año[$i]) {
                case '1º':
                    $condicion = 4;
                    break;
                case '2º':
                    $condicion = 4;
                    break;
                case '3º':
                    $condicion = 4;
                    break;
                case '4º':
                    $condicion = count($divisionReduced);
                    $cicloSupOInf = true;
                    break;
                case '5º':
                    $condicion = count($divisionReduced);
                    $cicloSupOInf = true;
                    break;
                case '6º':
                    $condicion = count($divisionReduced);
                    $cicloSupOInf = true;
                    break;
            }
            
            for ($e=0; $e < $condicion; $e++) {
    
                if ($cicloSupOInf) {
                    $value = $idC;
                    echo  '<option value="' . $value . '" >' . $año[$i] . ' ' . $divisionReduced[$e];
                    $idC++;  
                } else {
                    $value = $idC;
                    echo  '<option value="' . $value . '" >' . $año[$i] . ' ' . $division[$e];
                    $idC++;  
                }
            }
    
        }
    }

    generarCursos();

    ?>
        </select>
        <input type="submit" value="Enviar" name='submit' class="submit">
    </form>
    
    <?php

    require './logic/estudiante-curso-logic.php';

        if ($_POST['submit']) {
            if (comprobacionEnvioCustom() && checkType($_POST['dni'], 'string') && checkType($_POST['curso'], 'string')) {
                echo $valid;
                sanitizeText($_POST['dni']);
                sanitizeText($_POST['curso']);
                envio_datos($conexion);
            } else {
                echo $invalid;
            }
        }

    ?>
</body>
</html>