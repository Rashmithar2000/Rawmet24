<?php 
 
 $con= new mysqli('localhost','root','newpassword','registration_db');

 if(!$con)
 {
    die(mysqli_error($con));
 }

?>