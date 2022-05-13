<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
	<body>
<?php
session_start();
require_once 'dbConnection.php';

if(isset($_POST['Submit'])){ //check if form was submitted
	$name = "select * from clients where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$nameresult = mysqli_query($conn, $sql);
	$sql="select * from clients where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);
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
		echo "<script>
		alert('Invalid Email or Password ')
		</script>";
	}
}
?>

<?php include "home.php";?>

<br><br>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="Email" value="<?php if (isset($_COOKIE['Email']) && !empty($_COOKIE['Email'])) echo $_COOKIE['Email']; ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="Password" value="<?php if (isset($_COOKIE['Password']) && !empty($_COOKIE['Password'])) echo $_COOKIE['Password']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="Submit">Log in</button>
        </div>
        <div class="clearfix">
		<p class="text-center"><a href="SignUp.php">Create an Account</a></p>
        </div>        
    </form>
    
</div>
</body>
</html>