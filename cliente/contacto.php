<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Headers CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación
    $required = ['nombre', 'email', 'mensaje'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo json_encode(["message" => "El campo $field es requerido."]);
            exit;
        }
    }
    
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["message" => "Email no válido."]);
        exit;
    }
    
    // Sanitización
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = !empty($_POST["telefono"]) ? strip_tags(trim($_POST["telefono"])) : '';
    $asunto = !empty($_POST["asunto"]) ? strip_tags(trim($_POST["asunto"])) : 'Consulta';
    $mensaje = strip_tags(trim($_POST["mensaje"]));
    
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0; // Habilita debug
    ob_start(); // Para capturar el output del debug
    
    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '8dd8c9001@smtp-brevo.com';
        $mail->Password = 'TzLyUcA21gSQDqIv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Remitente y destinatario
        $mail->setFrom('donaschapin@gmail.com', 'Cliente ChapinDonas');
        $mail->addAddress('donaschapin@gmail.com', 'Chapin Donas');
        $mail->addReplyTo($email, $nombre);
        
        // Contenido
        $mail->isHTML(false);
        $mail->Subject = "Contacto: $asunto";
        $mail->Body = "Nombre: $nombre\nEmail: $email\nTelefono: $telefono\n\nMensaje:\n$mensaje";
        
        $mail->send();
        
        // Respuesta JSON explícita
        echo json_encode([
            "status" => "success",
            "message" => "¡Gracias! Tu mensaje ha sido enviado correctamente. En breve te estaremos contactando.",
            "server_response" => "Correo aceptado por el servidor SMTP"
        ]);
        exit;

    } catch (Exception $e) {
        // Respuesta de error detallada
        echo json_encode([
            "status" => "error",
            "message" => "Error al enviar el mensaje",
            "technical_message" => $e->getMessage(),
            "smtp_error" => $mail->ErrorInfo,
            "server_response" => "Error en el servidor SMTP"
        ]);
        exit;
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Método no permitido"
    ]);
    exit;
}

