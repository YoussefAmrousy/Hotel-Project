<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Comments</title>
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
<h2>Comments</h2>
<?php
require_once "dbconnection.php";
if (!isset($_SESSION['Role'])) {
    echo "<script>
    window.location.href ='home.php';
    alert('You don\'t have access to this page')
    </script>";
    }
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
?>
<div class="container mt-3">
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quality</th>
        <th>Suggestion</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row = $result->fetch_assoc()) {
        echo "<td>".$row['Name']."</td>
        <td>".$row['Quality']."</td>
        <td>".$row['Suggestions']."</td>
        </tr>";
        }
        ?>
    </tbody>
  </table>
</div>
</body>
</html>