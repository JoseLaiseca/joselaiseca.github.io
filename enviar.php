<?php
    $destino = "joselaiseca@outlook.es";
    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $telefono = $_POST["cel"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre: " . $nombre . "\nCorreo: " . $correo ."\nTelefono: " . $cel . "\nMensaje: " . $mensaje; 
    mail($destino,"Contacto", $contenido);
    header("location: gracias.html");
?>