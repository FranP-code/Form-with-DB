<!DOCTYPE html>
<html lang="es" id="estudiante-asistencia_html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación Estudiante-Asistencia</title>
    <link rel="stylesheet" href="./relations.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header-relacion" id="header">    
        <h1>Relación <span class="relacion">Estudiante-Asistencia</span></h1>
    </header>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="number" placeholder="DNI" name="" class="input-blue-1" required>
        <input type="date" placeholder="Día" name="" class="input-blue-1" required>
        <select name="" class="input-blue-1" required>
            <option value="">Seleccione una opción</option>
            <option value="1">Presente</option>
            <option value="0">Ausente</option>
        </select>
        <input type="submit" value="Enviar" class="submit">
    </form>

    <button>Asistencia en masa</button>
</body>
</html>
<script src="./script.js"></script>