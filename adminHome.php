<html>
<head>
    <title>Admin Homepage</title>
    <style> 
body {
  height: auto;
  background-color: #cccccc;
  background-image: linear-gradient(white, aqua, blue);
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="icon" href="favicon.png">
</head>
<body>
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
        if (!isset($_SESSION['Role'])) {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="bar">
    <a class="navbar-brand" href="#"><?php if (isset($_SESSION['Role']) && $_SESSION['Role'] == "QA") echo "Quality Assurance"; else echo "Receptionist"; ?></a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id ="searchRoom" href="roomSearch.php">Search Rooms</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id ="manageRooms" href="manageRooms.php">Manage Rooms</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id ="pendingReservations" href="pendingReservations.php">Pending Reservations</a>
        </li>
        <?php if (isset($_SESSION['Role']) && $_SESSION['Role'] == "QA") {
            echo "<li class='nav-item'>
            <a class='nav-link' id ='viewComments' href='viewComments.php'>View Comments</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' id ='reports' href='Reports.php'>Reports</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' id ='manageAccounts' href='manageAccounts.php'>Manage Accounts</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' id ='addAccount' href='addAccount.php'>Add Account</a>
            </li>";
        }
        ?>
        <li class='nav-item'>
            <a class='nav-link' id ='signOut' href='SignOut.php'>Sign Out</a>
            </li>
        <li class="nav-item">
            <a class="nav-link disabled " id="username" href="#"></a>
        </li>
    </ul>
    
</nav>
<br><br><br><br>
    <div class="body-container">
    <div class="landing-screen half-landing-screen background-image-section" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)), url('./images/room_banner.jpg');">
        <div class="landing-screen-info">
        <center><h1 class="landing-screen-text">Current Rooms Rates</h1></center>
        </div>
    </div>
    <div>
                        <h2 class="large-text">Balcony Room</h2>
                        <h4>Price: $100/night</h4>
                    
            
            
                    <img src="./images/balcony_room.jpg" style=
    "height:600px;
    width:600px;"> 
                          

                <div>
                        <h2 class="large-text">Single Room</h2>
                        <h4>Price: $50/night</h4>
                    
                    <img src="./images/classic_room.jpg" style=
    "height:600px;
    width:600px;">
                <div>
                        <h2 class="large-text">Double Room</h2>
                        <h4>Price: $80/night</h4>
                    
                    <img src="./images/home_gallery4.jpg" style=
    "height:600px;
    width:600px;"> 
                
                </div>
                <div>
                        <h2 class="large-text">Triple Room</h2>
                        <h4>Price: $100/night</h4>
                   
                    <img src="./images/family_room.jpg" style=
    "height:600px;
    width:600px;">
                
                   
                </div>
</body>
</html>
