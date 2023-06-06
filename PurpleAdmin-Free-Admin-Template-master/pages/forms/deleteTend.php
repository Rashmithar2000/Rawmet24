<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';

    // Build the query
    $sql = "DELETE FROM tenders WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Tender Deleted Successfully!");
            window.location.replace("./editTendlist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
