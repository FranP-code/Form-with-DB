<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Curso</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="./normalize.css">
    <script src="script.js"></script>
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a href="./rellenarAsistencia.php">Asistencia</a>
            <a href="./rellenarLibro.php">Libro</a>
            <a style="color:rgb(131, 145, 156);">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="number" placeholder="ID de clase" name="id" class="input-1 no-arrow" id="id">
            <select type="range" placeholder="Seleccione un año" name="year" class="input-2" id="">
                <option>- SELECCIONE UNA OPCION -</option>
                <option>1º</option>
                <option>2º</option>
                <option>3º</option>
                <option>4º</option>
                <option>5º</option>
                <option>6º</option>
            </select>
            <select type="range" placeholder="Seleccione un año" name="year" class="input-3" id="">
                <option>- SELECCIONE UNA OPCION -</option>
                <option>1ra</option>
                <option>2da</option>
                <option>3era</option>
                <option>4era</option>
                <option>Economia</option>
                <option>Sociales</option>
                <option>Artes</option>
            </select>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
</html>
