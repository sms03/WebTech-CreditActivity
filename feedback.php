<?php
$conn = new mysqli("localhost", "your_username", "your_password", "user_feedback");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $message = $_POST["message"];

    $sql = "INSERT INTO feedback (username, message) VALUES ('$username', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>