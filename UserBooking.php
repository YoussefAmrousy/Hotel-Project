<html>
    <head>
        <title>Book a room</title>
        <script src="booking.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.png">
    </head>
    <body>
        <style>
            h6 {
                display: inline;
            }
            </style>
    <?php 
    include "home.php";
    if(session_id() == '') {
        session_start();
    }
    if (!isset($_SESSION['Email'])) {
        echo "<script>
        window.location.href ='home.php';
        alert('You don\'t have access to this page')
        </script>";
    }
    require_once 'dbConnection.php';
    ?>
    <br><br><br>
    <h4>Booking a room</h4>
    <form id="dayForm" method="post">
        <h6>Duration: </h6> <select id ="daySelect" name="daySelect" onchange="checkSelection()">
            <option value="Day use">Day use</option>
            <option value="1 to 7 nights">1 to 7 nights</option>
            <option value="Long Stay">Long Stay (More than 7 nights)</option>
            <option value="Vacation">Vacation (More than a month)</option>
            <option value="I have a different plan">I have a different plan</option>
        </select><br>
        <h6>Room Type: </h6> <select id="roomType" name="roomType">
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
        </select><br>
        <h6>Extra Bed: </h6> <input type="checkbox" name="extraBed" value="Yes">
        <label for="extraBed">Yes</label><br>
        <h6>Board Packages: </h6> <select id="boardOptions" name="boardOptions">
            <option value="Breakfast only">Breakfast only</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
            <option value="All Incluse (Extra fees)">All Inclusive (Extra fees)</option>
        </select><br>
        <h6>Check in Date: </h6> <input type="date" name="checkInDate" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31" required="required"><br>
        <h6>Check out Date: </h6> <input type="date" name="checkOutDate" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31" required="required"><br> 
        <input type='submit' value='Check Availablitiy' name='checkAvailablitiy'>    
        </form>                                   
            <?php
            if (isset($_POST['checkAvailablitiy'])) {
                if (empty($_POST['checkInDate'])) { echo "<script>alert('Please enter your Check in date')</script>"; }
                else if (empty($_POST['checkOutDate'])) { echo "<script>alert('Please enter your Check out date')</script>"; }
            $checkindate = new DateTime($_POST['checkInDate']);
            $checkoutdate = new DateTime($_POST['checkOutDate']);
            $checkindateformat = $checkindate->format('Y-m-d');
            $checkoutdateformat = $checkoutdate->format('Y-m-d');
            if ($checkindateformat == $checkoutdateformat) {
                echo "<script>alert('You can\'t have your checkin and checkout date on the same day')</script>";
                die();
             }
             else if ($checkindateformat > $checkoutdateformat) {
                echo "<script>alert('You can\'t set your checkout date before checkin date')</script>";
                die();
             }
            $daydiff = $checkindate->diff($checkoutdate);
            $days = $daydiff->days;
            $chosenDuration = $_POST['daySelect'];
            if ($chosenDuration == 'Day use') {
                if ($days > 1) {
                    echo "<script>alert('Duration Should be maximum 1 night')</script>";
                }
            } 
            else if ($chosenDuration == '1 to 7 nights') {
                if ($days > 6) {
                    echo "<script>alert('Duration should be maximum 6 nights')</script>";
                }
            }
            else if ($chosenDuration == 'Long Stay') {
                if ($days < 8) {
                    echo "<script>alert('Duration should be at least 8 nights')</script>";
                }
                else if ($days > 30) {
                    echo "<script>alert('Duration should be maximum 30 nights')</script>";
                }
            }
            else if ($chosenDuration == 'Vacation') {
                if ($days < 31) {
                    echo "<script>alert('Duration should be at least 31 nights')</script>";
                }
             }
            // Date Format: YYYY/MM/DD
            $name = $_SESSION['Fname'] . " " . $_SESSION['Lname'];
            $roomType = $_POST['roomType'];
            $board = $_POST['boardOptions'];
            $extraBed = "No";
            if (isset($_POST['extraBed'])) {
                $extraBed = "Yes";
            }
            
            if ($roomType == "Single") {
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$roomType."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    $rooms = "SELECT * FROM rooms WHERE RoomType = '".$roomType."'";
                    $roomsResult = mysqli_query($conn, $rooms);
                    
                    if ($roomsResult->num_rows >= 10) {
                        echo "<script>
                        window.location.href ='home.php';
                        alert('There isn\'t any Single rooms available')
                        </script>";
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                                for ($i = 1; $i <= 10; $i++) {
                                    $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                    $roomNoResult = mysqli_query($conn, $roomNo);
                                    if ($roomNoResult->num_rows == 0) {
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                                        values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."', 'No')";
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
                            $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                            values('".$_SESSION['ID']."','".$name."','".$roomType."','1','".$board."','".$checkindateformat."','".$checkoutdateformat."','No')";
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
                        window.location.href ='home.php';
                        alert('There isn\'t any Double rooms available')
                        </script>";
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                            for ($i = 11; $i <= 21; $i++) {
                                $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                $roomNoResult = mysqli_query($conn, $roomNo);
                                if ($roomNoResult->num_rows == 0) {
                                    $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                                    values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."', 'No')";
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
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                        values('".$_SESSION['ID']."','".$name."','".$roomType."','11','".$board."','".$checkindateformat."','".$checkoutdateformat."','No')";
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
                        window.location.href ='home.php';
                        alert('There isn\'t any Triple rooms available')
                        </script>";
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                            for ($i = 22; $i <= 32; $i++) {
                                $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                $roomNoResult = mysqli_query($conn, $roomNo);
                                if ($roomNoResult->num_rows == 0) {
                                    $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                                    values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$checkindateformat."','".$checkoutdateformat."', 'No')";
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
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, CheckinDate, CheckoutDate, Paid)
                        values('".$_SESSION['ID']."','".$name."','".$roomType."','22','".$board."','".$checkindateformat."','".$checkoutdateformat."','No')";
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
                else if ($roomType == "Triple" && $extraBed == "Yes") {
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$roomType."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    $rooms = "SELECT * FROM rooms WHERE RoomType = '".$roomType."'";
                    $roomsResult = mysqli_query($conn, $rooms);
                    
                    if ($roomsResult->num_rows >= 10) {
                        echo "<script>
                        window.location.href ='home.php';
                        alert('There isn\'t any Triple rooms available')
                        </script>";
                    }
                    else {
                        if ($roomsResult->num_rows > 0) {
                            for ($i = 22; $i <= 32; $i++) {
                                $roomNo = "SELECT * FROM rooms WHERE RoomNumber ='".$i."'";
                                $roomNoResult = mysqli_query($conn, $roomNo);
                                if ($roomNoResult->num_rows == 0) {
                                    $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, Extra, CheckinDate, CheckoutDate, Paid)
                                    values('".$_SESSION['ID']."','".$name."','".$roomType."','".$i."','".$board."','".$extraBed."','".$checkindateformat."','".$checkoutdateformat."', 'No')";
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
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Board, Extra, CheckinDate, CheckoutDate, Paid)
                        values('".$_SESSION['ID']."','".$name."','".$roomType."','22','".$board."','".$extraBed."','".$checkindateformat."','".$checkoutdateformat."','No')";
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
        <!-- <table class="table table-hover" id="roomsTable" style="width:40%;margin-left: auto;margin-right:auto;" hidden="hidden">

        </table> -->
</body>
</html>