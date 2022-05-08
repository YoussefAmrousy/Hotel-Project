<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ //check if form was submitted
	$sql="select * from users where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);		
	if($row=mysqli_fetch_array($result))	
	{
		$_SESSION["ID"]=$row[0];
		$_SESSION["Fname"]=$row["FirstName"];
	    $_SESSION["Email"]=$row["Email"];
	    $_SESSION["Password"]=$row["Password"];
	    $_SESSION["Address"]=$row["Address"];
		header("Location:home.php");
		setcookie("Email", $_SESSION['Email'], time() + (86400*365), "/");
		setcookie("Password", $_SESSION['Password'], time() + (86400*365), "/");
	}
	else	
	{
		echo "Invalid Email or Password";
	}
}
?>

<?php include "home.php";?>

<h1>Login</h1>
<form action="" method="post">
	Email:<br>
	<!-- cookie not working> -->
	<input type="text" name="Email" value="<?php if (isset($_COOKIE['Email']) && !empty($_COOKIE['Email'])) echo $_COOKIE['Email']; ?>">  <br>
	Password:<br>
	<input type="Password" name="Password" value="<?php if (isset($_COOKIE['Password']) && !empty($_COOKIE['Password'])) echo $_COOKIE['Password']; ?>"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
</form>