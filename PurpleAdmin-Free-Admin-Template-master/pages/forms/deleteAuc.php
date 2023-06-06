<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $id = mysqli_real_escape_string($conn, $id);

    $sql = "DELETE FROM auction WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        // echo $id;
        // die;
        ?>
        <script>
            alert("Auction Deleted Successfully!");
            window.location.replace("./editAuclist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
