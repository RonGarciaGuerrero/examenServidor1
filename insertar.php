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
        <select name="tipo" id="tipo">
            <option value="PISO">PISO</option>
            <option value="ADOSADO">ADOSADO</option>
            <option value="CHALET">CHALET</option>
            <option value="CASA">CASA</option>
        </select><br/>
        <label for="zona">Zona</label><br/>
        <select name="zona" id="zona">
            <option value="CENTRO">CENTRO</option>
            <option value="NERVION">NERVION</option>
            <option value="TRIANA">TRIANA</option>
            <option value="ALJARAFE">ALJARAFE</option>
        </select><br/>
        
        <label for="direccion">Dirección</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="direccion"><br/>
        <label for="dormitorios">Número de dormitorios</label><br/>
        <select name="dormitorios" id="dormitorios">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br/>
        
        <label for="precio">Precio en euros</label><br/>
        <input required type="number" name="precio" min="1"><br/>
        <label for="tamanio">Tamaño en m2</label><br/>
        <input required type="number" name="tamanio" min="1"><br/>

        <label for="extras">Extras</label><br/>
        <input type="checkbox" id="extra0" name="extras[]" value="N/A">
        <label for="extra0">No aplica</label><br>
        <input type="checkbox" id="extra1" name="extras[]" value="PISCINA">
        <label for="extra1">Piscina</label><br>
        <input type="checkbox" id="extra2" name="extras[]" value="JARDIN">
        <label for="extra2">Jardin</label><br>
        <input type="checkbox" id="extra3" name="extras[]" value="GARAJE">
        <label for="extra3">Garaje</label><br><br>

        <label for="foto">URL Foto</label><br/>
        <input type="text" name="foto"><br/><br/>
        <label for="email">Observaciones</label><br/>
        <input type="text" name="observaciones"><br/><br/>
        
        
        
        <input type="submit">
    </form>
</body>
</html>

<!-- Pendiente:
controlar las excepciones, posibles errores en los campos 
lo de sql injection ?
antonio me dice que escoja un menu desplegable de escoger mas d euna opcion html para evitar que escojan no aplica y piscina 
-->