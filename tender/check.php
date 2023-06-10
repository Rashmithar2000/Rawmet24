<?php

include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = isset($_POST['id']) ? mysqli_real_escape_string($con, $_POST['id']) : '';

    $sql = "SELECT * FROM exclusive_deals WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $status = $row['status'];

            if ($status == 1) {
                ?> <script>
                alert("This exclusive deal is already blocked.");
                window.history.go(-1);
            </script>
            <?php
            
            } elseif ($status == 0) {
                $updateSql = "UPDATE exclusive_deals SET status = 1 WHERE id = '$id'";
                if (mysqli_query($con, $updateSql)) {
                    ?> <script>
                    alert("Exclusive deal blocked successfully!");
                    window.history.go(-1);
                </script>
                <?php
                   
                } else {
                    echo "Error updating status: " . mysqli_error($con);
                }
            }
        } else {
            echo "No exclusive deal found with the given ID.";
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
