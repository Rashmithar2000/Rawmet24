<?php

session_start();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$conPassword = isset($_POST['conPassword']) ? $_POST['conPassword'] : '';

if ($password !== $conPassword) {
    echo "Password and Confirm Password do not match";
    exit;
}

$hashedPassword = base64_encode($password);

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration_db";
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";


if ($conn->query($sql) === TRUE) {
    header("location: home.php");
    session_close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

v
$conn->close();
?>
