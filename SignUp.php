<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";

$pwdMsg = "Minimum 5 characters";
$nameErr = $emailErr = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Submit'])){ //check if form was submitted
    $sql="select * from users where Email = '".$_POST["Email"]."'";
	$result = mysqli_query($conn, $sql);		
	if ( $row=mysqli_fetch_array($result) ) {
		echo "<script>
		alert('This email is taken, Try another one')
		</script>";	
	}
	else if(empty($_POST['Name']) || empty($_POST['Email']) || empty($_POST['Password']) || empty($_POST['ConfirmPassword']) ||empty($_POST['Address']) || empty($_POST['Profilepic']) || empty($_POST['Nationalid']))
	{
		echo "<script>
		alert('Please Fill all of the required fields')
		</script>";
	}
	else if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['Name'])) {
		$nameErr = "Only letters and white space allowed";
	}
	else if ($_POST['Password'] !== $_POST['ConfirmPassword'] || strlen($_POST['Password']) < 5) {
		echo "<script>
		alert('Those passwords doesn't match')
		</script>";
	}
	else if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid Email Address";
	}
	else
	{
		$sql="insert into users(Name,Email,Password,Address,profile,NationID) values('".$_POST['Name']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['Address']."', '".$_POST['Profilepic']."', '".$_POST['Nationalid']."')";
		$result=mysqli_query($conn,$sql);
		if($result)	
		{
			header("Location:home.php");
		}
		else
		{
			echo $sql;
		}
	}
}
?>

<?php include "menu.php";?>
<h1>SignUp</h1>
<h2>* Required fields</h2>
<form action="" method="post">
	Name:*<br>
	<input type="text" name="Name"> <?php echo $nameErr ?><br> 
    Email:*<br>
	<input type="text" name="Email"> <?php echo $emailErr ?><br>
	Address:*<br>
	<input type="text" name="Address"><br>
	Personal Picture:*<br>
	<input type="file" name="Profilepic"><br>
	National ID:*<br>
	<input type="file" name="Nationalid"><br>
	Password:*<br>
	<input type="Password" name="Password"> <?php echo $pwdMsg ?><br>
	Confrim Password:*<br>
	<input type="Password" name="ConfirmPassword"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
</form>