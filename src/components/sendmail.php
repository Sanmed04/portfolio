<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];

    $to = 'santiagomedina111204@gmail.com';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "De: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email enviado';
    } else {
        echo 'Hubo un error al enviar el email';
    }
}
?>