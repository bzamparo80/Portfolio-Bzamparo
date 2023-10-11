<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    // Otros campos del formulario

    $destinatario = "bzamparo@gmail.com";
    $asunto = "Mensaje desde tu sitio web";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo: $correo\n";
    // Agregar otros campos del formulario al mensaje

    $headers = "From: $correo";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>