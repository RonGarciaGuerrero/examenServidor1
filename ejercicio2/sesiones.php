<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - EJ 2</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>



    <?php 
        $usuario = $_POST["usuario"];
        $pass = $_POST["password"];
        
        if($usuario==$pass){
            session_start();
            header()
            if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
          } else {
            $_SESSION['count']++;
          }


        }
         
    ?>
</body>
</html>