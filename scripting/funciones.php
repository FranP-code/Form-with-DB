<?php 

require '../conexionMySQL.php';

function introducirAsistenciaBD($day, $preceptora, $connect) {
    $agregarDatos = $connect -> prepare('insert into asistencia (dia, preceptora) values (?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $day, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $preceptora, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> execute();
    echo 'paso final';  

}


function introducirEstudianteBD($dni, $name, $connect) {
    $agregarDatos = $connect -> prepare('insert into estudiante (dni, nombre) values (?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $dni, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $name, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> execute();
    echo 'paso final';
    }

function introducirCursoBD ($connect, $id, $year, $division){
    $agregarDatos = $connect -> prepare('insert into curso (id, año, division) values (?, ?, ?)');
    echo 'paso 1';
    $agregarDatos -> bindParam(1, $id, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 2';
    $agregarDatos -> bindParam(2, $year, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 3';
    $agregarDatos -> bindParam(3, $division, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    echo 'paso 4';
    $agregarDatos -> execute();
    echo 'paso final';   
    
}

function introducirLibroBD ($connect, $id, $title, $amount) {
    $agregarDatos = $connect -> prepare('insert into libro (id_libro, titulo, cantidad) values (?, ?, ?)');
    //echo 'paso 1';
    $agregarDatos -> bindParam(1, $id, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    //echo 'paso 2';
    $agregarDatos -> bindParam(2, $title, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    //echo 'paso 3';
    $agregarDatos -> bindParam(3, $amount, PDO::PARAM_STR /* Aca poner tipo de dato esperado*/);
    //echo 'paso 4';
    $agregarDatos -> execute();
    //echo 'paso final';   
}

?>