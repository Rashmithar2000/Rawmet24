<?php

session_start();

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "newpassword";
$dbName = "registration_db";
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$epassword=base64_encode($password);

$sql = "SELECT * FROM buyer_dashboard WHERE email = '$email' and password='$epassword'";
$result = $conn->query($sql);
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
    $_SESSION['name'] = $name;
    header("Location: home.php"); //Redirect user to home page
       
    }else {

        //    alert("Invalid Password");
        header("Location:signin.html");
        
        }
    session_close();
$conn->close();
?>