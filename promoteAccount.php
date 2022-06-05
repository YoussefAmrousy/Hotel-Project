<?php
header("HTTP/1.1 403 Forbidden");
require_once 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD']=='POST' && !empty( $_POST['id']))  {
    $code='QA';
    $role='Receptionist';
    $sql='update `staff` set `role`=? where `staffid`=? and `role` = ?';
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('sss', $code, $_POST['id'], $role );
    $stmt->execute();
    $result=$stmt->affected_rows;
    $stmt->close();
    $conn->close();
    http_response_code(200);
    exit($result==1 ? 'Success' : 'Failed');
    }
?>