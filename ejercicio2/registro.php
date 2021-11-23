<?php
   ob_start();
   session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <form action="registro.php" method="POST" name="usuario"></form>
       
        <label for="usuario">Usuario</label>
        
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required><br/>
        
        <label for="pass">Contraseña</label>
        
        <input type="password" name="password" required><br/>
        
        <button type="submit" name="registrar">Registrar</button>
    <?php
        $usuario = $_POST["usuario"];
        $pass = $_POST["password"];
        $msg = '';

        if (isset($_POST['registrar']) && !empty($usuario) 
               && !empty($pass)) {
				
               if ($usuario == $pass) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['usuario'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }



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