<?php
    //conexion
    $conn = mysqli_connect("localhost","root","","lindavista");
    // Comprobar conexion
    if ($conn->connect_error) {
        die("Conexion fallida: ".$conn->connect_error);
    
    }else{
        //echo "conectado a la BBDD"."<br/>"; borro esto para que no me dañe la foto
    }
    
    if(isset($_GET['id_vivienda'])) {//este fichero recibe como parametro el id de la vivienda cuya foto se va a mostrar, si no viene en el get no hacemos nada
        $sql = "SELECT foto FROM viviendas WHERE id=" . $_GET['id_vivienda'];//me da la foto de la vivienda cuyo id es igual al que se paso por parametro
		$result = mysqli_query($conn, $sql); 
        if (!$result){
            die("<b>Error:</b> Hay un problema recuperando la foto<br/>" . mysqli_error($conn));
        }  
		$row = mysqli_fetch_array($result);//se obtiene la fila de la fconsulta
		header("Content-type: image/png");//se pone en el header que lo que se esta enviando es una imagen
        echo $row["foto"];//envia los bytes de la foto
	}
	mysqli_close($conn);
?>