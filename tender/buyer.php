<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include "connect.php";

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM buyer_dashboard WHERE email = '$email'";
$result = $con->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['buyer_name']=$name;
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

$con->close();
?>