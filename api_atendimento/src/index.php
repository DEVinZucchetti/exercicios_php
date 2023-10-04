<?php
// Inclua o Composer Autoloader
require '../vendor/autoload.php';

// Crie uma instância do PHPMailer
$phpmailer = new PHPMailer\PHPMailer\PHPMailer();

// SMTP

$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = 'b2ab7e798f588d';
$phpmailer->Password = 'd0eae85bc4a4c8';

// Configurações de email
$phpmailer->setFrom('henriquedouglas2803@gmail.com', 'Seu Nome');
$phpmailer->addAddress('henriquedouglas2803@gmail.com', 'Henrique');
$phpmailer->Subject = 'Assunto do Email';
$phpmailer->Body = '<html></html>';

// Tente enviar o email
if ($phpmailer->send()) {
    echo "Email enviado com sucesso!";
} else {
    echo "Erro ao enviar o email: " . $phpmailer->ErrorInfo;
}
?>