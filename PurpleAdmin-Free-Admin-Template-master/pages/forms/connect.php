<?php 
 
 $conn= new mysqli('localhost','root','newpassword','registration_db');

 if(!$conn)
 {
    die(mysqli_error($conn));
 }

?>