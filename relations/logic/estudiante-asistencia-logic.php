<?php

function comprobacionEnvioCustom() {
    if (comprobacionEnvio($_POST['dni']) && comprobacionEnvio($_POST['day']) && comprobacionEnvio($_POST['presence']) && comprobacionEnvio($_POST['submit'])) {
        return true;

    }
}


function envio_datos($connect) {
    $agregarDatos = $connect -> prepare('insert into estudiante_asistencia (DNI, dia, presencialidad) values (?, ?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $_POST['dni'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $_POST['day'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> bindParam(3, $_POST['presence'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 4';
    $agregarDatos -> execute();
    echo 'paso final';   
    
}


?>