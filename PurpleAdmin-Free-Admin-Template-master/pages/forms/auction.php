<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $infoId = isset($_POST['infoId']) ? $_POST['infoId'] : '';
    $ownership = isset($_POST['ownership']) ? $_POST['ownership'] : '';
    $aucLocation = isset($_POST['aucLocation']) ? $_POST['aucLocation'] : '';
    $sector = isset($_POST['sector']) ? $_POST['sector'] : '';
    $aucNumber = isset($_POST['aucNumber']) ? $_POST['aucNumber'] : '';
    $aucDescription = isset($_POST['aucDescription']) ? $_POST['aucDescription'] : '';
    $aucValue = isset($_POST['aucValue']) ? $_POST['aucValue'] : '';
    $aucSource = isset($_POST['aucSource']) ? $_POST['aucSource'] : '';
    $material = isset($_POST['material']) ? $_POST['material'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $unit = isset($_POST['unit']) ? $_POST['unit'] : '';
    $ePublishingDateTime = isset($_POST['ePublishingDateTime']) ? $_POST['ePublishingDateTime'] : '';
    $startDatetime = isset($_POST['startDatetime']) ? $_POST['startDatetime'] : '';
    $endDatetime = isset($_POST['endDatetime']) ? $_POST['endDatetime'] : '';
    $insStartdatetime = isset($_POST['insStartdatetime']) ? $_POST['insStartdatetime'] : '';
    $insEnddatetime = isset($_POST['insEnddatetime']) ? $_POST['insEnddatetime'] : '';
    $emdType = isset($_POST['emdType']) ? $_POST['emdType'] : '';
    $emdAmt = isset($_POST['emdAmt']) ? $_POST['emdAmt'] : '';
    $companyName = isset($_POST['companyName']) ? $_POST['companyName'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $street = isset($_POST['street']) ? $_POST['street'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contactPerson = isset($_POST['contactPerson']) ? $_POST['contactPerson'] : '';


     //=======================================================upload ====================

     $fname=$_FILES["img"]["name"];
    
     $fname2="";
     $ctr=0;
     foreach($fname as $fn){
         $targetDir = "uploads/"; // Directory to store uploaded images
         $targetFile = $targetDir . basename($_FILES["img"]["name"][$ctr]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
 
         // Allow only certain file formats
         if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
             echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 1) {
             move_uploaded_file($_FILES["img"]["tmp_name"][$ctr], $targetFile);  
             $fname2 = serialize($fname);    
         }
 
         $ctr++;
     }
 
 
     
 
 
     //=========================================================================================
 
 
 
     $dname=$_FILES["file"]["name"];
     //print_r($fname);die;
     $dname2="";
     $ctr=0;
     foreach($dname as $fn){
         $targetDir = "uploads/"; // Directory to store uploaded images
         $targetFile = $targetDir . basename($_FILES["file"]["name"][$ctr]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
 
         // Allow only certain file formats
         if ($imageFileType != "pdf" ) {
             echo "Error: Only pdf files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 1) {
             move_uploaded_file($_FILES["file"]["tmp_name"][$ctr], $targetFile);  
             $dname2 = serialize($dname);    
         }
 
         $ctr++;
     }
 
 
 
 
 
 
     //=======================================================doc upload ====================
 

    // TODO: Validate and sanitize the form data before storing it in the database

    // Database connection
    $servername = 'localhost';
    $username = 'root';
    $password = 'newpassword';
    $database = 'registration_db';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    $value = $quantity . ' ' . $unit;

    // Insert the form data into the database
    $sql = "INSERT INTO auction (category, infoId, ownership, aucLocation, sector, aucNumber,
     aucDescription, aucValue ,aucSource, material,quantity, ePublishingDateTime, startDatetime, endDatetime, 
     insStartdatetime, insEnddatetime, emdType, emdAmt, companyName, location, street, city, 
     telephone, email, contactPerson, img, file) 
    VALUES ('$category', '$infoId', '$ownership', '$aucLocation', '$sector', '$aucNumber', 
    '$aucDescription', '$aucValue', '$aucSource', '$material', '$value','$ePublishingDateTime', '$startDatetime', '
    $endDatetime', '$insStartdatetime', '$insEnddatetime', '$emdType', '$emdAmt', '$companyName',
     '$location', '$street', '$city', '$telephone', '$email', '$contactPerson' , '$fname2', '$dname2')";

    if ($conn->query($sql) === true) {
      ?> <script>
    alert("Auction Added!");
    window.location.replace("./auctions.php");
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
$sql = "SELECT * FROM auction";
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


<!-- Display the stored data -->
<?php 


?>
    

