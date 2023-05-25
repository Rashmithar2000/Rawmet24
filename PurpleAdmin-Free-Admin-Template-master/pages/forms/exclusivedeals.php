<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $infoId = isset($_POST['infoId']) ? $_POST['infoId'] : '';
    $ir = isset($_POST['ir']) ? $_POST['ir'] : '';
    $fe = isset($_POST['fe']) ? $_POST['fe'] : '';
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

    $sql = "INSERT INTO exclusive_deals ( category, infoId, ir, fe, dealDatetime, docCreatedby, location, 
    industrialArea,companyName, contactPerson, email, address, city, state, contactNumber, 
    whatsappNumber,gstin, orderType, material,specification, dor, expQuotation) 
  VALUES ('$category', '$infoId', '$ir',  '$fe', '$dealDatetime',' $docCreatedby',  '$location', '$industrialArea',
   '$companyName',   '$contactPerson', '$email','$address', '$city',  '$state', '$contactNumber', '$whatsappNumber',
    '$gstin', '$orderType', '$material', '$specification','$dor', '$expQuotation');";

    if ($conn->query($sql) === true) {

        echo "Deal successful!";
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
$sql = "SELECT * FROM exclusive_deals";
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

<!-- HTML form -->
<form action="exclusivedeals.php" method="POST" class="forms-sample">
    <!-- Form fields here -->

<!-- Display the stored data -->
<?php if (!empty($data)): ?>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Information Number</th>
                <th>ir</th>
                <th>fe</th>
                <th>dealDatetime</th>
                <th>docCreatedby</th>
                <th>location</th>
                <th>industrialArea</th>
                <th>companyName</th>
                <th>contactPerson</th>
                <th>email</th>
                <th>address</th>
                <th>city</th>
                <th>state</th>
                <th>contactNumber</th>
                <th>whatsappNumber</th>
                <th>gstin</th>
                <th>orderType</th>
                <th>material</th>
                <th>specification</th>
                <th>dor</th>
                <th>expQuotation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['infoId']; ?></td>
                    <td><?php echo $row['ir']; ?></td>
                    <td><?php echo $row['fe']; ?></td>
                    <td><?php echo $row['dealDatetime']; ?></td>
                    <td><?php echo $row['docCreatedby']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['industrialArea']; ?></td>
                    <td><?php echo $row['companyName']; ?></td>
                    <td><?php echo $row['contactPerson']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['contactNumber']; ?></td>
                    <td><?php echo $row['whatsappNumber']; ?></td>
                    <td><?php echo $row['gstin']; ?></td>
                    <td><?php echo $row['orderType']; ?></td>
                    <td><?php echo $row['material']; ?></td>
                    <td><?php echo $row['specification']; ?></td>
                    <td><?php echo $row['dor']; ?></td>
                    <td><?php echo $row['expQuotation']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No data found.</p>
<?php endif; ?>




