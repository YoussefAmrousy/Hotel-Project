<?php
require_once 'dbconnection.php';
$email = trim($_POST['email']);
$emailFind = "SELECT * FROM users WHERE Email = '".$email."'";
$resultEmail = mysqli_query($conn, $emailFind);
if ($resultEmail) {
    return 1;
}
else {
    return 0;
}
?>