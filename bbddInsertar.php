<!-- Autor: Ronald Garcia Guerrero -->
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
    
    if(isset($_POST['extras'])){    
        foreach($_POST['extras'] as $value){
            $extras.=$value.',';        
        }
    }

    $foto = $_POST['foto'];
    $observaciones = $_POST['observaciones'];

    $sql = "INSERT INTO VIVIENDAS (TIPO,ZONA,DIRECCION,DORMITORIOS,PRECIO,TAMANIO,EXTRAS,FOTO,OBSERVACIONES) VALUES ('$tipo','$zona','$direccion','$dormitorios','$precio','$tamanio','$extras','$foto','$observaciones')"; //"insert into viviendas ..."

    if (mysqli_query ($conn, $sql)){
    echo "Guardado correctamente";
    }else{
    echo "Error guardando: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "Los valores guardados son: ";
    echo "Tipo: ".$tipo. "<br>";
    echo "Zona: ".$zona. "<br>";
    echo "Dirección: ".$direccion. "<br>";
    echo "Dormitorios: ".$dormitorios. "<br>";
    echo "Precio: ".$precio.'€'. "<br>";
    echo "Tamaño: ".$tamanio. "<br>";
    echo "Extras: ".$extras. "<br>";
    echo "Foto: ".$foto . "<br>";
    echo "Observaciones: ".$observaciones. "<br>";

    mysqli_close($conn);

?>