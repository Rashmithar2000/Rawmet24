<?php
include_once "connect.php";
// $id= $_GET['updateid'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
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
    $value = (isset($_POST['quantity']) ? $_POST['quantity'] : '') . ' ' . (isset($_POST['unit']) ? $_POST['unit'] : '');
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

   

    $category = mysqli_real_escape_string($conn, $category);
    $infoId = mysqli_real_escape_string($conn, $infoId);
    $ownership = mysqli_real_escape_string($conn, $ownership);
    $tenderLocation = mysqli_real_escape_string($conn, $tenderLocation);
    $sector = mysqli_real_escape_string($conn, $sector);
    $tenderNumber = mysqli_real_escape_string($conn, $tenderNumber);
    $tenderDesc = mysqli_real_escape_string($conn, $tenderDesc);
    $material = mysqli_real_escape_string($conn, $material);
    $quantity = mysqli_real_escape_string($conn, $quantity);
    $value = mysqli_real_escape_string($conn, $value);
    $publishingDatetime = mysqli_real_escape_string($conn, $publishingDatetime);
    $startDatetime = mysqli_real_escape_string($conn, $startDatetime);
    $endDatetime = mysqli_real_escape_string($conn, $endDatetime);
    $emdType = mysqli_real_escape_string($conn, $emdType);
    $emdAmt = mysqli_real_escape_string($conn, $emdAmt);
    $tenderValue = mysqli_real_escape_string($conn, $tenderValue);
    $companyName = mysqli_real_escape_string($conn, $companyName);
    $location = mysqli_real_escape_string($conn, $location);
    $street = mysqli_real_escape_string($conn, $street);
    $city = mysqli_real_escape_string($conn, $city);
    $telephone = mysqli_real_escape_string($conn, $telephone);
    $email = mysqli_real_escape_string($conn, $email);
    $contactPerson = mysqli_real_escape_string($conn, $contactPerson);

    
    $value = isset($_POST['value']) ? $_POST['value'] : '';

    if (!empty($value)) {
        $valueParts = explode(' ', $value, 2);
        $quantity = isset($valueParts[0]) ? $valueParts[0] : '';
        $unit = isset($valueParts[1]) ? $valueParts[1] : '';
    }

    // ... File upload code ...

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

   $value = $quantity . ' ' . $unit;

    // Build the query
    $sql = "UPDATE tenders SET 
        category = '$category',
        infoId = '$infoId',
        ownership = '$ownership',
        tenderLocation = '$tenderLocation',
        sector = '$sector',
        tenderNumber = '$tenderNumber',
        tenderDesc = '$tenderDesc',
        material = '$material',
        quantity = '$value',
        publishingDatetime = '$publishingDatetime',
        startDatetime = '$startDatetime',
        endDatetime = '$endDatetime',
        emdType = '$emdType',
        emdAmt = '$emdAmt',
        tenderValue = '$tenderValue',
        companyName = '$companyName',
        location = '$location',
        street = '$street',
        city = '$city',
        telephone = '$telephone',
        email = '$email',
        contactPerson = '$contactPerson',
        img = '$fname2',
        file = '$dname2'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {

        ?>
        <script>
            alert("Tender Updated Successfully!");
            window.location.replace("./tenders.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

