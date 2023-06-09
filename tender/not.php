<?php
// Establish a MySQL database connection
$servername = "localhost";
$username = "root";
$password = "newpassword";
$dbname = "registration_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get notification data from the HTTP POST request
$message = $_POST["message"];
$sender = $_POST["sender"];
$timestamp = $_POST["timestamp"];

// Save the notification in the database
$sql = "INSERT INTO notifications (message, sender, timestamp) VALUES ('$message', '$sender', '$timestamp')";
if ($conn->query($sql) === TRUE) {
  echo "Notification sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>