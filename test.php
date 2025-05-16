<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/includes/phpmailer/src/PHPMailer.php';
require __DIR__ . '/includes/phpmailer/src/SMTP.php';
require __DIR__ . '/includes/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vdarwin860@gmail.com';        // ✅ Your Gmail
    $mail->Password   = 'ybve xumi zutn nmro';      // ✅ App password only
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('darwinwengweng20@gmail.com', 'Darwin Site');
    $mail->addAddress('vdarwin860@gmail.com', 'You');

    $mail->isHTML(true);
    $mail->Subject = '📩 Test Email via PHPMailer on HPanel';
    $mail->Body    = 'This is a live test email sent from your deployed server.';

    $mail->send();
    echo "✅ Message sent successfully!";
} catch (Exception $e) {
    echo "<pre>❌ Mailer Error: {$mail->ErrorInfo}</pre>";
}
