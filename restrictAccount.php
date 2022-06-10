<?php
require_once 'dbconnection.php';
$id = $_POST['id'];
$reason = $_POST['reason'];
$sql = "SELECT * FROM staff WHERE StaffID = ".$id;
$result = mysqli_query($conn, $sql);
// $updateResult = "UPDATE staff SET Enabled = 'False' WHERE StaffID = ".$id;
// $resultUpdate = mysqli_query($conn, $updateResult);

while ($row = mysqli_fetch_array($result)) {
    if ($row['Enabled'] == 'True') {
        $updateResult = "UPDATE staff SET Enabled = 'False', Comments = '".$reason."' WHERE StaffID = ".$id;
        $resultUpdate = mysqli_query($conn, $updateResult);
        http_response_code(200);
    }
    else {
        $updateResult = "UPDATE staff SET Enabled = 'True', Comments = '".$reason."' WHERE StaffID = ".$id;
        $resultUpdate = mysqli_query($conn, $updateResult);
        http_response_code(200);
    }
}
http_response_code(200);
?>