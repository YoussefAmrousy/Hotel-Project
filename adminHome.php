<html>
<head>
    <title>Admin Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <li class="nav-item">
            <a class="nav-link" id ="pendingAccounts" href="pendingAcounts.php">Pending Accounts</a>
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
</body>
</html>