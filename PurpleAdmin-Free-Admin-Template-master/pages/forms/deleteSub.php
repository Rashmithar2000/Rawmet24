<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';

  
    $sql = "DELETE FROM buyer_dashboard WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Subscriber Data Deleted Successfully!");
            window.location.replace("./editSublist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
