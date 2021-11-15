<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <!-- Autor: Ronald Garcia Guerrero -->

</head>
<body>
<h1>Insertar en la BBDD lindavista:</h1><br/>
    <form action="bbddInsertar.php" method="post">
        <label for="tipo">Tipo de vivienda</label><br/>
        <select name="TIPO" id="tipo">
            <option value="PISO">PISO</option>
            <option value="ADOSADO">ADOSADO</option>
            <option value="CHALET">CHALET</option>
            <option value="CASA">CASA</option>
        </select><br/>
        <label for="zona">Zona</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="zona"><br/>
        <label for="direccion">Dirección</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="direccion"><br/>
        <label for="dormitorios">Número de dormitorios</label><br/>
        <select name="dormitorios" id="dormitorios">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br/>
        
        <label for="cp">Precio</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="cp"><br/>
        <label for="telefono">Telefono</label><br/>
        <input required type="number" name="telefono"><br/>
        <label for="email">Email</label><br/>
        <input required type="text" name="email"><br/><br/>
        <input type="submit">
    </form>
</body>
</html>