<html>
<head>
    <title>Admin Homepage</title>
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
    <a class="navbar-brand" href="#"><?php if (isset($_SESSION['Role']) && $_SESSION['Role'] == "QA") echo "Quality Control"; else echo "Receptionist"; ?></a>
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
        <li class="nav-item">
            <a class="nav-link" id ="pendingAccounts" href="pendingAccounts.php">Pending Accounts</a>
        </li>
        <?php if (isset($_SESSION['Role']) && $_SESSION['Role'] == "QA") {
            echo "<li class='nav-item'>
            <a class='nav-link' id ='viewComments' href='viewFeedback.php'>View Comments</a>
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
</body>
</html>