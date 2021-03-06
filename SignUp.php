<?php
if(session_id() == '') {
	session_start();
}
?>
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
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="icon" href="favicon.png">
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
body {
 background-image: url("beach.png");
 height: 100%;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}

#NationalIDError {
	color: red;
}
</style>
</head>
	<body>
		<?php include 'navbar.php'; ?>
		<br><br>
		<div class="signup-form">
    <form action="" method="post" name="register">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" id='Fname' name="Fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" id='Lname' name="Lname" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required="required">
        </div>
		Profile Picture:
		<div class="form-group">
            <input type="file"  name="Profilepic">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id='Nationalid' name="Nationalid" placeholder="Enter National ID (14 Digit)" minlength="14" maxlength="14" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" id='Password' name="Password" placeholder="Password" minlength="5" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" id='ConfirmPassword' name="ConfirmPassword" placeholder="Confirm Password" minlength="5" required="required">
        </div>        
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Reigster"></button>
        </div>
    </form>
	<div class="text-center"><a href="Login.php">Already have an account?</a></div>
</div>
<?php
require_once 'dbConnection.php';
require_once 'errorHandling.php';

if (isset($_SESSION['Email'])) {	
	echo "<script>
	window.location.href ='home.php';
	alert('You don\'t have access to this page')
	</script>";
	trigger_error("Already Logged In");
}

if (isset($_POST['submit'])) {
    	$sql="select * from users where Email = '".$_POST["Email"]."'";
        $result = mysqli_query($conn, $sql);
        if (!is_numeric($_POST['Nationalid'])) {
            echo "<script>
		    alert('Enter a valid National ID')
		    </script>";
            trigger_error("Invalid National ID");
        }
        else if ($result->num_rows > 0) {
		    echo "<script>
		    alert('This Email is already taken, choose another one')
		    </script>";
		    trigger_error("Email taken");
	    }
        else if ($_POST['Password'] !== $_POST['ConfirmPassword']) {
		    echo "<script>
		    alert('Those passwords doesn\'t match, please try again')
		    </script>";
            trigger_error("Wrong passwords");
        }
        else if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script>
		    alert('Invalid Email Address')
		    </script>";
            trigger_error("Password length");
        }
        else if (str_contains($_POST['Email'], "@grnd.com")) {
            echo "<script>
		    alert('You can\'t use this email domain, choose another email')
		    </script>";
            trigger_error("Wrong Email");
        }
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
        }
?>
<script>
	var idEror, confPass, passEror, emailEror;
	$("#Nationalid").keyup(function(){
		if(jQuery.isNumeric(this.value) == false || this.value.length != 14){
			$('#Nationalid').css('border-color', 'red');
			idEror = true;
    	}
		else {
			$('#Nationalid').css('border-color', 'green');
			idEror = false;
		}
	})
	$("#ConfirmPassword").keyup(function(){
		var password = document.getElementById("Password");
		if (this.value !== password.value) {
			$('#ConfirmPassword').css('border-color', 'red');
			confPass = true;
		}
		else {
			$('#ConfirmPassword').css('border-color', 'green');
			confPass = false;
		}
	})
	$("#Password").keyup(function(){
		var password = document.getElementById("Password");
		if (this.value.length < 5) {
			$('#Password').css('border-color', 'red');
			passEror = true;
		}
		else {
			$('#Password').css('border-color', 'green');
			passEror = false;
		}
	})
</script>
</body>
</html>