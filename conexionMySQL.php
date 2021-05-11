<?php

try {
	$conexion = new PDO('mysql:host=localhost;dbname=EDEM', 'root', 'ipd973f6ks');
        } catch(PDOexception $e) {
	    echo "Error: " . $e -> getMessage();
    }

$librosEnBD = $conexion -> query('select * from libro');

?>