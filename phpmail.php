ini_set("SMTP", "smtp.hostinger.com.br");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "seuemail@seudominio.com");

$to = "destinatario@dominio.com";
$subject = "Assunto do email";
$message = "Mensagem do email";

$headers = "From: seuemail@seudominio.com\r\n";
$headers .= "Reply-To: seuemail@seudominio.com\r\n";
$headers .= "Content-type: text/html\r\n";

if(mail($to, $subject, $message, $headers)){
    echo "Email enviado com sucesso!";
} else{
    echo "Falha ao enviar o email...";
}
