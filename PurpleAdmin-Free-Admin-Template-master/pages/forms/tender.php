<?php
include_once "connect.php";
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
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $unit = isset($_POST['unit']) ? $_POST['unit'] : '';
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
    //=======================================================upload ====================

    $fname=$_FILES["img"]["name"];
    //print_r($fname);die;
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


    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    
    $value = $quantity . ' ' . $unit;

    $sql = "INSERT INTO tenders (category, infoId, ownership, tenderLocation, sector, tenderNumber,
     tenderDesc, material, quantity,publishingDatetime, startDatetime, endDatetime, 
     emdType, emdAmt, tenderValue,companyName, location, street, city, 
     telephone, email, contactPerson, img,file) 
    VALUES ('$category', '$infoId', '$ownership', '$tenderLocation', '$sector', '$tenderNumber', 
    '$tenderDesc', '$material','$value', '$publishingDatetime', '$startDatetime', '
    $endDatetime', '$emdType', '$emdAmt','$tenderValue', '$companyName',
     '$location', '$street', '$city', '$telephone', '$email', '$contactPerson','$fname2','$dname2')";



    if ($conn->query($sql) === true) {
        ?> <script>
        alert("Tender Data Added!");
        window.location.replace("./editTendlist.php");
    </script>
    <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Retrieve the stored data from the database

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
    

   
