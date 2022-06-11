<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="icon" href="favicon.png">
</head>  
<body style="height:auto">
<?php
require_once 'dbconnection.php';
        if(session_id() == '') {
            session_start();
        }
        ?>
 <nav class="w3-bar w3-red w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-red w3-mobile"><img src="favicon.png" width="30" height="27"></a>
  <a href="Rooms.php" class="w3-bar-item w3-button w3-red w3-mobile">Rooms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-red w3-mobile">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-red w3-mobile">Contact</a>

        <?php if (isset($_SESSION['Fname'])) {
            echo " 
            <a href='UserBooking.php' id='book' class='w3-bar-item w3-button w3-red w3-right  w3-mobile'>Book Now</a>
            <a href='reservationList.php' id='reservationList' class='w3-bar-item w3-button w3-red w3-mobile'>Reservation List</a>
            <a href='feedback.php' id='reservationList' class='w3-bar-item w3-button w3-red w3-mobile'>Rate</a>
            <a href='SignOut.php' id='signout' class='w3-bar-item w3-button w3-red w3-mobile'>Sign Out</a>";
            $sql = "SELECT * FROM rooms WHERE UserID =".$_SESSION['ID'];
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                echo "<a href='checkIn.php' id='book' class='w3-bar-item w3-button w3-red w3-right  w3-mobile'>Check In</a>";
            }
        }
        else {
            echo "<a href='Login.php' target='' id='login' class='w3-bar-item w3-button w3-red w3-mobile'>Login</a>";
        }
        ?>
        <li class="w3-bar-item w3-button  w3-mobile">
            <a class="nav-link disabled " id="username" href=""></a>
        </li>
        <?php if (isset($_SESSION['Fname'])) {
            echo "<script>
            document.getElementById('username').innerHTML = 'Welcome ".$_SESSION['Fname']."';
            document.getElementById('username').style.visibility = 'visible';
            document.getElementById('username').style.textAlign = right;
            </script>";
        }
        else {
            echo "<script>
            document.getElementById('username').style.visiblity ='hidden';
            </script>";
        }
        ?>
    </ul>
</nav>
</body>
</html>
