<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "travel");

// Safe fetch
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validation
if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required!";
    exit();
}

// Insert
$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql)) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>