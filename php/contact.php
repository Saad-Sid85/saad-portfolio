<?php
require 'config.php';
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
        header("Location: ../index.php?status=success");
    } else {
        header("Location: ../index.php?status=error");
    }
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../index.php");
    exit();
}
?>