<!DOCTYPE html>
<html>
  <head>
    <style>
    body {
      font-size: 13px;
      background-image: url("backgroundF.jfif");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
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
    input:hover, textarea:hover, input:focus, textarea:focus {
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
    .feedback-form {
      width: 340px;
      margin: 50px auto;
      font-size: 15px;
    }
    .feedback-form form {
      margin-bottom: 15px;
      background: #f7f7f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
      }
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="favicon.png">
</head> 
<body> 
<?php include 'navbar.php'; ?>
<div class="feedback-form">
  <form method="post">
    <h2 style="margin-bottom: 20px; font-family: fantasy; font-size: 40px;"> Feedback Form</h2>
    <div class="form-group">
    <p style="font-family: fantasy;">What do you think about the quality of our hotel?<br><br>Rate from 1 to 5</p>
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
    </div><br><br><br></div>
    <div class="form-group">
      <p style="font-family: fantasy;">Do you have any suggestions?</p>
      <p class="usertext">
        <textarea name="suggestion" placeholder="Enter your Suggestion" ></textarea></p>
        <p class="usersubmit">
          <input type="submit" name="submit" value="Send" >
        </p>
      </form>
    </div>
    
<?php 
if(session_id() == '') {
	session_start();
}
require_once 'dbconnection.php';
if (isset($_POST['submit'])) {
  $id = $_SESSION['ID'];
  $Name = $_SESSION['Fname'] . " " . $_SESSION['Lname'];
  $Quality = $_POST['rate'];
  $Feedback = $_POST['suggestion'];
  $sql="INSERT INTO feedback(UserID, Name, Quality, Suggestions) VALUES ('".$id."','".$Name."', '".$Quality."', '".$Feedback."')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>
    alert('Thank you for your comment, We'll to try to take your words into consideration')
    </script>";
  }
  else {
    trigger_error("Database Error");
  }
}
?>
</body>
</html>