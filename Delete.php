<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";
session_start();

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="delete from users where Email ='".$_SESSION["Email"]."'";
$result=mysqli_query($conn,$sql);
if($result)
{
	session_unset();
	header("Location:home.php");
}
else
{
	echo $sql;
}
		
?>