<?php


require '../conexionMySQL.php';
require '../backEnd.php';

function comprobacionEnvioCustom() {
    if (comprobacionEnvio($_POST['dni']) && comprobacionEnvio($_POST['id-libro']) && comprobacionEnvio($_POST['deuda']) && comprobacionEnvio($_POST['submit'])) {
        return true;

    }
}


function envio_datos($connect) {
    $agregarDatos = $connect -> prepare('insert into estudiante_libro (DNI, id_libro, deuda) values (?, ?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $_POST['dni'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $_POST['id-libro'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> bindParam(3, $_POST['deuda'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 4';
    $agregarDatos -> execute();
    echo 'paso final';   
    
}

?>