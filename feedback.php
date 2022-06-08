<!DOCTYPE html>
<html>
<body>
 <form method="post">
   Feedback Form
 <br/>
 <p>
 Your Name
 <input type="text" name="name"  placeholder="Enter your full name . . ." >
 </p>
 <p>
 Your Room
 <input type="text" name="room"  placeholder="Enter your room number . . ." >
 </p>
 <p>What do you think about the quality of our hotel?<br>Rate from 1 to 5</p>
 <div>
     <input type="radio" name="quality" value="1"> 1
     <input type="radio" name="quality" value="2"> 2
     <input type="radio" name="quality" value="3"> 3
     <input type="radio" name="quality" value="4"> 4
     <input type="radio" name="quality" value="5"> 5

 </div>
 <p>What do you think about cleanliness of our rooms?</p>
 <div>
     <input type="radio" name="quality2" value="1"> Bad
     <input type="radio" name="quality2" value="2"> Okay
     <input type="radio" name="quality2" value="3"> Good
 </div>
 <p>What do you think about the quality of our food?</p>
 <div>
     <input type="radio" name="quality3" value="1"> Bad
     <input type="radio" name="quality3" value="2"> Okay
     <input type="radio" name="quality3" value="3"> Good
 </div>
 
 <p>Do you have any suggestion for us? </p>
 <textarea name="suggestion" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Submit Form">
</form>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['quality']) || empty($_POST['quality2']) || empty($_POST['quality3']) || isset($_POST['quality']) || isset($_POST['quality2']) || isset($_POST['quality3'])) {
       {
        echo "done";
    }
}
$name = $_POST['name'];
$room = $_POST['room'];
$q_score = $_POST['quality'];
$q_score2 = $_POST['quality2'];
$q_score3 = $_POST['quality3'];  
$feedback_txt = $_POST['suggestion'];

$conn = mysqli_connect("localhost", "root","", "web-project");
$query ="insert into feedback(name,room,score,score2,score3, feedback) 
values('".$name."','".$room."','".$q_score."','".$q_score2."','".$q_score3."','".$feedback_txt."')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
}
?>
</body>
</html>