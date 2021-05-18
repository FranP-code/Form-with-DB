<?php

    require '../backEnd.php';
    require '../conexionMySQL.php';

    function comprobacionEnvioCustom() {
        if (comprobacionEnvio($_POST['X']) && comprobacionEnvio($_POST['Y']) && comprobacionEnvio($_POST['Z']) && comprobacionEnvio($_POST['submit'])) {
            return true;

        }
    }
    
    
    function envio_datos($connect) {
        $agregarDatos = $connect -> prepare('insert into A (X, Y, Z) values (?, ?, ?)');
        echo 'paso 1';
        $agregarDatos -> bindParam(1, $_POST['X'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 2';
        $agregarDatos -> bindParam(2, $_POST['Y'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 3';
        $agregarDatos -> bindParam(3, $_POST['Z'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
        echo 'paso 4';
        $agregarDatos -> execute();
        echo 'paso final';   
        
    }
    
    if ($_POST['submit']) {
        if (comprobacionEnvioCustom() && checkType($_POST['X'], 'string') && checkType($_POST['Y'], 'string') && checkType($_POST['Z'], 'string')) {
            echo $valid;
            sanitizeText($_POST['X']);
            sanitizeText($_POST['Y']);
            sanitizeText($_POST['Z']);
            envio_datos($conexion);
        } else {
            echo $invalid;
        }
    }

    ?>