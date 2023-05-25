<?php

session_start();


$email = $_POST['email'];
$password = $_POST['password'];

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration_db";
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM signup WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    $storedHashedPassword = $row['password'];
    $decode=base64_decode($storedHashedPassword);

if($password==$decode){
            header("Location: tender.html"); //Redirect user to home page

         }else {

        //    alert("Invalid Password");
           header("Location:signin.html");
        
        }
    }

$conn->close();
?>