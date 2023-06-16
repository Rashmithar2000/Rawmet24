<?php
session_start();
include "connect.php";

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$epassword = base64_encode($password);

$sql = "SELECT * FROM buyer_dashboard WHERE email = '$email' AND password = '$epassword'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $subscription = $row['subscription'];
    $name = $row['name'];

    $_SESSION['sub'] = $subscription;   
    $_SESSION['buyer_name'] = $name;
    ?>
    <script>
    alert("Login Successfull!");
    window.location.replace("home.php");
    </script>
    <?php
 
} else {
    ?>
    <script>
    alert("E-mail and Password do not match!");
    window.location.replace("./signin.html");
    </script>
    <?php
}

$con->close();
?>
