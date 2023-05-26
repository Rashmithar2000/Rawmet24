<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload handling
if (isset($_FILES['files'])) {
    $errors = [];
    $fileCount = count($_FILES['files']['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = $_FILES['files']['type'][$i];
        $fileSize = $_FILES['files']['size'][$i];

        // File upload directory
        $uploadDir = "uploads/";
        $targetFilePath = $uploadDir . $fileName;

        // Move uploaded file to the target directory
        if (move_uploaded_file($fileTmp, $targetFilePath)) {
            // SQL query to insert file details into the table
            $sql = "INSERT INTO files (name, type, size, path) VALUES ('$fileName', '$fileType', $fileSize, '$targetFilePath')";
            if ($conn->query($sql) === TRUE) {
                echo "File uploaded successfully: $fileName<br>";
            } else {
                echo "Error inserting file record: " . $conn->error . "<br>";
            }
        } else {
            $errors[] = "Error uploading file: $fileName";
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

$conn->close();
?>

<!-- HTML Form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="files[]" multiple>
  <input type="submit" value="Upload">
</form>
