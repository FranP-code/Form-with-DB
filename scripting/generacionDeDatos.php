<?php

require 'palabras.php';
require 'funciones.php';


//! ASISTENCIA

function generarAsistencia($numero) {
    require '../conexionMySQL.php';

    for ($i=0; $i <= $numero; $i++) { 
        $day = '2021' . '-' . strval(random_int(3, 12)) . '-' . strval(random_int(1, 30));
        echo $day;
        echo '<br>';

        $preceptora = random_int(1, 4);
        echo $preceptora;
        echo '<br>';

        introducirAsistenciaBD($day, $preceptora, $conexion);
    }

// * ACA para generar asistencias...
//todo generarAsistencia(*cantidad*);

}
//! ESTUDIANTE

function generarEstudiante($numero) {
    require '../conexionMySQL.php';
    require './palabras.php';

    for ($i=0; $i <= $numero; $i++) { 
        $dni = random_int(11111111, 99999999);
        echo $dni;
        echo '<br>';

        $name = $nombresStock[random_int(1, 77)];
        echo $name;
        echo '<br>';

        introducirEstudianteBD($dni, $name, $conexion);
    }

}

// * ACA para generar los estudiantes...
//todo generarEstudiante(*cantidad*);

//! CURSO

function generarCursos() {
    require '../conexionMySQL.php';
    require './palabras.php';


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
            
            echo $año[$i];
            echo ' ';
            if ($cicloSupOInf) {
                echo $divisionReduced[$e];
                echo '  ID = ' . $idC;
                introducirCursoBD ($conexion, $idC, $año[$i], $divisionReduced[$e]);
                $idC++;  
            } else {
                echo $division [$e];
                echo '      ID = ' . $idC;
                introducirCursoBD ($conexion, $idC, $año[$i], $division[$e]);
                $idC++;  
            }
            echo '<br>';
        }
        echo '<br>';
        echo '--------------';
        echo '<br>';
    }
}

// * ACA para generar los cursos...
//todo generarCursos();

//! LIBRO

$idL = 0;

?>