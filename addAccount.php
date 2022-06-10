<html>
    <head>
        <title>Add Account</title>
        <style>
body {
  background-image: url('images/about_banner.jpg');
  background-size: 100% 100%;
  background-repeat: no-repeat;
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
    <a class="navbar-brand" href="adminHome.php"><?php if (isset($_SESSION['Role']) && $_SESSION['Role'] == "QA") echo "Quality Assurance"; else echo "Receptionist"; ?></a>
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
        <center><h1 class="landing-screen-text">Add Accounts</h1></center>
        </div>
    </div>
        <br><br><br>
        
        <form method="post">
            Name: <input type="text" name="name" required="required"><br>
            Email: <input type="text" name="email" required="required"><br>
            Password: <input type="text" name="password" required="required"><br>
            Role: <select name="role">
                <option value="Receptionist">Receptionist</option>
                <option value="QA">Quality Assurance</option>
            </select><br>
            <input type="submit" name="add" value="Add Account">
        </form>
        <?php
        require_once 'dbConnection.php';
        if (isset($_POST['add'])) {
            $emailSql = "SELECT * FROM staff WHERE Email = '".$_POST['email']."'";
            $emailResult = mysqli_query($conn, $emailSql);
            $nameSql = "SELECT * FROM staff WHERE Name = '".$_POST['name']."'";
            $nameResult = mysqli_query($conn, $nameSql);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                echo "<script>
                alert('Inavlid name, please change it to another one')
                </script>";
                die();
              }
            else if ($emailResult->num_rows > 0) {
                echo "<script>
                alert('This email is already reserved for another staff, Choose another one')
                </script>";
                die();
            }
            else if ($nameResult->num_rows > 0) {
                echo "<script>
                alert('This name is already taken, Choose another one')
                </script>";
                die();
            }
            $email = $_POST['email']."@grnd.com";
            $sql = "INSERT INTO staff(Name, Email, Password, Role, Enabled) values('".$_POST['name']."','".$email."','".$_POST['password']."','".$_POST['role']."','True')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
                window.location.href ='manageAccounts.php';
                </script>";
            }
        }
        ?>
    </body>
</html>
