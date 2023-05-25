<?php

$hostname = 'localhost';   
$username = 'root';  
$password = '';  
$database = 'registration_db';  


$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $categoryName = $_POST['categoryName'];
    $subCategory = $_POST['subCategory'];

    $query = "INSERT INTO category (categoryName, subCategory) VALUES ('$categoryName', '$subCategory')";
    
    if ($connection->query($query) === TRUE) {
        header("Location: category.html"); 
        alert("Successfully added");
        
    } else {
        if ($connection->errno == 1062) {
            echo "Error: Duplicate entry. Category already exists.";
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    }
}


$connection->close();
?>
