<?php
    error_reporting(0);

function comprobacionEnvio() {
    if (isset($_POST['submit'])) {
        return true;
    }
}

function metodoEnvio() {
    echo '<h2 class="valid">El formulario ha sido enviado con exito usando el metodo ';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'POST</h2>';

    } else {
        echo 'GET</h2>';
    }
}
    

function notEmpty($a) {
    if (empty($a)) {
        return false;
        $a = "n";
    }

    if ($a != "n"){
        return true;
    }
}

function notDefault($a) {
    if ($a == '') {
    return false;
    $a = "n";
    }

    if ($a != "n"){
        return true;
    }
}

function sanitizeText($a) {
    $b = filter_var($a, FILTER_SANITIZE_STRING);
    return $b;
}

$valid = '<h2 class="valid">El formulario se acepto con exito!</h2>';
$invalid = '<h2 class="invalid">El formulario no ha sido aceptado. Por favor reviselo</h2>';

?>