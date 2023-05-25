<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $infoId = isset($_POST['infoId']) ? $_POST['infoId'] : '';
    $ownership = isset($_POST['ownership']) ? $_POST['ownership'] : '';
    $tenderLocation = isset($_POST['tenderLocation']) ? $_POST['tenderLocation'] : '';
    $sector = isset($_POST['sector']) ? $_POST['sector'] : '';
    $tenderNumber = isset($_POST['tenderNumber']) ? $_POST['tenderNumber'] : '';
    $tenderDesc = isset($_POST['tenderDesc']) ? $_POST['tenderDesc'] : '';
    $material = isset($_POST['material']) ? $_POST['material'] : '';
    $material = isset($_POST['material']) ? $_POST['material'] : '';
    $publishingDatetime = isset($_POST['publishingDatetime']) ? $_POST['publishingDatetime'] : '';
    $startDatetime = isset($_POST['startDatetime']) ? $_POST['startDatetime'] : '';
    $endDatetime = isset($_POST['endDatetime']) ? $_POST['endDatetime'] : '';
    $emdType = isset($_POST['emdType']) ? $_POST['emdType'] : '';
    $emdAmt = isset($_POST['emdAmt']) ? $_POST['emdAmt'] : '';
    $tenderValue = isset($_POST['tenderValue']) ? $_POST['tenderValue'] : '';
    $companyName = isset($_POST['companyName']) ? $_POST['companyName'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $street = isset($_POST['street']) ? $_POST['street'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contactPerson = isset($_POST['contactPerson']) ? $_POST['contactPerson'] : '';

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'registration_db';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO tenders (category, infoId, ownership, tenderLocation, sector, tenderNumber,
     tenderDesc, material, quantity,publishingDatetime, startDatetime, endDatetime, 
     emdType, emdAmt, tenderValue,companyName, location, street, city, 
     telephone, email, contactPerson) 
    VALUES ('$category', '$infoId', '$ownership', '$tenderLocation', '$sector', '$tenderNumber', 
    '$tenderDesc', '$material','$quantity', '$publishingDatetime', '$startDatetime', '
    $endDatetime', '$emdType', '$emdAmt','$tenderValue', '$companyName',
     '$location', '$street', '$city', '$telephone', '$email', '$contactPerson')";

    if ($conn->query($sql) === true) {
        ?> <script>
        alert("Tender Data Added!");
        window.location.replace("./deals.html");
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
$sql = "SELECT * FROM tenders";
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


<?php  ?>
    

   
