<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Otros campos del formulario

    $destinatario = "bzamparo@gmail.com";
    $asunto = "Mensaje desde tu sitio web";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Telefono: $telefono\n";
    $mensaje .= "Correo: $correo\n";
    $mensaje .= "Mensaje: $mensaje\n";

    // Agregar otros campos del formulario al mensaje

    $headers = "From: $correo";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>