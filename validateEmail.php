<?php
require_once 'dbconnection.php';
$email = $_POST['email'];
$emailFind = "SELECT * FROM users WHERE Email = ".$email;
$resultEmail = mysqli_query($conn, $emailFind);
if ($resultEmail->num_rows > 0) {
    echo "true";
}
else {
    echo "false";
}
http_response_code(200);
exit();
?>