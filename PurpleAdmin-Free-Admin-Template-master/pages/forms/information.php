<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $infoId = isset($_POST['infoId']) ? $_POST['infoId'] : '';
    $showName = isset($_POST['showName']) ? $_POST['showName'] : '';
    $dateTime = isset($_POST['dateTime']) ? $_POST['dateTime'] : '';
    $profile = isset($_POST['profile']) ? $_POST['profile'] : '';
    $organizedBy = isset($_POST['organizedBy']) ? $_POST['organizedBy'] : '';
    $organizedAdd = isset($_POST['organizedAdd']) ? $_POST['organizedAdd'] : '';
    $venue = isset($_POST['venue']) ? $_POST['venue'] : '';
    $map = isset($_POST['map']) ? $_POST['map'] : '';

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'registration_db';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Insert the form data into the database
    $sql = "INSERT INTO info_table (infoId, showName, dateTime, profile, organizedBy , organizedAdd, venue ,map)
     VALUES ('$infoId', '$showName', '$dateTime', '$profile', '$organizedBy','$organizedAdd', '$venue', '$map')";

    if ($conn->query($sql) === true) {
        ?>
        <script>
            alert("Information Added!");
            window.location.replace("./information.php");
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Retrieve the stored data from the database
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'registration_db';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM info_table";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No data found.";
}

$conn->close();
?>
