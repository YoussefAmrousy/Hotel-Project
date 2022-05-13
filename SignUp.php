<html>
	<head><title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
</style>
</head>
	<body>
<?php
session_start();

require_once 'dbConnection.php';

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
		$_SESSION['Lname'] = $_POST['Lname'];
		$_SESSION['NoOfGuests'] = $_POST['NoOfGuests'];
		$sql="insert into clients(FirstName,LastName,Email,Password,Address,profile,NationID) values('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['Address']."', '".$imgContent."', '".$_POST['Nationalid']."')";
		$result=mysqli_query($conn,$sql);
		$idnum = "select ID from clients where FirstName = '".$_POST['Fname']."'";
		$idresult = mysqli_query($conn, $idnum);
		if ($idresult->num_rows > 0) {
			while($row = $idresult->fetch_assoc()) {
				$_SESSION['ID'] = $row['ID'];
			}
		}
		if($result)	{
			if ($_POST['NoOfGuests'] == "#") {
				$_SESSION['NoOfGuests'] = 0;
				header("Location:home.php");
			}
			else {
				header("Location:Guests.php");
			}
		}
	}
}
?>

<?php include "home.php";?>
        <!-- <h1>Sign Up</h1>
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
            <input type="file" name="Profilepic"><br>
            National ID:*<br>
            <input type="text" name="Nationalid" placeholder="Enter your National ID (14 digits)" value="<?php if (isset($_SESSION['Nationalid']) && !empty($_SESSION['Nationalid'])) echo $_SESSION['Nationalid']; ?>"><br>
            Number Of guests (Maxium 4 Guests):<br>
            <input type="text" name="NoOfGuests" id="NoOfGuests" placeholder="Enter # For 0 guests" value="<?php if (isset($_SESSION['NoOfGuests']) && !empty($_SESSION['NoOfGuests'])) echo $_SESSION['NoOfGuests']; ?>"><br>
            Password:*<br>
            <input type="Password" name="Password" placeholder="Minimum 5 characters"><br>
            Confrim Password:*<br>
            <input type="Password" name="ConfirmPassword" placeholder="Confirm Password"><br><br>
            <input type="submit" value="Submit" name="Submit">
            <input type="reset">
        </form> -->
		<br><br>
		<div class="signup-form">
    <form action="" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="Fname" placeholder="First Name" required="required" value="<?php if (isset($_SESSION['Fname']) && !empty($_SESSION['Fname'])) echo $_SESSION['Fname']; ?>"></div>
				<div class="col"><input type="text" class="form-control" name="Lname" placeholder="Last Name" required="required" value="<?php if (isset($_SESSION['Lname']) && !empty($_SESSION['Lname'])) echo $_SESSION['Lname']; ?>"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required="required" value="<?php if (isset($_SESSION['Email']) && !empty($_SESSION['Email'])) echo $_SESSION['Email']; ?>" >
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="Address" placeholder="Enter your Address" required="required" value="<?php if (isset($_SESSION['Address']) && !empty($_SESSION['Address'])) echo $_SESSION['Address']; ?>">
        </div>
		<div class="form-group">
            <input type="file"  name="Profilepic" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="Nationalid" placeholder="14 Digit National ID" required="required" value="<?php if (isset($_SESSION['Nationalid']) && !empty($_SESSION['Nationalid'])) echo $_SESSION['Nationalid']; ?>">
        </div>
		Number of Guests(Max 4 Guests):
		<div class="form-group">
		<input type="text" class="form-control" name="NoOfGuests" id="NoOfGuests" placeholder="Enter # For 0 guests" value="<?php if (isset($_SESSION['NoOfGuests']) && !empty($_SESSION['NoOfGuests'])) echo $_SESSION['NoOfGuests']; ?>">
  </div>
		<div class="form-group">
            <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" name="Submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center"><a href="Login.php">Already have an account?</a></div>
</div>
</body>
</html>