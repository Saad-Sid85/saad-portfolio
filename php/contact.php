<?php
require 'config.php';
require 'mail_config.php';
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get Form Data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header("Location: ../index.php?status=empty");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?status=invalidemail");
        exit();
    }
    // Prepared Statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
  if ($stmt->execute()) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        $mail->setFrom(SMTP_USERNAME, FROM_NAME);
        $mail->addAddress(TO_EMAIL);
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);
        $mail->Subject = "📩 New Portfolio Contact: " . $subject;
        $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>{$message}</p>
        <hr>
        <small>Sent from your Portfolio Website</small>
        ";
        $mail->send();
        header("Location: ../index.php?status=success");
        exit();
    } catch (Exception $e) {
        header("Location: ../index.php?status=success");
        exit();
    }
} else {
    header("Location: ../index.php?status=error");
    exit();
}
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../index.php");
    exit();
}
?>