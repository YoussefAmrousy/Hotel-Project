<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pending Accounts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'adminHome.php'; ?>
<br><br><br>
<h2>Pending Accounts</h2>
<?php
require_once "dbconnection.php";
if (!isset($_SESSION['Role'])) {
    echo "<script>
    window.location.href ='home.php';
    alert('You don\'t have access to this page')
    </script>";
    }
$sql = "SELECT * FROM users WHERE Pending != 'No'";
$result = mysqli_query($conn, $sql);
?>
<div class="container mt-3">
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>NationID</th>
        <th>Request</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        echo "<th scope='row'>".$id."</th>
        <td>".$row['FirstName']."</td>
        <td>".$row['LastName']."</td>
        <td>".$row['Email']."</td>
        <td>".$row['Password']."</td>
        <td>".$row['NationID']."</td>
        <td><button type='button' class='acceptRequest' id='".$id."' value='acceptRequest'>Accept</button></td>
        </tr>";
        }
        ?>
    </tbody>
  </table>
</div>
<script>
$(".acceptRequest").click(function(){
    var id = $(this).attr('id');
    var btn = this;
    $.ajax({
        url: "acceptRequest.php",
        type: "POST",
        data: {id:id},
        success: function(res) {
            alert("Account is now in use");
            $(btn).closest('tr').remove();
        },
        error: function(res) {
            alert("Unable to do this action");
        }
    });
    })
</script>
</body>
</html>