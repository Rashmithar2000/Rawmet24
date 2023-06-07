<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $infoId = isset($_POST['infoId']) ? mysqli_real_escape_string($conn, $_POST['infoId']) : '';
    $showName = isset($_POST['showName']) ? mysqli_real_escape_string($conn, $_POST['showName']) : '';
    $dateTime = isset($_POST['dateTime']) ? mysqli_real_escape_string($conn, $_POST['dateTime']) : '';
    $profile = isset($_POST['profile']) ? mysqli_real_escape_string($conn, $_POST['profile']) : '';
    $organizedBy = isset($_POST['organizedBy']) ? mysqli_real_escape_string($conn, $_POST['organizedBy']) : '';
    $organizedAdd = isset($_POST['organizedAdd']) ? mysqli_real_escape_string($conn, $_POST['organizedAdd']) : '';
    $venue = isset($_POST['venue']) ? mysqli_real_escape_string($conn, $_POST['venue']) : '';
    $map = isset($_POST['map']) ? mysqli_real_escape_string($conn, $_POST['map']) : '';
  
    $sql = "UPDATE info_table SET
        infoId = '$infoId',
        showName ='$showName',
        dateTime = '$dateTime',
        profile = '$profile',
        organizedBy = '$organizedBy',
        organizedAdd = '$organizedAdd',
        venue = '$venue',
        map = '$map'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Information updated Successfully!");
            window.location.replace("./editInfolist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

