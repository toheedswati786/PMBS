<?php

$name = $_GET['name'] ?? 'No Name';
$email = $_GET['email'] ?? 'No Email';
$message = $_GET['message'] ?? 'No Message';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require dirname(__DIR__) . '/PHPMailer/src/Exception.php';
require dirname(__DIR__) . '/PHPMailer/src/PHPMailer.php';
require dirname(__DIR__) . '/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'marketing.pmbs@gmail.com';      // your email
    $mail->Password   = 'pwww zidx xdmq aexb';         // app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('marketing.pmbs@gmail.com', 'PMBS');
    $mail->addAddress('info@puremedicalbilling.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Website Contact Form Submission';
    $mail->Body    = '
        <h2>Website Contact Form Submission</h2>
        <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
        <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
        <p><strong>Message:</strong> ' . nl2br(htmlspecialchars($message)) . '</p>';
    $mail->AltBody = 'Contact Form Submission
        Name: ' . $name . '
        Email: ' . $email . '
        Message: ' . $message;

    $mail->send();
    header('Location: mailer2?name=' . $name . '&email=' . $email . '&message=' . $message);
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
