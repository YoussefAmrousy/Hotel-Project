<?php
require_once 'dbconnection.php';
$id = $_POST['id'];
$sql = "UPDATE users SET Pending='No' WHERE ID=".$id;
$result = mysqli_query($conn, $sql);
http_response_code(200);
?>