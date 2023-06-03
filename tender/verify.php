<?php

session_start();
include "connect.php";
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';



if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$epassword=base64_encode($password);

$sql = "SELECT * FROM buyer_dashboard WHERE email = '$email' and password='$epassword'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$subscription=$row['subscription'];
$name=$row['name'];
// print_r($row);
// die;

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    //$storedHashedPassword = $row['password'];
    // $decode=base64_decode($storedHashedPassword);
    $_SESSION['sub'] = $subscription;   
    $_SESSION['buyer_name'] = $name;
    header("Location: home.php"); //Redirect user to home page
    // header("Location: ".$_SERVER['PHP_SELF']);  
    }else {

        //    alert("Invalid Password");
        header("Location:signin.html");
        
        }
    session_close();
$con->close();
?>