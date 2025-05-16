<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Optionally save to database or send email
    file_put_contents("messages.txt", "$name <$email>: $message\n", FILE_APPEND);

    echo "<script>alert('Message sent successfully! Thank you ❤️'); window.location.href='contact.php';</script>";
}
?>
