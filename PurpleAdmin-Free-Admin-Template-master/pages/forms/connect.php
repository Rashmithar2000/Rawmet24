<?php 
 
 $conn= new mysqli('localhost','root','','registration_db');

 if(!$conn)
 {
    die(mysqli_error($conn));
 }

?>