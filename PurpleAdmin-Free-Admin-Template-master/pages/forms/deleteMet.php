<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $id = mysqli_real_escape_string($conn, $id);

    $sql = "DELETE FROM metal WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        // echo $id;
        // die;
        ?>
        <script>
            alert("Metal Deleted Successfully!");
            window.location.replace("./editMetlist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
