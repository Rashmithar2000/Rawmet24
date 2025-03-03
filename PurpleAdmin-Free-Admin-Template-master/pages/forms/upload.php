<?php
// Database connection
include "connect.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query for creating a table



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/"; // Directory to store uploaded images
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "Error: File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Error: File already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Error: File is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // If no errors, move the file to the target directory and insert filename into the database
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $filename = basename($_FILES["image"]["name"]);
            $insertSql = "INSERT INTO images (filename) VALUES ('$filename')";
           
    }
}
}
?>