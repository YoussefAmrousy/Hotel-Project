<html>
	<body>
		<?php 
		session_start();
		include "menu.php";
		if(isset($_SESSION['Name'])) 
		{
			echo "<h1>"."Welcome ".$_SESSION['Name']."</h1>";
		}
		?>
</body>
</html>