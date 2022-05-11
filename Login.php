<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
	<body>
<?php
session_start();
require_once 'dbConnection.php';

if(isset($_POST['Submit'])){ //check if form was submitted
	$sql="select * from clients where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);
	$name = "select * from clients where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$nameresult = mysqli_query($conn, $sql);
	if($row=mysqli_fetch_array($result))	
	{
		$_SESSION["ID"]= $row["ID"];
		$_SESSION["Fname"]= $row["FirstName"];
		$_SESSION["Lname"] = $row["LastName"];
	    $_SESSION["Email"]=$row["Email"];
		header("Location:home.php");
		setcookie("Email", $_SESSION['Email'], time() + (86400*365), "/");
		setcookie("Password", $_POST['Password'], time() + (86400*365), "/");
	}
	else {
		echo "Invalid Email or Password";
	}
}
?>

<?php include "home.php";?>

<h1>Login</h1>
<form action="" method="post">
	Email:<br>
	<input type="text" name="Email" value="<?php if (isset($_COOKIE['Email']) && !empty($_COOKIE['Email'])) echo $_COOKIE['Email']; ?>">  <br>
	Password:<br>
	<input type="Password" name="Password" value="<?php if (isset($_COOKIE['Password']) && !empty($_COOKIE['Password'])) echo $_COOKIE['Password']; ?>"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
</form>
</body>
</html>