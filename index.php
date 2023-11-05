<?php

session_start();

require 'database.php';

$resultados = [];
$mensaje = "";

//validar la informacion Tablas EMAIL.
if(!empty($_POST['correo']) && !empty($_POST['contrasena'])){
        $consulta = $conexion->prepare("SELECT  id, correo, nombre, contrasena FROM usuarios WHERE correo= :correo");
        $consulta->bindParam(':correo', $_POST['correo']);
        $consulta->execute();
        $resultados = $consulta->fetch(PDO::FETCH_ASSOC); 
        
}

//Valida el inicio sesión.
    if(count($resultados) > 0 && password_verify($_POST['contrasena'],$resultados['contrasena'])){
        $_SESSION['user_id'] = $resultados['id'];
        header('Location: init.php');
        exit();
    }else{
        $mensaje = "Lo sentimos, las credenciales no son correctas";
    }
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LOGO DEL SENA.png">
    <link rel="stylesheet" href="assets/css/iniciar sesion.css">
</head>
<body>


    <section class="form-main">
        <div class="form-content">
            <div class="box">
                
                <h3>Iniciar sesión</h3>
                <form action="index.php" method= "post">
                    <div class="input-box">
                        <input type="text" name= "correo" placeholder="Correo Electronico" class="input-control">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input-control" name="contrasena">
                        <div class="input-link">
                            <a href="Recuperarcuenta.php" class="gradient-text">¿Haz olvidado tu contraseña?</a>

                        </div>
                        <input type="submit"  class="btn" value="Ingresar">
                        </br></br>
                        <input type="submit" formaction="index.php"  class="btn" value="Cancelar">
                </form>
                
                <p>¿No tienes cuenta? <a href="Registrarse.php"class="gradient-text">Crear cuenta</a></p>
            </div>
        </div>
</section>
    
</body>
</html>