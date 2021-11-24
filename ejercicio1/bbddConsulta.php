<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <?php 
        // Conección
        $conn = mysqli_connect("localhost","root","","lindavista");
        // Check connection
        if ($conn->connect_error) {
            die("Conexion fallida: ".$conn->connect_error);
        }else{
            echo "conectado a la BBDD"."<br/><br/>";
        }
        // asignacion de variables
        $TIPO = array_key_exists('TIPO',$_GET) ? $_GET['TIPO'] : 'TODOS';  //"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
        //si viene el tipo en el GET, lo coge, sino muestro todos
        
        
        if($TIPO == 'TODOS'){
            $result = mysqli_query ($conn,"SELECT * FROM VIVIENDAS");
        }else{
            if (!is_null($TIPO)){
                $result = mysqli_query ($conn,"SELECT * FROM VIVIENDAS WHERE TIPO = '$TIPO'");
            }
        }
        
        if(!$result){
            echo "Ha ocurrido un error";
            //echo mysqli_error($conn);
        }else{
            if (!mysqli_num_rows($result)==0){
                printf("La selección devolvió %d filas.\n", mysqli_num_rows($result));
                echo'<br/><br/>';
    
                echo '<table><tr><th>ID</th><th>Tipo</th><th>Zona</th><th>Dirección</th><th>Dormitorios</th><th>Precio</th><th>Tamaño</th><th>Extras</th><th>Observaciones</th><th>Foto</th></tr>';//Para darle formato a los resultados los meto en una tabla
                while($row = mysqli_fetch_array($result)){
                    echo '<tr><td>'.$row["ID"].'</td><td>'.$row["TIPO"].'</td><td>'.$row["ZONA"].'</td><td>'.$row["DIRECCION"].'</td><td>'.$row["DORMITORIOS"].'</td><td>'.$row["PRECIO"].'</td><td>'.$row["TAMANIO"].'</td><td>'.$row["EXTRAS"].'</td><td>'.$row["OBSERVACIONES"].'</td><td>';
                    if(!is_null($row['FOTO'])){
                        echo '<a href="mostrarImagen.php?id_vivienda='.$row["ID"].'"><img src="./fichero.png" height="30"/></a>';
                    }
                    
                    echo '</td></tr>';
                }
                echo '</table>';
                /* liberar el conjunto de resultados */
                mysqli_free_result($result);
            }else{
                echo 'No se encontró ningún registro.';
            }
        }
        

        mysqli_close($conn);

    ?>
    <ul>
        <li>
            <a href="consulta.php">Volver a consultar viviendas</a>
        </li>
        <li>
            <a href="index.html">Volver al inicio</a>
        </li>
    </ul>
</body>
</html>