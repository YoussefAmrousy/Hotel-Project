<?php
require_once 'dbconnection.php';
$roomNo = $_POST['roomNo'];
$sql = "DELETE FROM rooms WHERE RoomNumber = ".$roomNo;
$result = mysqli_query($conn, $sql);
http_response_code(200);
?>