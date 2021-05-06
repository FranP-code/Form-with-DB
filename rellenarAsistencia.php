<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Asistencia</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="./normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a style="color:rgb(131, 145, 156);">Asistencia</a>
            <a href="./rellenarLibro.php">Libro</a>
            <a href="./rellenarCurso.php">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="date" timezone="" placeholder="Seleccionar fecha" name="" class="input-1" id="today" >
            <input type="" placeholder="" name="" class="input-2" id="">
            <input type="" placeholder="" name="" class="input-3" id="">
            <input type="" placeholder="" name="" class="input-4" id="">
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
</html>
