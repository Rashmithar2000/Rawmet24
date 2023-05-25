
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'uploaded';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}




$targetDir = "uploads/";  // Directory where you want to store the uploaded files
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;  // Flag to check if the file upload is valid

// Check if a file has been selected
if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "File already exists.";
        $uploadOk = 0;
    }

    // Check file size (optional)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "File is too large. Maximum file size allowed is 500KB.";
        $uploadOk = 0;
    }

    // Check file format (optional)
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");  // Example list of allowed file extensions
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Invalid file format. Only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // If the upload is valid, move the file to the target directory
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
