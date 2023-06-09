<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $metal = isset($_POST['metal']) ? mysqli_real_escape_string($conn, $_POST['metal']) : '';
    $scrap_metal = isset($_POST['scrap_metal']) ? mysqli_real_escape_string($conn, $_POST['scrap_metal']) : '';
    $price = isset($_POST['price']) ? mysqli_real_escape_string($conn, $_POST['price']) : '';
    $timestamp = isset($_POST['timestamp']) ? mysqli_real_escape_string($conn, $_POST['timestamp']) : '';
    
  
    $sql = "UPDATE metal SET
        metal = '$metal',
        scrap_metal ='$scrap_metal',
        price = '$price',
        timestamp = '$timestamp'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Metal Price updated Successfully!");
            window.location.replace("./editMetlist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

