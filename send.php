<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/phpmailer/src/PHPMailer.php';
require 'includes/phpmailer/src/SMTP.php';
require 'includes/phpmailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $mail->CharSet = 'UTF-8';


    if (!$name || !$email || !$subject || !$message) {
        http_response_code(400);
        echo "All fields are required.";
        exit;
    }

    // ✅ Email Verification using Abstract API
    $apiKey = "0c1626b79b7b4630befc98b1d46b96bb";
    $verifyUrl = "https://emailvalidation.abstractapi.com/v1/?api_key=$apiKey&email=" . urlencode($email);
    $verifyResponse = file_get_contents($verifyUrl);
    $verifyData = json_decode($verifyResponse, true);

    if (
        !$verifyData['is_valid_format']['value'] ||
        $verifyData['deliverability'] !== 'DELIVERABLE' ||
        $verifyData['is_disposable_email']['value']
    ) {
        http_response_code(400);
        echo "❌mail address is invalid, undeliverable, or disposable.";
        exit;
    }

    // ✅ Generate Gravatar URL
    $gravatarHash = md5(strtolower(trim($email)));
    $avatar = "https://www.gravatar.com/avatar/$gravatarHash?s=100&d=identicon";

  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vdarwin860@gmail.com';
    $mail->Password   = 'ybve xumi zutn nmro';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('vdarwin860@gmail.com', 'Darwin Portfolio');
    $mail->addAddress('vdarwin860@gmail.com');
    $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "📩 New Contact Form Message: $subject";

        // Email body with Gravatar
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; font-size: 14px; color: #333;'>
                <img src='$avatar' width='60' height='60' style='border-radius:50%; margin-bottom:15px'><br>
                <strong>Name:</strong> $name<br>
                <strong>Email:</strong> <a href='mailto:$email'>$email</a><br>
                <strong>Subject:</strong> $subject<br><br>
                <strong>Message:</strong><br>" . nl2br($message) . "
            </div>
        ";

        $mail->send();
        echo "✅ Message sent successfully!";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(403);
    echo "Invalid request.";
}
