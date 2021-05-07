<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Libro</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="./normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a href="./rellenarAsistencia.php">Asistencia</a>
            <a style="color:rgb(131, 145, 156);">Libro</a>
            <a href="./rellenarCurso.php">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="number" placeholder="# de libro" name="id" class="input-1 no-arrow" id="" required>
            <input type="text" placeholder="Titulo" name="title" class="input-2" id="" required >
            <input type="number" placeholder="Cantidad" name="amount" class="input-3" id="" required>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php 

    require 'backEnd.php';

    if (comprobacionEnvio()) {
        metodoEnvio();

        if (notEmpty($_POST['id']) && notEmpty($_POST['title']) && notEmpty($_POST['amount'])){
            sanitizeText(['title']);
            echo $valid;

        } else {
            echo $invalid;
        }
    }

    ?>
</html>
