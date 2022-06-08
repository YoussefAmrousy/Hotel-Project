<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="favicon.png">
</head>  
<body style="height:auto">
<script>
$(function () {
     var url = window.location.href;
     $(".navbar-nav .nav-link").each(function () {
         // checks if its the same on the address bar.
          if (url == (this.href)) {
               $(this).closest("li").addClass("active");
                //for making parent of submenu active
                 $(this).closest("li").parent().parent().addClass("active");
                }
            });
            });
</script>
<?php
        if(session_id() == '') {
            session_start();
        }
        ?>
 <nav class="w3-bar w3-red w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-red w3-mobile"><img src="favicon.png" width="30" height="27"></a>
  <a href="#rooms" class="w3-bar-item w3-button w3-red w3-mobile">Rooms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-red w3-mobile">About</a>
  <a href="entertainment.html" class="w3-bar-item w3-button w3-red w3-mobile">Entertainment</a>
  <a href="#contact" class="w3-bar-item w3-button w3-red w3-mobile">Contact</a>

        <?php if (isset($_SESSION['Fname'])) {
            echo " <a href='entertainment.html' id='entertainment' class='w3-bar-item w3-button w3-red w3-mobile'>Entertainment</a>
            <a href='UserBooking.php' id='book' class='w3-bar-item w3-button w3-red w3-right  w3-mobile'>Book Now</a>
            <a href='reservationList.php' id='reservationList' class='w3-bar-item w3-button w3-red w3-mobile'>Reservation List</a>
            <a href='entertainment.html' id='entertainment' class='w3-bar-item w3-button w3-red w3-mobile'>Entertainment</a>
            <a href='SignOut.php' id='signout' class='w3-bar-item w3-button w3-red w3-mobile'>Sign Out</a>";
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