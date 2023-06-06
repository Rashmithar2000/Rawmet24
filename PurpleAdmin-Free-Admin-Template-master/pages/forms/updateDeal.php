<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
    $infoId = isset($_POST['infoId']) ? mysqli_real_escape_string($conn, $_POST['infoId']) : '';
    $ir = isset($_POST['ir']) ? mysqli_real_escape_string($conn, $_POST['ir']) : '';
    $fe = isset($_POST['fe']) ? mysqli_real_escape_string($conn, $_POST['fe']) : '';
    $quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($conn, $_POST['quantity']) : '';
    $unit = isset($_POST['unit']) ? mysqli_real_escape_string($conn, $_POST['unit']) : '';
    $dealValue = isset($_POST['dealValue']) ? mysqli_real_escape_string($conn, $_POST['dealValue']) : '';
    $dealDatetime = isset($_POST['dealDatetime']) ? mysqli_real_escape_string($conn, $_POST['dealDatetime']) : '';
    $docCreatedby = isset($_POST['docCreatedby']) ? mysqli_real_escape_string($conn, $_POST['docCreatedby']) : '';
    $location = isset($_POST['location']) ? mysqli_real_escape_string($conn, $_POST['location']) : '';
    $industrialArea = isset($_POST['industrialArea']) ? mysqli_real_escape_string($conn, $_POST['industrialArea']) : '';
    $companyName = isset($_POST['companyName']) ? mysqli_real_escape_string($conn, $_POST['companyName']) : '';
    $contactPerson = isset($_POST['contactPerson']) ? mysqli_real_escape_string($conn, $_POST['contactPerson']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : '';
    $city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) : '';
    $state = isset($_POST['state']) ? mysqli_real_escape_string($conn, $_POST['state']) : '';
    $contactNumber = isset($_POST['contactNumber']) ? mysqli_real_escape_string($conn, $_POST['contactNumber']) : '';
    $whatsappNumber = isset($_POST['whatsappNumber']) ? mysqli_real_escape_string($conn, $_POST['whatsappNumber']) : '';
    $gstin = isset($_POST['gstin']) ? mysqli_real_escape_string($conn, $_POST['gstin']) : '';
    $orderType = isset($_POST['orderType']) ? mysqli_real_escape_string($conn, $_POST['orderType']) : '';
    $material = isset($_POST['material']) ? mysqli_real_escape_string($conn, $_POST['material']) : '';
    $specification = isset($_POST['specification']) ? mysqli_real_escape_string($conn, $_POST['specification']) : '';
    $dor = isset($_POST['dor']) ? mysqli_real_escape_string($conn, $_POST['dor']) : '';
    $expQuotation = isset($_POST['expQuotation']) ? mysqli_real_escape_string($conn, $_POST['expQuotation']) : '';
    

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
    $sql = "UPDATE deals SET
        category = '$category',
        infoId = '$infoId',
        ir = '$ir',
        fe = '$fe',
        quantity = '$value',
        dealValue = '$dealValue',
        dealDatetime = '$dealDatetime',
        docCreatedby = '$docCreatedby',
        location = '$location',
        industrialArea = '$industrialArea',
        companyName = '$companyName',
        contactPerson = '$contactPerson',
        email = '$email',
        address = '$address',
        city = '$city',
        state = '$state',
        contactNumber = '$contactNumber',
        whatsappNumber = '$whatsappNumber',
        gstin = '$gstin',
        orderType = '$orderType',
        material = '$material',
        specification = '$specification',
        dor = '$dor',
        expQuotation = '$expQuotation'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {

        ?>
        <script>
            alert("Deals Updated Successfully!");
            window.location.replace("./deals.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
