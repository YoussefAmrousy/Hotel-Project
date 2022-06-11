<?php
// $response = [];
// require_once 'dbconnection.php';
// $email = $_POST['email'];
// $emailFind = "SELECT * FROM users WHERE Email = ".$email;
// $resultEmail = mysqli_query($conn, $emailFind);
// if ($resultEmail->num_rows > 0) {
//     $response["success"] = true;
// }
// else {
//     $response["success"] = false;
// }
// echo json_encode($response);
require_once 'dbconnection.php';
$id = $_POST['email'];
$sql = "DELETE FROM staff WHERE Email = ".$id;
$result = mysqli_query($conn, $sql);
http_response_code(200);
?>