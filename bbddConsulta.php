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
        $conn = mysqli_connect("localhost","root","","directorio");
        // Check connection
        if ($conn->connect_error) {
            die("Conexion fallida: ".$conn->connect_error);
        }else{
            echo "conectado a la BBDD"."<br/>";
        }
        // asignacion de variables
        $tipo = array_key_exists('tipo',$_GET) ? $_GET['tipo'] : NULL;  //"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
        
        $result = mysqli_query ($conn,"SELECT * FROM VIVIENDAS WHERE INSTR(UPPER(TIPO), '$TIPO') = 1");//lo intenté con ? pero no logré que funcionara;
        
        printf("La selección devolvió %d filas.\n", mysqli_num_rows($result));
        echo'<br/>';
        echo '<table><tr><th>ID</th><th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCIÓN</th><th>POBLACIÓN</th><th>CÓDIGO POSTAL</th><th>TELÉFONO</th><th>EMAIL</th></tr>';//Para darle formato a los resultados los meto en una tabla

    ?>
</body>
</html>