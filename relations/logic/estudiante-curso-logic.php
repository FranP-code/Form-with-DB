<?php

require '../backEnd.php';
require '../conexionMySQL.php';

function comprobacionEnvioCustom() {
    if (comprobacionEnvio($_POST['dni']) && comprobacionEnvio($_POST['curso']) && comprobacionEnvio($_POST['submit'])) {
        return true;

    }
}


function envio_datos($connect) {
    $agregarDatos = $connect -> prepare('insert into estudiante_curso (DNI, id) values (?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $_POST['dni'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $_POST['curso'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> execute();
    echo 'paso final';   
    
}



?>