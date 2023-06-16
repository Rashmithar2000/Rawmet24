<?php
include "connect.php";

session_start();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$conPassword = isset($_POST['conPassword']) ? $_POST['conPassword'] : '';

if ($password !== $conPassword) {
    ?>
    <script>
    alert("Password and Confirm Password do not match!");
    window.location.replace("./signup.html");
</script>
   
     <?php
   
    exit;
}

$hashedPassword = base64_encode($password);



if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO buyer_dashboard (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";


if ($con->query($sql) === TRUE) { ?>
    <script>
    alert("SignUp Succesfully!");
    window.location.replace("./signin.html");
</script>
    <!-- header("location: signin.html"); -->
     <?php
    session_close();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();
?>
