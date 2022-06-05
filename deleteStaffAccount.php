<?php
require_once 'dbconnection.php';
if( $_SERVER['REQUEST_METHOD']=='POST' && !empty( $_POST['id'] ) ) {
    $sql = "DELETE FROM staff WHERE StaffID = ".$_POST['id'];
    $result = mysqli_query($conn, $sql);
    http_response_code(200);
    exit($result==1 ? 'Success' : 'Failed');
}
?>