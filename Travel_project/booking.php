<?php
$conn = new mysqli("localhost", "root", "", "travel");

$name = $_POST['name'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$date = $_POST['date'];
$message = $_POST['message'];

$sql = "INSERT INTO bookings (name, email, destination, date, message)
        VALUES ('$name', '$email', '$destination', '$date', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Trip booked successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>