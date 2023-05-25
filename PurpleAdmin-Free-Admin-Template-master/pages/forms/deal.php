<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $infoId = isset($_POST['infoId']) ? $_POST['infoId'] : '';
    $ir = isset($_POST['ir']) ? $_POST['ir'] : '';
    $fe = isset($_POST['fe']) ? $_POST['fe'] : '';

    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $dealValue= isset($_POST['dealValue']) ? $_POST['dealValue'] : '';
    $dealDatetime = isset($_POST['dealDatetime']) ? $_POST['dealDatetime'] : '';
    $docCreatedby = isset($_POST['docCreatedby']) ? $_POST['docCreatedby'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $industrialArea = isset($_POST['industrialArea']) ? $_POST['industrialArea'] : '';
    $companyName = isset($_POST['companyName']) ? $_POST['companyName'] : '';
    $contactPerson = isset($_POST['contactPerson']) ? $_POST['contactPerson'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';   
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '';
    $whatsappNumber = isset($_POST['whatsappNumber']) ? $_POST['whatsappNumber'] : '';   
    $gstin = isset($_POST['gstin']) ? $_POST['gstin'] : '';
    $orderType = isset($_POST['orderType']) ? $_POST['orderType'] : ''; 
    $material = isset($_POST['material']) ? $_POST['material'] : '';
    $specification = isset($_POST['specification']) ? $_POST['specification'] : '';
    $dor = isset($_POST['dor']) ? $_POST['dor'] : '';
    $expQuotation = isset($_POST['expQuotation']) ? $_POST['expQuotation'] : '';
 
 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'registration_db';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO deals ( category, infoId, ir, fe,quantity, dealValue ,dealDatetime, docCreatedby, location, 
    industrialArea,companyName, contactPerson, email, address, city, state, contactNumber, 
    whatsappNumber,gstin, orderType, material,specification, dor, expQuotation) 
  VALUES ('$category', '$infoId', '$ir',  '$fe', '$quantity','$dealValue', '$dealDatetime',' $docCreatedby',  '$location', '$industrialArea',
   '$companyName',   '$contactPerson', '$email','$address', '$city',  '$state', '$contactNumber', '$whatsappNumber',
    '$gstin', '$orderType', '$material', '$specification','$dor', '$expQuotation');";

    if ($conn->query($sql) === true) {

        ?> <script>
        alert("Deal Added!");
        window.location.replace("./deals.html");
    </script>
    <?php
        //header("Location: /PurpleAdmin-Free-Admin-Template-master/pages/samples/login.html");
        //echo "Hi";
    
    
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
$sql = "SELECT * FROM deals";
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

<?php
?>



