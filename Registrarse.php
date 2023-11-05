<?php

require 'database.php';

$mensaje = "";

//agregar la informacion BD
if (!empty($_POST['correo']) && !empty($_POST['contrasena'])){
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (:nombre, :correo,  :contrasena)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $contrasena);

    //validamos registro
    if($stmt->execute()){
        $mensaje = "El usuario se ha registrado correctamente";
    }else{
        $mensaje = "Lo sentimos no se hay registro en proceso";
    }

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="shortcut icon" type="image/x-icon" href="LOGO DEL SENA.png">
    <link rel="stylesheet" href="assets/css/iniciar sesion.css">
</head>
<body>
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Registrarse</h3>
                <form action="Registrarse.php" method="post">
                    <div class="input-box">
                        <input type="text" placeholder="Correo" class="input-control" name="correo">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Nombre Completo" class="input-control" name="nombre">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input-control" name="contrasena">
                        </div>
                        <button>Enviar Mensaje</button>
                        <input type="submit" formaction="init.php" class="button" value="Cancelar">
  
                </form>

                <!--Mensaje de guardado-->
                <?php if(!empty($mensaje)):?>
                    <p><?=$mensaje ?></p>
                <?php endif; ?>

            </div>
        </div>
</section>
    
</body>
</html>