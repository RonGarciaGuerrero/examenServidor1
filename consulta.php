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
    <h1>Consultar Viviendas Lindavista:</h1><br/>
    <label for="tipo">Consultar vivienda del tipo:</label><br/><br/>
    
    <form action="bbddConsulta.php" method="GET">
        <select name="TIPO" id="tipo">
            <option value="TODOS">TODOS</option>
            <option value="PISO">PISO</option>
            <option value="ADOSADO">ADOSADO</option>
            <option value="CHALET">CHALET</option>
            <option value="CASA">CASA</option>
        </select>&nbsp;
        <input type="submit" value="Actualizar">
    </form>
    <ul>
        <li>
            <a href="insertar.php"> Ir a Insertar viviendas</a>
        </li>
        <li>
            <a href="index.html">Volver al inicio</a>
        </li>
    </ul>
    
</body>
</html>