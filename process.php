<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido <?php echo $_POST["nombres"] ?> </title>
    <link rel="stylesheet" type="text/css" href="../web01/css/main.css">
</head>
<body>
    <!-- Aquí va tu código PHP y HTML -->

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = trim($_POST["nombres"]);
    $apellidos = trim($_POST["apellidos"]);
    $edad = trim($_POST["edad"]);
    $sexo = trim($_POST["sexo"]);
    $telefono = trim($_POST["telefono"]);
    $direccion = trim($_POST["direccion"]);

    // Validar que los campos no estén vacíos
    if (empty($nombres) || empty($apellidos) || empty($edad) || empty($sexo) || empty($telefono) || empty($direccion)) {
        echo "<script>alert('Por favor, llenar todos los campos.');</script>";
        return;
    }

    // Validar que la edad sea un número
    if (!is_numeric($edad)) {
        echo "<script>alert('Por favor, introduzca una edad válida.');</script>";
        return;
    }

    // Validar que el sexo sea Masculino o Femenino
    if ($sexo != "Masculino" && $sexo != "Femenino") {
        echo "<script>alert('Por favor, seleccione un sexo válido.');</script>";
        return;
    }

    // Validar que el teléfono tenga el formato correcto (4 dígitos - 4 dígitos)
    if (!preg_match("/^[0-9]{4}-[0-9]{4}$/", $telefono)) {
        echo "<script>alert('Por favor, ingrese un teléfono válido.');</script>";
        return;
    }

    echo "<div class='welcome'>Bienvenido usuario: " . $nombres . " " . $apellidos . "</div>";
    echo "<div class='userData'>Su edad es: " . $edad . "</div>";
    echo "<div class='userData'>Su sexo es: " . $sexo . "</div>";
    echo "<div class='userData'>Su número telefónico es: " . $telefono . "</div>";
    echo "<div class='userData'>Su dirección: " . $direccion . "</div>";
}