<html>
<head>
    <title>roomSearch</title>
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
        <center><h1 class="landing-screen-text">Room Search</h1></center>
        </div>
    </div>
    <div>
        
        <div id="Form">
        <form method="post" id="searchForm">
            <input type="radio" name="searchOption" value="roomNo">
            <label for="RoomNo">Room Number</label><br>
            <input type="radio" name="searchOption" value="name">
            <label for="name">Name</label><br>
            <input type="text" name="searchValue"><br>
            <input type="submit" name="search" value="Search">
        </form>
        </div>
        <?php
        require_once "dbconnection.php";
        if (!isset($_SESSION['Role'])) {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        if (isset($_POST['search'])) {
            if (empty($_POST['searchValue'])) {
                echo "<script>alert('Please Enter the value to search for')</script>";
                die();
            }
            else if (empty($_POST['searchOption'])) {
                echo "<script>alert('Please select an option')</script>";
                die();
            }
            $value = $_POST['searchOption'];
            if ($value == "roomNo") {
                $sql = "SELECT * FROM rooms WHERE RoomNumber=".$_POST['searchValue'];
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<script>
                        document.getElementById('Form').style.display = 'none'
                        </script>
                        <table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
                        <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>User ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Room Type</th>
                                <th scope='col'>Room Number</th>
                                <th scope='col'>Board</th>
                                <th scope='col'>Extra</th>
                                <th scope='col'>Check In Date</th>
                                <th scope='col'>Check Out Date</th>
                                <th scope='col'>Paid</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <th scope='row'>".$row["UserID"]."</th>
                        <td>".$row['Name']."</td>
                        <td>".$row['RoomType']."</td>
                        <td>".$row['RoomNumber']."</td>
                        <td>".$row['Board']."</td>
                        <td>".$row['Extra']."</td>
                        <td>".$row['CheckinDate']."</td>
                        <td>".$row['CheckoutDate']."</td>
                        <td>".$row['Paid']."</td>
                        </tr>
                        </tbody>
                        </table>";
                    }
                }
                else {
                    echo "No Data to show";
                }
            }
            else {
                $sqlname = "SELECT * FROM rooms WHERE Name ='".$_POST['searchValue']."'";
                $resultname = mysqli_query($conn, $sqlname);
                if ($resultname->num_rows > 0) {
                    echo "<script>
                    document.getElementById('Form').style.display = 'none'
                    </script>
                    <table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
                           <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>User ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Room Type</th>
                                <th scope='col'>Room Number</th>
                                <th scope='col'>Board</th>
                                <th scope='col'>Extra</th>
                                <th scope='col'>Check In Date</th>
                                <th scope='col'>Check Out Date</th>
                                <th scope='col'>Paid</th>
                            </tr>
                        </thead>";
                    while ($row = $resultname->fetch_assoc()) {
                        echo "<tbody>
                        <tr>
                        <th scope='row'>".$row["UserID"]."</th>
                        <td>".$row['Name']."</td>
                        <td>".$row['RoomType']."</td>
                        <td>".$row['RoomNumber']."</td>
                        <td>".$row['Board']."</td>
                        <td>".$row['Extra']."</td>
                        <td>".$row['CheckinDate']."</td>
                        <td>".$row['CheckoutDate']."</td>
                        <td>".$row['Paid']."</td>
                        </tr>";
                    }
                    echo "</tbody></table>";
                }
                else {
                    echo "No Data to show";
                }
            }
        }
        ?>
        
<style>
            body{
                margin: 0;
                padding: 0;
                background: white;
                
            }
            .slider{
                width: 800px;
                height: 500px;
                background: url(images/delux_room.jpg);
                margin: 100px auto;
                animation: slide 20s infinite;
            }
            @keyframes slide{
                20%{
                    background: url(images/classic_room.jpg);
                }
                40%{
                    background: url(images/delux_room.jpg);
                }
                60%{
                    background: url(images/family_room.jpg);
                }
                80%{
                    background: url(images/home_gallery4.jpg);
                }
                100%{
                    background: url(images/home_gallery5.jpg);
                }
            }

        </style>
        <div class="slider">
    </body>
</html>
