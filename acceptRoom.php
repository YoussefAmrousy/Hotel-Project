<?php
require_once 'dbconnection.php';
$roomNum = $_POST['roomNo'];
$sql = "UPDATE rooms SET Pending='No' WHERE RoomNumber=".$roomNum;
$result = mysqli_query($conn, $sql);
http_response_code(200);
?>