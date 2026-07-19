<?php
// Database Configuration
$host = "localhost";
$username = "root";
$password = "Saad@8528";
$database = "portfolio";
// Create Connection
$conn = new mysqli($host, $username, $password, $database);
// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
// Set Character Encoding
$conn->set_charset("utf8");
?>