<html>
    <head>
        <title>Book a room</title>
        <script src="booking.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <style>
            h6 {
                display: inline;
            }
            body {
                background-image: url("room.jpg");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    <?php 
    if(session_id() == '') {
        session_start();
    }
    include "navbar.php";
    require_once 'dbConnection.php';
    require_once 'errorHandling.php';
    if (!isset($_SESSION['Email'])) {
        echo "<script>
        window.location.href ='home.php';
        alert('You don\'t have access to this page')
        </script>";
    }
    ?>
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>Hurghada GRND Hotel</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Room Type</label>
            <select id="roomType" name="roomType" class="w3-input w3-border">
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
        </select>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="date" <?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31" name="checkInDate" required="required">
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Board Packages</label>
            <select id="boardOptions" name="boardOptions" class="w3-input w3-border">
            <option value="Breakfast only">Breakfast only</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
            <option value="All Incluse (Extra fees)">All Inclusive (Extra fees)</option>
        </select>
          </div>
         <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="date" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31" name="checkOutDate" required="required">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit" name="checkAvailablitiy"><i class="fa fa-search w3-margin-right"></i>Check availability</button>
      </form>
    </div>
  </div>
            <?php
            if (isset($_POST['checkAvailablitiy'])) {
                if (empty($_POST['checkInDate'])) { 
                    echo "<script>alert('Please enter your Check in date')</script>";
                    trigger_error("Empty Check In Date");
                }
                else if (empty($_POST['checkOutDate'])) {
                     echo "<script>alert('Please enter your Check out date')</script>";
                     trigger_error("Empty Check Out Date");
                     }
            $checkindate = new DateTime($_POST['checkInDate']);
            $checkoutdate = new DateTime($_POST['checkOutDate']);
            $checkindateformat = $checkindate->format('Y-m-d');
            $checkoutdateformat = $checkoutdate->format('Y-m-d');
            if ($checkindateformat == $checkoutdateformat) {
                echo "<script>alert('You can\'t have your Check In and Check out date on the same day')</script>";
                trigger_error("Same Dates");
             }
             else if ($checkindateformat > $checkoutdateformat) {
                echo "<script>alert('You can\'t set your Check Out date before Check Out date')</script>";
                trigger_error("Wrong Dates");
             }
            $daydiff = $checkindate->diff($checkoutdate);
            $days = $daydiff->days;
            // Date Format: YYYY/MM/DD
            $name = $_SESSION['Fname'] . " " . $_SESSION['Lname'];
            $roomType = $_POST['roomType'];
            $board = $_POST['boardOptions'];
            
            if ($roomType == "Single") {
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$roomType."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    $rooms = "SELECT * FROM rooms WHERE RoomType = '".$roomType."'";
                    $roomsResult = mysqli_query($conn, $rooms);
                    
                    if ($roomsResult->num_rows >= 10) {
                        echo "<script>
                        alert('There isn\'t any Single rooms available')
                        </script>";
                        trigger_error("No Empty Single Rooms");
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                                for ($i = 1; $i <= 10; $i++) {
                                    $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                    $roomNoResult = mysqli_query($conn, $roomNo);
                                    if ($roomNoResult->num_rows == 0) {
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                                        values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                                        $resultRoom = mysqli_query($conn, $roomtoTable);
                                        
                                        if ($resultRoom) {
                                            $_SESSION['roomBooked'] = "true";
                                            echo "<script>
                                            window.location.href='checkout.php'
                                            alert('Redirecting to Checkout page')
                                            </script>";
                                            break;
                                        }
                                    }
                                }
                            }
                        else {
                            $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                            values('".$_SESSION['ID']."','".$name."','".$roomType."','1','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                            $resultRoom = mysqli_query($conn, $roomtoTable);
                            if ($resultRoom) {
                                $_SESSION['roomBooked'] = "true";
                                echo "<script>
                                window.location.href='checkout.php'
                                alert('Redirecting to Checkout page')
                                </script>";
                            }
                        }
                }
            }
                else if ($roomType == "Double") {
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$roomType."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    $rooms = "SELECT * FROM rooms WHERE RoomType = '".$roomType."'";
                    $roomsResult = mysqli_query($conn, $rooms);
                    
                    if ($roomsResult->num_rows >= 10) {
                        echo "<script>
                        alert('There isn\'t any Double rooms available')
                        </script>";
                        trigger_error("No Empty Double Rooms");
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                            for ($i = 11; $i <= 21; $i++) {
                                $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                $roomNoResult = mysqli_query($conn, $roomNo);
                                if ($roomNoResult->num_rows == 0) {
                                    $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                                    values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                                    $resultRoom = mysqli_query($conn, $roomtoTable);
                                    
                                    if ($resultRoom) {
                                        $_SESSION['roomBooked'] = "true";
                                        echo "<script>
                                        window.location.href='checkout.php'
                                        alert('Redirecting to Checkout page')
                                        </script>";
                                        break;
                                    }
                                }
                            }
                        }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$roomType."','11','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                        $resultRoom = mysqli_query($conn, $roomtoTable);

                        if ($resultRoom) {
                            $_SESSION['roomBooked'] = "true";
                            echo "<script>
                            window.location.href='checkout.php'
                            alert('Redirecting to Checkout page')
                            </script>";
                        }
                    }
                }
            }
                else if ($roomType == "Triple") {
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$roomType."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    $rooms = "SELECT * FROM rooms WHERE RoomType = '".$roomType."'";
                    $roomsResult = mysqli_query($conn, $rooms);
                    
                    if ($roomsResult->num_rows >= 10) {
                        echo "<script>
                        alert('There isn\'t any Triple rooms available')
                        </script>";
                        trigger_error("No Empty Triple Rooms");
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                            for ($i = 22; $i <= 32; $i++) {
                                $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                $roomNoResult = mysqli_query($conn, $roomNo);
                                if ($roomNoResult->num_rows == 0) {
                                    $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                                    values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                                    $resultRoom = mysqli_query($conn, $roomtoTable);
                                    
                                    if ($resultRoom) {
                                        $_SESSION['roomBooked'] = "true";
                                        echo "<script>
                                        window.location.href='checkout.php'
                                        alert('Redirecting to Checkout page')
                                        </script>";
                                        break;
                                    }
                                }
                            }
                        }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$roomType."','22','".$board."','".$checkindateformat."','".$checkoutdateformat."')";
                        $resultRoom = mysqli_query($conn, $roomtoTable);
                        if ($resultRoom) {
                            $_SESSION['roomBooked'] = "true";
                            echo "<script>
                            window.location.href='checkout.php'
                            alert('Redirecting to Checkout page')
                            </script>";
                        }
                    }
                }
            }
        }
        ?>
</body>
</html>