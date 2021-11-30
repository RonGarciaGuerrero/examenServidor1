<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <!-- Autor: Ronald Garcia Guerrero -->
    <style>
        body{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: smaller;
        }
        h1{
            color: rgb(3,101,196)
        }
        .marco{
            border-style: dashed;
            width: 600px;
            padding: 5px;
            border-color: gray;
            border-width: 1px;
        }
    </style>
</head>
<body>
<h1>Insertar en la BBDD Lindavista:</h1><br/>
<!-- //se usa multipart porque el formulario incyude elementos del tipo file -->
    <div class="marco">
    <form action="bbddInsertar.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td style="font-weight: bold;"><label for="tipo">Tipo de vivienda</label></td>
            <td>
                <select name="tipo" id="tipo">
                <option value="PISO">PISO</option>
                <option value="ADOSADO">ADOSADO</option>
                <option value="CHALET">CHALET</option>
                <option value="CASA">CASA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="zona">Zona</label></td>
            <td>
                <select name="zona" id="zona">
                    <option value="CENTRO">CENTRO</option>
                    <option value="NERVION">NERVION</option>
                    <option value="TRIANA">TRIANA</option>
                    <option value="ALJARAFE">ALJARAFE</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="direccion">Dirección</label></td>
            <td><input style="text-transform: uppercase;" required type="text" name="direccion"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="dormitorios">Número de dormitorios</label></td>
            <td>
                <select name="dormitorios" id="dormitorios">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected>3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="precio">Precio en euros</label></td>
            <td><input required type="number" name="precio" min="1">€</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="tamanio">Tamaño en m2</label></td>
            <td><input required type="number" name="tamanio" min="1">metros cuadrados</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="extras">Extras (marque los que procedan)</label></td>
            <td>
                <input type="checkbox" id="extra1" name="extras[]" value="PISCINA">
                <label for="extra1">Piscina</label>&nbsp;
                <input type="checkbox" id="extra2" name="extras[]" value="JARDIN">
                <label for="extra2">Jardin</label>&nbsp;
                <input type="checkbox" id="extra3" name="extras[]" value="GARAJE">
                <label for="extra3">Garaje</label>
            </td>
        </tr>
        <tr><!-- importante el type de la foto es file, validacion de formato en el formulario html -->
            <td style="font-weight: bold;"><label for="foto">Foto</label></td>
            <td><input type="file" name="foto" accept=".jpg,.jpeg,.png"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><label for="email">Observaciones</label></td>
            <td><textarea name="observaciones" rows="10" cols="30"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="Insertar vivienda"></td>
            <td></td>
        </tr>
    </table>
    </form>
    </div>
    <ul>
        <li>
            <a href="index.html">Volver al inicio</a>
        </li>
    </ul>
</body>
</html>