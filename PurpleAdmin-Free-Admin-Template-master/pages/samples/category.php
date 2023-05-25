<?php

session_start();

$categoryName = $_POST['categoryName'];
$subCategory = $_POST['subCategory'];

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration_db";
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO category (categoryName, subCategory) VALUES ('$categoryName', '$subCategory') ";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
         echo "Category added.";
         }else {

         echo "Category not added.";
        
        }
    

$conn->close();
?>