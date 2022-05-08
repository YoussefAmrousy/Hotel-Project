<html>
	<head><title>Sign Up</title></head>
	<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Submit'])){ //check if form was submitted
    $sql="select * from clients where Email = '".$_POST["Email"]."'";
	$result = mysqli_query($conn, $sql);
/* 	$sqlID = "select * from users where NationID = '".$_POST['Nationalid']."'";
	$resultID = mysqli_fetch_array($conn, $sqlID); */
	if(empty($_POST['Fname']) || empty($_POST['Lname']) || empty($_POST['Email']) || empty($_POST['Password']) || empty($_POST['ConfirmPassword']) ||empty($_POST['Address']) || empty($_POST['Profilepic']) || empty($_POST['Nationalid']) || empty($_POST['NoOfGuests']))
	{
		echo "<script>
		alert('Please Fill all of the required fields')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}		
	else if ($row = mysqli_fetch_array($result)) {
		echo "<script>
		alert('This Email is already taken, try another one')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	/* else if ($row1 = mysqli_fetch_array($resultID)) { // Not Working
		echo "<script>
		alert('There is already an account created with this National ID')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	} */
	else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['Fname'])) {
		echo "<script>
		alert('Only letters and white space allowed')
		</script>";
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['Lname'])) {
		echo "<script>
		alert('Only letters and white space allowed')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if ($_POST['Password'] !== $_POST['ConfirmPassword']) {
		echo "<script>
		alert('Those passwords doesn\'t match')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if (strlen($_POST['Password']) < 5) {
		echo "<script>
		alert('Password length should be at least 5 characters')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];

	}
	else if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
		echo "<script>
		alert('Invalid Email Address')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if (strlen($_POST['Nationalid']) != 14) {
		echo "<script>
		alert('Invalid National ID number')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if (!is_numeric($_POST['Nationalid'])) {
		echo "<script>
		alert('Enter a valid National ID')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
	}
	else if ($_POST['NoOfGuests'] > 4) {
		echo "<script>
		alert('Maximum number of Guests is 4')
		</script>";
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Address'] = $_POST['Address'];
		$_SESSION['Nationalid'] = $_POST['Nationalid'];
	}
	else
	{
		session_unset();
		$_SESSION['Fname'] = $_POST['Fname'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
		$sql="insert into clients(FirstName,LastName,Email,Password,Address,profile,NationID) values('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['Address']."', '".$_POST['Profilepic']."', '".$_POST['Nationalid']."')";
		$result=mysqli_query($conn,$sql);
		$idnum = "select ID from clients where FirstName = '".$_POST['Fname']."'";
		$idresult = mysqli_query($conn, $idnum);
		if ($idresult->num_rows > 0) {
			while($row = $idresult->fetch_assoc()) {
				$_SESSION['ID'] = $row['ID'];
			}
		}
		if($result)	{
			if ($_POST['NoOfGuests'] > 0) {
				header("Location:Guests.php");
			}
			else {
				header("Location:home.php");
			}
		}
	}
}
?>

<?php include "home.php";?>
        <h1>Sign Up</h1>
        <h2>* Required fields</h2>
        <form action="" method="post">
            <h3>Personal Information</h3>
            First Name:*<br>
            <input type="text" name="Fname" placeholder="Enter First Name" value="<?php if (isset($_SESSION['Fname']) && !empty($_SESSION['Fname'])) echo $_SESSION['Fname']; ?>"><br> 
            Last Name:* <br>
            <input type="text" name="Lname" placeholder="Enter Last Name" value="<?php if (isset($_SESSION['Lname']) && !empty($_SESSION['Lname'])) echo $_SESSION['Lname']; ?>"><br> 
            Email:*<br>
            <input type="text" name="Email" id="Email" placeholder="Enter Email Address" value="<?php if (isset($_SESSION['Email']) && !empty($_SESSION['Email'])) echo $_SESSION['Email']; ?>"><br>
            Address:*<br>
            <input type="text" name="Address" placeholder="Enter your address" value="<?php if (isset($_SESSION['Address']) && !empty($_SESSION['Address'])) echo $_SESSION['Address']; ?>"><br>
            Personal Picture:*<br>
            <input type="file" name="Profilepic" value="<?php if (isset($_SESSION['Profilepic']) && !empty($_SESSION['Profilepic'])) echo $_SESSION['Profilepic']; ?>"><br>
            National ID:*<br>
            <input type="text" name="Nationalid" placeholder="Enter your National ID (14 digits)" value="<?php if (isset($_SESSION['Nationalid']) && !empty($_SESSION['Nationalid'])) echo $_SESSION['Nationalid']; ?>"><br>
            Number Of guests:<br>
            <input type="text" name="NoOfGuests" id="NoOfGuests" placeholder="Maximum 4 guests" value="<?php if (isset($_SESSION['NoOfGuests']) && !empty($_SESSION['NoOfGuests'])) echo $_SESSION['NoOfGuests']; ?>"><br>
            Password:*<br>
            <input type="Password" name="Password" placeholder="Minimum 5 characters"><br>
            Confrim Password:*<br>
            <input type="Password" name="ConfirmPassword" placeholder="Confirm Password"><br><br>
            <input type="submit" value="Submit" name="Submit">
            <input type="reset">
        </form>
</body>
</html>