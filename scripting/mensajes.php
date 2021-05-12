<?php

function success($string) {
    return '<h2 class="valid">' . $string . ' se generaron con exito</h2>';

} 

function fail($string, $error) {
    return '<h2 class="invalid">' . $string. ' no se generaron. <br> Razon: ' . $error .'</h2>';
    
}

?>