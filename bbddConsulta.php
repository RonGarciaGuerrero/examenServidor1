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
    <?php 
        // Conección
        $conn = mysqli_connect("localhost","root","","lindavista");
        // Check connection
        if ($conn->connect_error) {
            die("Conexion fallida: ".$conn->connect_error);
        }else{
            echo "conectado a la BBDD"."<br/>";
        }
        // asignacion de variables
        $TIPO = array_key_exists('TIPO',$_GET) ? $_GET['TIPO'] : 'TODOS';  //"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
        //si viene el tipo en el GET, lo coge, sino muestro todos
        
        echo $TIPO;
        //$result = NULL;
        
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
                echo'<br/>';
    
                echo '<table><tr><th>ID</th><th>Tipo</th><th>Zona</th><th>Dirección</th><th>Dormitorios</th><th>Precio</th><th>Tamaño</th><th>Extras</th><th>Foto</th><th>Observaciones</th></tr>';//Para darle formato a los resultados los meto en una tabla
                while($row = mysqli_fetch_array($result)){
                    echo '<tr><td>'.$row["ID"].'</td><td>'.$row["TIPO"].'</td><td>'.$row["ZONA"].'</td><td>'.$row["DIRECCION"].'</td><td>'.$row["DORMITORIOS"].'</td><td>'.$row["PRECIO"].'</td><td>'.$row["TAMANIO"].'</td><td>'.$row["EXTRAS"].'</td><td>'.$row["FOTO"].'</td><td>'.$row["OBSERVACIONES"].'</td></tr>';
                    echo'<br/>';
                    echo'<br/>';
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
</body>
</html>