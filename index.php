<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <link rel="stylesheet" type="text/css" href="../web01/css/main.css">
</head>
<body>

    <h2>Formulario de Registro</h2>
    <form action="./process.php" method="post">
        Nombre: <input type="text" name="nombres" required><br>
        Apellido: <input type="text" name="apellidos" required><br>
        Edad: <input type="number" name="edad" min="1" max="120" required><br>
        <br>
        Sexo:
        <input type="radio" name="sexo" value="Masculino" required> Masculino
        <input type="radio" name="sexo" value="Femenino" required> Femenino
        <br>
        <br>
        <br>
        Teléfono: <input type="tel" name="telefono" pattern="[0-9]{4}-[0-9]{4}" placeholder="7000-8888" title="Ejemplo: 7888-1222" required><br>
        Dirección: <input type="text" name="direccion" required><br>
        <input type="submit" value="Enviar">
    </form>

    <footer>
        <p>Hecho por Darío Alexander García Navarrete</p>
    </footer>

</body>

</html>