<?php
    session_unset();
	setcookie("Email", "", time() - 10000);
	setcookie("Password", "", time() - 10000);
	$firstname = $_POST['Fname'];
	$lastname = $_POST['Lname'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$nationid = $_POST['Nationalid'];
	$sql = "INSERT INTO users(FirstName, LastName, Email, Password, NationID) values('".$firstname."','".$lastname."','".$email."','".$password."','".$nationid."')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>
		alert('Registered Successfully, Please wait until the recepionist accept your request');
		window.location.href ='Login.php';
		</script>";
	}
    ?>