<?php
include_once "connect.php";
// $id= $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
$infoId = isset($_POST['infoId']) ? mysqli_real_escape_string($conn, $_POST['infoId']) : '';
$ownership = isset($_POST['ownership']) ? mysqli_real_escape_string($conn, $_POST['ownership']) : '';
$aucLocation = isset($_POST['aucLocation']) ? mysqli_real_escape_string($conn, $_POST['aucLocation']) : '';
$sector = isset($_POST['sector']) ? mysqli_real_escape_string($conn, $_POST['sector']) : '';
$aucNumber = isset($_POST['aucNumber']) ? mysqli_real_escape_string($conn, $_POST['aucNumber']) : '';
$aucDescription = isset($_POST['aucDescription']) ? mysqli_real_escape_string($conn, $_POST['aucDescription']) : '';
$aucValue = isset($_POST['aucValue']) ? mysqli_real_escape_string($conn, $_POST['aucValue']) : '';
$aucSource = isset($_POST['aucSource']) ? mysqli_real_escape_string($conn, $_POST['aucSource']) : '';
$material = isset($_POST['material']) ? mysqli_real_escape_string($conn, $_POST['material']) : '';
$quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($conn, $_POST['quantity']) : '';
$unit = isset($_POST['unit']) ? mysqli_real_escape_string($conn, $_POST['unit']) : '';
$ePublishingDateTime = isset($_POST['ePublishingDateTime']) ? mysqli_real_escape_string($conn, $_POST['ePublishingDateTime']) : '';
$startDatetime = isset($_POST['startDatetime']) ? mysqli_real_escape_string($conn, $_POST['startDatetime']) : '';
$endDatetime = isset($_POST['endDatetime']) ? mysqli_real_escape_string($conn, $_POST['endDatetime']) : '';
$insStartdatetime = isset($_POST['insStartdatetime']) ? mysqli_real_escape_string($conn, $_POST['insStartdatetime']) : '';
$insEnddatetime = isset($_POST['insEnddatetime']) ? mysqli_real_escape_string($conn, $_POST['insEnddatetime']) : '';
$emdType = isset($_POST['emdType']) ? mysqli_real_escape_string($conn, $_POST['emdType']) : '';
$emdAmt = isset($_POST['emdAmt']) ? mysqli_real_escape_string($conn, $_POST['emdAmt']) : '';
$companyName = isset($_POST['companyName']) ? mysqli_real_escape_string($conn, $_POST['companyName']) : '';
$location = isset($_POST['location']) ? mysqli_real_escape_string($conn, $_POST['location']) : '';
$street = isset($_POST['street']) ? mysqli_real_escape_string($conn, $_POST['street']) : '';
$city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) : '';
$telephone = isset($_POST['telephone']) ? mysqli_real_escape_string($conn, $_POST['telephone']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
$contactPerson = isset($_POST['contactPerson']) ? mysqli_real_escape_string($conn, $_POST['contactPerson']) : '';


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

// $value = $fname2;
// $array = unserialize($value);
// $filename = $array[0];


    $sql = "UPDATE auction SET 
                category = '$category',
                infoId = '$infoId',
                ownership = '$ownership',
                aucLocation = '$aucLocation',
                sector = '$sector',
                aucNumber = '$aucNumber',
                aucDescription = '$aucDescription',
                aucValue = '$aucValue',
                aucSource = '$aucSource',
                material = '$material',
                quantity = '$value',
                ePublishingDateTime = '$ePublishingDateTime',
                startDatetime = '$startDatetime',
                endDatetime = '$endDatetime',
                insStartdatetime = '$insStartdatetime',
                insEnddatetime = '$insEnddatetime',
                emdType = '$emdType',
                emdAmt = '$emdAmt',
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
       echo $quantity;
        // echo $filename;
        // die;
        ?>
        <!-- <script>
            alert("Auction Updated Successfully!");
            window.location.replace("./auctions.php");
        </script> -->
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

