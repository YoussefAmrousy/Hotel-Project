<?php
require_once 'dbconnection.php';
$id = $_POST['id'];
$sql = "DELETE FROM staff WHERE StaffID = ".$id;
$result = mysqli_query($conn, $sql);
?>