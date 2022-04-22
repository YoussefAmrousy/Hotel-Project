<?php 
include "menu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";
session_start();

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

	echo "<form action='' mathod='get'>";
 echo "Name: <input type= 'text'  name= 'name'  value="$name">;
echo "Address: <input type= 'text'  name= 'address' value="$address">;
echo "<input type= 'submit'  name= 'submit'  value= 'Submit' ><br>";
echo"</form>";
//check if form is submitted and update the values
if(isset($_GET['Submit'])){
$sql=" update users set Name='".$_GET['name']."', Address='".$_GET['address']."' where ID = '".$_SESSION['ID']."'";
$result=mysqli_query($conn,$sql);//check if query is executed sucessfully
if(!$result){

	 die("Unable to execute query");
}
else{
$_SESSION["Name"]=$_GET["name"];
$_SESSION["Address"]=$_GET["address"];
}
}

?>
