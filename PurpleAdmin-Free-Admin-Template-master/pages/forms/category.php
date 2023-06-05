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
        header("Location: category_list.php"); 
        alert("Successfully added");
        
    } else {
        if ($conn->errno == 1062) {
            echo "Error: Duplicate entry. Category already exists.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}





// Check if form is submitted
if (isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $categoryName = $_POST['categoryName'];
    $subCategory = $_POST['subCategory'];

    // Update query
    $sql = "UPDATE category SET categoryName='$categoryName', subCategory='$subCategory' WHERE id='$id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Category updated successfully.";
    } else {
        echo "Error updating category: " . $conn->error;
    }
}

// Retrieve category details from the database
$id = $_GET['id'];
$sql = "SELECT * FROM category WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



?>