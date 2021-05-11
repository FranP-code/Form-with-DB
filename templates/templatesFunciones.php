<?php

//! REQUERIMIENTOS


//crear requerimientos

require '../backEnd.php';
require '../conexionMySQL.php';

//! COMPROBACIONES


//comprobar que se haya presionado en submit (este es antes que la comprobacion siguiente)

if ($_POST['submit']) {
    
}

//comprobar  que se hicieron los envios
function comprobacionEnvioCustom() {
    if (comprobacionEnvio($_POST['1']) && comprobacionEnvio($_POST['2']) && comprobacionEnvio($_POST['submit'])) {
        return true;
        
    }
}

//comprobar que no este vacio

notEmpty('*b');

//comprobar que no sea valor por default un input de seleccion de opciones

notDefault('*a*');

//comprobaciones de que no los inputs sean strings

if (comprobacionEnvioCustom() && checkType($_POST['1'], 'string') && checkType($_POST['2'], 'string')) {
    //Acciones a hacer una vez demostrado que los inputs tienen strings dentro

}










//! CONFIRMACION AL USUARIO

//* if comprobacion envio custom is true
    echo $valid;

//* if comprobacion envio custom is false
    echo $invalid;












//! SANITIZACIONES

sanitizeNumbers($n);

sanitizeText($s);












//! ENVIO DE DATOS

function envio_datos($connect) {
    $agregarDatos = $connect -> prepare('insert into *table* (*a*, *b*) values (?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $_POST['*a*'], PDO::PARAM_INT /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $_POST['*b*'], PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> execute();
    echo 'paso final';   
    
}

//! En connect se coloca la variable $conexion













//BACKUP
?>