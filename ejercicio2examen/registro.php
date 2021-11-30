<?php
        if(array_key_exists('password',$_POST)&&array_key_exists('usuario',$_POST)){//se verifica si existen en el array
            $usuario = $_POST["usuario"];//asigno valores
            $pass = $_POST["password"];
            $newURL = 'bienvenida.php';
            $newURL2 = 'incorrecto.php';
            if($usuario==$pass && !is_null($usuario)){//si el usuario y la contraseña son iguales y no nulos se inicia sesión redirigiendo a la pagina de bienvenida, sino redirige a la pagina incorrecto
                session_start();
                $_SESSION['nombre']=$usuario;
                header('Location: '.$newURL);
                
                if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
                } else {
                    $_SESSION['count']++;
                }
            }else{
                header('Location: '.$newURL2);
            }
        }
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
    <form action="registro.php" method="POST" name="usuario">
    <table>
        <tr>
            <td><label for="usuario">Usuario</label></td>
            <td><input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required><br/></td>
        </tr>
        <tr>
            <td><label for="pass">Contraseña</label></td>
            <td><input type="password" name="password" required><br/></td>
        </tr>

    </table>
        <input type="submit" name="iniciar" value="Iniciar sesión">
    </form>

</body>
</html>