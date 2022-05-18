<html>
    <head>
        <title>Book a room</title>
        <script src="booking.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <style>
            h6 {
                display: inline;
            }
            </style>
    <?php 
    include "home.php";
    require_once 'dbConnection.php';
    $sql2 = "SELECT * FROM rooms WHERE UserID='".$_SESSION['ID']."'";
    $results = mysqli_query($conn, $sql2);
    if ($results->num_rows > 0) {
        header("Location:home.php");
    }
    ?>
    <br><br><br>
    <h4>Booking a room</h4>
    <form id="dayForm" method="post">
        <h6>Number of Guests</h6> <select id="guests" name="guests">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <h6>Duration Option: </h6> <select id ="daySelect" name="daySelect" onchange="checkSelection()">
            <option value="Day use">Day use</option>
            <option value="1 to 7 nights">1 to 7 nights</option>
            <option value="Long Stay">Long Stay (More than 7 nights)</option>
            <option value="Vacation">Vacation (More than a month)</option>
            <option value="I have a different plan">I have a different plan</option>
        </select><br>
        <h6>Check in Date: </h6> <input type="date" name="checkInDate" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31"><br>
        <h6>Check out Date: </h6> <input type="date" name="checkOutDate" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2023-12-31"><br>                               
            
            <?php
            if (isset($_POST['submit'])) {
                $guests = $_POST['guests'];
                $_SESSION['guests'] = $guests;
                if (empty($_POST['checkInDate'])) {
                    echo "<script>alert('Please enter your Check in date')</script>";
                    die();
                }
                else if (empty($_POST['checkOutDate'])) {
                    echo "<script>alert('Please enter your Check out date')</script>";
                }
            $checkindate = new DateTime($_POST['checkInDate']);
            $checkoutdate = new DateTime($_POST['checkOutDate']);
            $checkindateformat = $checkindate->format('Y-m-d');
            $checkoutdateformat = $checkoutdate->format('Y-m-d');
            if ($checkindateformat == $checkoutdateformat) {
                echo "<script>alert('Check in date couldn't be equal to Check out date')</script>";
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
            switch ($guests) {
                case 0:
                    $room = "Single";
                    $quantity = 1;
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$room."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows == 10) {
                        echo "<script>alert('There isn't any single rooms available at this time')</script>";
                    }
                    else {
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                for ($i = 1; $i <= 10; $i++) {
                                    if ($i != $row['RoomNumber']) {
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                                        values('".$_SESSION['ID']."','".$name."','".$room."','".$i."','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                                        $resultRoom = mysqli_query($conn, $roomtoTable);
                                        if ($resultRoom) {
                                            echo "<script>alert('Room has been booked successfully')</script>";
                                            header("Location:home.php");
                                            // header("Location:Guests.php"); To be used in 1+
                                            die();
                                            break;
                                        } } } } }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$room."','1','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                       $resultRoom = mysqli_query($conn, $roomtoTable);
                       if ($resultRoom) {
                           echo "<script>alert('Room has been booked successfully')</script>";
                           header("Location:home.php");
                           // header("Location:Guests.php"); To be used in 1+
                           die();
                           break;
                       } }
                }
                break;
                case 1:
                    $room = "Double";
                    $quantity = 1;
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$room."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows == 10) {
                        echo "<script>alert('There isn't any double rooms available at this time')</script>";
                    }
                    else {
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                for ($i = 1; $i <= 10; $i++) {
                                    if ($i != $row['RoomNumber']) {
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                                        values('".$_SESSION['ID']."','".$name."','".$room."','".$i."','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                                        $resultRoom = mysqli_query($conn, $roomtoTable);
                                        if ($resultRoom) {
                                            echo "<script>alert('Room has been booked successfully')</script>";
                                            header("Location:Guests.php");
                                            die();
                                            break;
                                        } } } } }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$room."','1','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                       $resultRoom = mysqli_query($conn, $roomtoTable);
                       if ($resultRoom) {
                           echo "<script>alert('Room has been booked successfully')</script>";
                           header("Location:Guests.php");
                           die();
                           break;
                       } }
                }
                break;
                case 2:
                    $room = "Triple";
                    $quantity = 1;
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$room."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows == 10) {
                        echo "<script>alert('There isn't any triple rooms available at this time')</script>";
                    }
                    else {

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                for ($i = 1; $i <= 10; $i++) {
                                    if ($i != $row['RoomNumber']) {
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                                        values('".$_SESSION['ID']."','".$name."','".$room."','".$i."','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                                        $resultRoom = mysqli_query($conn, $roomtoTable);
                                        if ($resultRoom) {
                                            echo "<script>alert('Room has been booked successfully')</script>";
                                            header("Location:Guests.php");
                                            die();
                                            break;
                                        } } } } }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$room."','1','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                       $resultRoom = mysqli_query($conn, $roomtoTable);
                       if ($resultRoom) {
                           echo "<script>alert('Room has been booked successfully')</script>";
                           header("Location:Guests.php");
                           die();
                           break;
                       } }
                }
                break;
                case 3:
                    $room = "Triple";
                    $quantity = 1;
                    $sql = "SELECT * FROM rooms WHERE RoomType = '".$room."' AND CheckinDate = '".$checkindateformat."' AND checkoutDate = '".$checkoutdateformat."' OR '".$checkindateformat."' BETWEEN checkinDate AND checkoutDate";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows == 10) {
                        echo "<script>alert('There isn't any triple rooms available at this time')</script>";
                    }
                    else {

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                for ($i = 1; $i <= 10; $i++) {
                                    if ($i != $row['RoomNumber']) {
                                        $extra = "Bed";
                                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Extra, Quantity, CheckinDate, CheckoutDate)
                                        values('".$_SESSION['ID']."','".$name."','".$room."','".$i."','".$etra."','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                                        $resultRoom = mysqli_query($conn, $roomtoTable);
                                        if ($resultRoom) {
                                            echo "<script>alert('Room has been booked successfully')</script>";
                                            header("Location:Guests.php");
                                            die();
                                            break;
                                        } } } } }
                    else {
                        $roomtoTable = "INSERT INTO rooms(UserID, Name, RoomType, RoomNumber, Quantity, CheckinDate, CheckoutDate)
                        values('".$_SESSION['ID']."','".$name."','".$room."','1','".$quantity."','".$checkindateformat."','".$checkoutdateformat."')";
                       $resultRoom = mysqli_query($conn, $roomtoTable);
                       if ($resultRoom) {
                           echo "<script>alert('Room has been booked successfully')</script>";
                           header("Location:Guests.php");
                           die();
                           break;
                       } }
                }
                break; 
            }
        }
        ?>
        <h6 id="dayLabel">Total Nights:</h6>
        <input type="text" id="totalnights" name="totalnights" placeholder="Enter the duration"><br>
        <script>
        document.getElementById("totalnights").style.visibility = "hidden";
        document.getElementById("dayLabel").style.visibility = "hidden";
        </script>
        <input type='submit' value='Check Available Rooms' name='submit'>
        </form>
</body>
</html>