<html>	
	<body>			
		<?php
		if(isset($_SESSION['Name'])) 
		{
			//echo "Welcome ".$_SESSION['Name'];
			echo"<a href='home.php'>Home</a>";
			echo"<a href='Delete.php'>Delete Account</a>";
			echo"<a href='SignOut.php'>SignOut</a>";
            echo"<a href='EditInfo.php'>Edit</a>";
		}
		else
		{
			echo "Welcome";
			echo"<a href='home.php'>Home</a>";
			echo"<a href='Login.php'>Login</a>";
			echo"<a href='SignUp.php'>Signup Here</a>";                            
		}
		?>
		<br><br>
	</body>
</html>