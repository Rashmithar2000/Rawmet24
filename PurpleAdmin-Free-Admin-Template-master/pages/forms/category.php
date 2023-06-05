<?php

include "connect.php";

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $categoryName = $_POST['categoryName'];
    $subCategory = $_POST['subCategory'];

    $query = "INSERT INTO category (categoryName, subCategory) VALUES ('$categoryName', '$subCategory')";
    
    if ($conn->query($query) === TRUE) {
        header("Location: categories.php"); 
        alert("Successfully added");
        
    } else {
        if ($conn->errno == 1062) {
            echo "Error: Duplicate entry. Category already exists.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}


$conn->close();
?>
