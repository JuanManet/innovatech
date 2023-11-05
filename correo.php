<?php

    $destinatario = 'jmanuelechavarria20@gmail.com';

    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $mensaje = $_POST['Mensaje'];

    $header = "Enviado desde Innovatech";
    $mensajeCompleto = $mensaje . "/nAtentamente: ". $nombre;

    mail($destinatario, $email, $mensajeCompleto, $header);

    echo "<script>alert('Enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='init.php'\",1000)</script>";



?>