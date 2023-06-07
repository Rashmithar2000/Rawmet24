<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $subscription = isset($_POST['subscription']) ? mysqli_real_escape_string($conn, $_POST['subscription']) : '';
    $amount = isset($_POST['amount']) ? mysqli_real_escape_string($conn, $_POST['amount']) : '';
    $fromDate = isset($_POST['fromDate']) ? mysqli_real_escape_string($conn, $_POST['fromDate']) : '';
    $toDate = isset($_POST['toDate']) ? mysqli_real_escape_string($conn, $_POST['toDate']) : '';
  
  
    $sql = "UPDATE buyer_dashboard SET
        name = '$name',
        email ='$email',
        subscription = '$subscription',
        amount = '$amount',
        fromDate = '$fromDate',
        toDate = '$toDate'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Subscriber Information updated Successfully!");
            window.location.replace("./editSublist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

