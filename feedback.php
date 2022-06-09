<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
  padding: 50px 500px;
  font-size: 13px;
    background-color: deepskyblue;
}

input, textarea {
  padding: 10px;
  border: 1px solid #E5E5E5;
  width: 270px;
  color: #999999;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
      
}

textarea {
  width: 300px;
  height: 130px;
  max-width: 400px;
  line-height: 18px;
}
.username input{
  height:30px;
}
.userroom input{
  height:30px;

}
input:hover, textarea:hover,
input:focus, textarea:focus {
  border-color: 1px solid #C9C9C9;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;  
}

.form label {
  margin-left: 10px;
  font-family:monospace;
    font-size: 15px;
}


.usersubmit input {
  width: 100px; 
  height: 40px;
  background-color: #474E69; 
  color: #FFF;
  border-radius: 3px;
    
}
.w3-bar{
  overflow: hidden;
  position: fixed; /* Set the navbar to fixed position */
  top: 0;
  left:0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
      </style>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="favicon.png">
</head> 
<body> 
 <nav class="w3-bar">
  <a href="home.php" class="w3-bar-item w3-button w3-red w3-mobile"><img src="favicon.png" width="30" height="27"></a>
  <a href="#rooms" class="w3-bar-item w3-button w3-red w3-mobile">Rooms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-red w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-red w3-mobile">Contact</a>
  <a href='UserBooking.php' id='book' class='w3-bar-item w3-button w3-red w3-right  w3-mobile'>Book Now</a>
  <a href='reservationList.php' id='reservationList' class='w3-bar-item w3-button w3-red w3-mobile'>Reservation List</a>
  <a href='feedback.php' id='reservationList' class='w3-bar-item w3-button w3-red w3-mobile'>Rate us</a>
  <a href='SignOut.php' id='signout' class='w3-bar-item w3-button w3-red w3-mobile'>Sign Out</a>
</nav>
 <form method="post">
  <h2 style="margin-bottom: 20px; font-family: fantasy; font-size: 40px;"> Feedback Form</h2>
 <br/>
 <p class="username">
 <label for="name">Name</label>
  <input type="text" name="name" placeholder="Enter your name" >
    </p>
 <p class="userroom">
 <label for="room">Room</label>
      <input type="text" name="room" placeholder="Enter your room no" >
</p>
 <p>What do you think about the quality of our hotel?<br><br>Rate from 1 to 5</p>
 <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br><br>
 <p>Do you have any suggestion for us? </p>
 <p class="usertext">
      <textarea name="suggestion" placeholder="Write something to us" ></textarea></p>
  <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
</form>
<?php 
$con=mysqli_connect("localhost","root","","web-project") or die(mysqli_error());
if((isset($_POST['submit'])))
{
$Name = $con->real_escape_string($_POST['name']);
$Room = $con->real_escape_string($_POST['room']);
$Quality = $con->real_escape_string($_POST['rate']);
$Feedback = $con->real_escape_string($_POST['suggestion']);
$sql="INSERT INTO feedback VALUES ('".$Name."','".$Room."', '".$Quality."', '".$Feedback."')";
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}
?>
</body>
</html>