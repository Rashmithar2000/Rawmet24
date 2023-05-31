<?php
session_start();

$name = $_POST['name'];
$password = $_POST['password'];

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "newpassword";
$dbName = "registration_db";
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin_login WHERE username = '$name' and password='$password' ";
$result = $conn->query($sql);
//print_r($result);die;
if ($result->num_rows == 1) {

    $_SESSION['name'] = $name;
    header("Location: /Rawmet24/PurpleAdmin-Free-Admin-Template-master/index.php");
    session_close();
} else {
?>
<script>
    alert("Invalid username or Passsword!");
    window.location.replace("./login.html");
</script>
<?php
    
}

$conn->close();
?>
