<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - EJ 2</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <?php
        session_start(); 
        echo "Hola, bienvenido de nuevo a nuestra aplicación ".$_SESSION['nombre']; 
    ?>
</body>
</html>