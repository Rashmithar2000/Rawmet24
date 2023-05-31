<?php
include "connect.php";

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



if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";


if ($con->query($sql) === TRUE) {
    header("location: home.php");
    session_close();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();
?>
