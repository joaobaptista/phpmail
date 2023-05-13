<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // carrega o PHPMailer

// cria uma nova instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP do Gmail
    $mail->SMTPDebug = 2; // ativa o modo debug para depuração
    $mail->isSMTP(); // usa SMTP para envio de e-mails
    $mail->Host = 'smtp.gmail.com'; // servidor SMTP do Gmail
    $mail->SMTPAuth = true; // habilita a autenticação SMTP
    $mail->Username = 'seuemail@gmail.com'; // seu e-mail do Gmail
    $mail->Password = 'suasenha'; // sua senha do Gmail
    $mail->SMTPSecure = 'ssl'; // tipo de criptografia SSL/TLS
    $mail->Port = 465; // porta SMTP do Gmail

    // Configurações do e-mail a ser enviado
    $mail->setFrom('seuemail@gmail.com', 'Seu nome');
    $mail->addAddress('destinatario@email.com', 'Nome do destinatário');
    $mail->Subject = 'Assunto do e-mail';
    $mail->Body = 'Mensagem do e-mail em HTML e/ou texto simples';

    // Envia o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar e-mail: ' . $mail->ErrorInfo;
}