<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
    $categoryName = isset($_POST['categoryName']) ? mysqli_real_escape_string($conn, $_POST['categoryName']) : '';
    $subCategory = isset($_POST['subCategory']) ? mysqli_real_escape_string($conn, $_POST['subCategory']) : '';
  
    $sql = "UPDATE category SET
        categoryName = '$categoryName',
        subCategory ='$subCategory'
        WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("Category updated Successfully!");
            window.location.replace("./editCatlist.php");
        </script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

