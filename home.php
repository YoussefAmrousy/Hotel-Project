<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="homeStyle.css">
    </head>
	<body>
        <?php
        if(session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['Fname'])) {
            echo "<div class='sessionWelcome'>Welcome ".$_SESSION['Fname']."</div><nav name='navbar'>
            <a href='home.html'>Home</a>
            <a href='about.html'>About</a>
            <a href='contact.html'>Contact Us</a>
            <a href='SignOut.php'>Sign Out</a>
            
		</nav>";
        }
        else {
            echo "<nav name='navbar'>
            <a href='home.html'>Home</a>
            <a href='about.html'>About</a>
            <a href='login.php'>Login</a>
            <a href='SignUp.php'>Sign Up</a>
            <a href='contact.html'>Contact Us</a>
		</nav>";
        }
        ?>
	</body>
</html>