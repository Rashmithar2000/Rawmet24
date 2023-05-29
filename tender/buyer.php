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

$sql = "SELECT * FROM buyer_dashboard WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['name']=$name;
    $_SESSION['subscription']=0;


    $row = $result->fetch_assoc();
    $storedHashedPassword = $row['password'];
    $decode=base64_decode($storedHashedPassword);

if($password==$decode){
           
    header("Location: home.php"); //Redirect user to home page

         }else {

           header("Location:signin.html");
        
        }
        session_close();
    }

$conn->close();
?>