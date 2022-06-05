<?php
require_once 'dbconnection.php';
if (isset($_GET['id'])) {
    $roomNo = $_GET['id'];
    $sql = "DELETE FROM rooms WHERE RoomNumber=".$roomNo;
    $result = mysqli_query($conn, $sql);
    echo 1;
    exit;
}
echo 0;
exit;
?>