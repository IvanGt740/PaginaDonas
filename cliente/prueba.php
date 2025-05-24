<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    // Configuración del servidor
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->SMTPAuth = true;
    $mail->Username = '8dd8c9001@smtp-brevo.com';
    $mail->Password = 'TzLyUcA21gSQDqIv';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Destinatarios
    $mail->setFrom('donaschapin@gmail.com', 'Chapin Donas');
    $mail->addAddress('donaschapin@gmail.com');
    
    // Contenido
    $mail->isHTML(false);
    $mail->Subject = "Prueba de correo";
    $mail->Body = "Este es un correo de prueba";
    
    $mail->send();
    echo 'Correo enviado correctamente';
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}";
}

$mail->SMTPDebug = 3; // Habilita salida detallada de debug
?>