<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configuración del correo
    $to = "santhy472@gmail.com";  // Tu dirección de correo electrónico
    $subject = "Nuevo mensaje de $name";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
