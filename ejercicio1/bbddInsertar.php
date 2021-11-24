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
        //conexion
        $conn = mysqli_connect("localhost","root","","lindavista");
        // Comprobar conexion
        if ($conn->connect_error) {
            die("Conexion fallida: ".$conn->connect_error);
        
        }else{
            echo "conectado a la BBDD"."<br/>";
        }
        //para generar el id he puesto en mysql admin al campo id le he dado a cambiar y he seleccionado el check de auto incremento AI, en el script de sql le he puesto el auto incremento despues del tipo

        // set parameters and execute
        $tipo = $_POST['tipo'];
        $zona = $_POST['zona'];
        $direccion = $_POST['direccion'];
        $dormitorios = $_POST['dormitorios'];
        $precio = $_POST['precio'];
        $tamanio = $_POST['tamanio'];
        $extras = '';
        
        $errores=[];//se crea un array que contendrá los errores

        if(isset($_POST['extras'])){ //para poder seleccionar varias opciones de los extras
            foreach($_POST['extras'] as $value){
                $extras.=$value.',';        
            }
        }else{
            $extras = 'N/A';//si no se selecciona extra se añade como valor N/A, así evito errores como que el usuario escoja N/A y ademas 'Piscina'
        }
        //Control de errores
        $foto = $_FILES['foto']['name'];//esto devuelve el nombre del fichero
        
        $imgData = NULL;
        if ($foto!=NULL ){//la persona ha subido una foto
            if(strtolower(substr($foto,-4))!='.png'&&strtolower(substr($foto,-4))!='.jpg'&&strtolower(substr($foto,-5))!='.jpeg'){//compruebo 4 ultimos caracteres del nombre del fichero
                $errores[]= 'La foto debe ser jpg o png';
            }else if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
                $imgData = addslashes(file_get_contents($_FILES['foto']['tmp_name']));//esto asigna a la variable los bytes de la foto
            }

        }
        //aunque ya estan controlados en el formulario html lo vuelvo a validar aqui
        if($precio<0){
            $errores[]= 'El precio no puede ser menor a cero';
        }
        if($tamanio<0){
            $errores[]= 'El tamanio no puede ser menor a cero';
        }

        //de aqui he sacado la info para insertar fotos en la BBDD
        //https://phppot.com/php/mysql-blob-using-php/
        
        $observaciones = $_POST['observaciones'];
        if(count($errores)>0){//si hay errores los muestro
            echo 'No se ha podido realizar la inserción debido a los siguientes errores: <br/>';//'hay errores'
            echo '<ul>';
            for($i=0;$i<count($errores);$i++){
                echo '<li>'.$errores[$i].'</li>';
            }
            echo '</ul>';
        }else{ //sino inserto en la tabla

            $sql = "INSERT INTO VIVIENDAS (TIPO,ZONA,DIRECCION,DORMITORIOS,PRECIO,TAMANIO,EXTRAS,FOTO,OBSERVACIONES) VALUES ('$tipo','$zona','$direccion','$dormitorios','$precio','$tamanio','$extras','$imgData','$observaciones')"; //"insert into viviendas ..."

            if (mysqli_query ($conn, $sql)){
                echo "Guardado correctamente <br>";
            }else{
                echo "Error guardando: " . $sql . "<br>" . mysqli_error($conn);
            }
            echo "Los valores guardados son: <br>";
            echo "Tipo: ".$tipo. "<br>";
            echo "Zona: ".$zona. "<br>";
            echo "Dirección: ".$direccion. "<br>";
            echo "Dormitorios: ".$dormitorios. "<br>";
            echo "Precio: ".$precio.'€'. "<br>";
            echo "Tamaño: ".$tamanio. "<br>";
    
            echo "Extras: ".$extras. "<br>";
            echo "Foto: ".$foto . "<br>";
            echo "Observaciones: ".$observaciones. "<br>";
        }
        mysqli_close($conn);
    ?>
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