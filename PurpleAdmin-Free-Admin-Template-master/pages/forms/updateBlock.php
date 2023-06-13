<?php
include_once "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    // Retrieve exclusive deal ID from the notification table
    $selectDealIdSql = "SELECT id FROM notification WHERE exclusiveDeal_id = $id";
    $dealIdResult = $conn->query($selectDealIdSql);

    if ($dealIdResult->num_rows > 0) {
        $dealIdRow = $dealIdResult->fetch_assoc();
        $notificationId = $dealIdRow['id'];
 
        // Update the status in the exclusive deals table
        $updateStatusSql = "UPDATE exclusive_deals SET status = 0 WHERE id = '$id' AND status = 1";

        if ($conn->query($updateStatusSql) === TRUE) {
            // Delete notification entry
            $deleteSql = "DELETE FROM notification WHERE id = '$notificationId'";

            if ($conn->query($deleteSql) === TRUE) {
                // Display alert box for successful unblocking and deletion
                echo '<script>alert("Exclusive deal unblocked and notification deleted successfully.");</script>';
               
                // Redirect to editblocklist page
                echo '<script>window.location.href = "editblocklist.php";</script>';
            } else {
                // Display alert box for error deleting
                echo '<script>alert("Error deleting notification entry: ' . $conn->error . '");</script>';
            }
        } else {
            // Display alert box for error updating
            echo '<script>alert("Error updating exclusive deals: ' . $conn->error . '");</script>';
        }
    } else {
        // Display alert box for exclusive deal ID not found
        echo '<script>alert("Exclusive deal ID not found in the notification table.");</script>';
    }
} else {
    // Display alert box for invalid request
    echo '<script>alert("Invalid request.");</script>';
}

$conn->close();
?>
