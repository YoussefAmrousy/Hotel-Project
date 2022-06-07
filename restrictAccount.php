<?php
$id = $_POST['id'];
$reason = $_POST['reason'];
$sql = "SELECT * FROM staff WHERE StaffID = ".$id;
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    if ($row['Enabled'] == 'True') {
        $updateResult = "UPDATE staff SET Enabled = 'False', Comments = ".$reason;
        $resultUpdate = mysqli_query($conn, $updateResult);
    }
    else {
        $updateResult = "UPDATE staff SET Enabled = 'False', Comments = ".$reason;
        $resultUpdate = mysqli_query($conn, $updateResult);
    }
}
?>