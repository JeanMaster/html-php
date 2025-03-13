<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'jeancarlos70@gmail.com';
    $phpmailer->Password = 'kgym jsam aekz aaek';

    //  Añadiendo destinatarios
    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name); 

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();
    
}

?>