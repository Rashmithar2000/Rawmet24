<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "sNpl@18mgroad";
$dbname = "registration_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    session_start();
}
// Check connection

?>
