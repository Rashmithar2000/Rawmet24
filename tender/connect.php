<?php 
 
 $con= new mysqli('localhost','root','','registration_db');

 if(!$con)
 {
    die(mysqli_error($con));
 }

?>