<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rellenar estudiante</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./normalize.css">
</head>
<body>
    <header >
        <div class="header-links">
            <a href="./rellenarEstudiante.php">Estudiante</a>
            <a href="./rellenarAsistencia.php">Asistencia</a>
            <a href="./rellenarLibro">Libro</a>
            <a href="./rellenarCurso">Curso</a>
        </div>
    </header>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="text" placeholder="Name" name="name" class="name" id="name">
            <input type="number" placeholder="DNI" name="dni" class="email" id="dni">
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
</html>
