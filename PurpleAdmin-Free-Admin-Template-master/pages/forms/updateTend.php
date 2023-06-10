<?php
include_once "connect.php";
// $id= $_GET['updateid'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
    $infoId = isset($_POST['infoId']) ? mysqli_real_escape_string($conn, $_POST['infoId']) : '';
    $ownership = isset($_POST['ownership']) ? mysqli_real_escape_string($conn, $_POST['ownership']) : '';
    $tenderLocation = isset($_POST['tenderLocation']) ? mysqli_real_escape_string($conn, $_POST['tenderLocation']) : '';
    $sector = isset($_POST['sector']) ? mysqli_real_escape_string($conn, $_POST['sector']) : '';
    $tenderNumber = isset($_POST['tenderNumber']) ? mysqli_real_escape_string($conn, $_POST['tenderNumber']) : '';
    $tenderDesc = isset($_POST['tenderDesc']) ? mysqli_real_escape_string($conn, $_POST['tenderDesc']) : '';
    $material = isset($_POST['material']) ? mysqli_real_escape_string($conn, $_POST['material']) : '';
    $matDesc = isset($_POST['matDesc']) ? mysqli_real_escape_string($conn, $_POST['matDesc']) : '';
    $quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($conn, $_POST['quantity']) : '';
    $unit = isset($_POST['unit']) ? mysqli_real_escape_string($conn, $_POST['unit']) : '';
    $value = (isset($_POST['quantity']) ? mysqli_real_escape_string($conn, $_POST['quantity']) : '') . ' ' . (isset($_POST['unit']) ? mysqli_real_escape_string($conn, $_POST['unit']) : '');
    $publishingDatetime = isset($_POST['publishingDatetime']) ? mysqli_real_escape_string($conn, $_POST['publishingDatetime']) : '';
    $startDatetime = isset($_POST['startDatetime']) ? mysqli_real_escape_string($conn, $_POST['startDatetime']) : '';
    $endDatetime = isset($_POST['endDatetime']) ? mysqli_real_escape_string($conn, $_POST['endDatetime']) : '';
    $emdType = isset($_POST['emdType']) ? mysqli_real_escape_string($conn, $_POST['emdType']) : '';
    $emdAmt = isset($_POST['emdAmt']) ? mysqli_real_escape_string($conn, $_POST['emdAmt']) : '';
    $tenderValue = isset($_POST['tenderValue']) ? mysqli_real_escape_string($conn, $_POST['tenderValue']) : '';
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

    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $existingfile = isset($_POST['existingfile']) ? $_POST['existingfile'] : '';

    //print_r($existingfile); die;
    // ... File upload code ...

    //=======================================================upload ====================
 
   $fname=$_FILES["img"]["name"];
   //print_r($fname); die;
   $fname2=array();
   if($fname[0]!=''){

   //print_r($fname);die;
   //$fname2="";
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
           $fname2 = $fname;    
       }

       $ctr++;
   }
   }
//print_r($fname2); die;

   //=========================================================================================
   $dname=$_FILES["filename2"]["name"];
   
   $dname2=array();
    if($dname[0]!=''){
 
    //print_r($fname);die;
    //$fname2="";
    $ctr=0;
   foreach($dname as $fn){
       $targetDir = "uploads/"; // Directory to store uploaded images
       $targetFile = $targetDir . basename($_FILES["filename2"]["name"][$ctr]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
      

       if ($imageFileType != "pdf" ) {
           echo "Error: Only pdf files are allowed.";
           $uploadOk = 0;
       }
       if ($uploadOk == 1) {
           move_uploaded_file($_FILES["filename2"]["tmp_name"][$ctr], $targetFile);  
           $dname2 = $dname;    
       }

       $ctr++;
   }
}


   $value = $quantity . ' ' . $unit;
   if(!empty($fname2) || !empty($image)){
    $newfname2 = array_merge($fname2, $image);
   }
   if(!empty($dname2) || !empty($existingfile)){
    $newdname2 = array_merge($dname2, $existingfile);
   }
   $fname2= serialize($newfname2);
   $dname2= serialize($newdname2);

    $sql = "UPDATE tenders SET 
        category = '$category',
        infoId = '$infoId',
        ownership = '$ownership',
        tenderLocation = '$tenderLocation',
        sector = '$sector',
        tenderNumber = '$tenderNumber',
        tenderDesc = '$tenderDesc',
        material = '$material',
        matDesc= '$matDesc',
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
            window.location.replace("./editTendlist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}




  
?>

