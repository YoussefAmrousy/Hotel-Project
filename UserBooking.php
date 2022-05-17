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
    <?php include "home.php"; ?>
    <br><br><br>
    <h4>Booking a room</h4>
    <form id="dayForm" method="post">
        <h6>Number of Guests</h6> <select id="guests" name="guests">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
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
            $_SESSION['guests'] = $_POST['guests'];
            if (isset($_POST['submit'])) {
                if (empty($_POST['daySelect'])) {
                    echo "<script>alert('Please select a duration')</script>";
                }
                else if (empty($_POST['checkInDate'])) {
                    echo "<script>alert('Please enter your Check in date')</script>";
                }
                else if (empty($_POST['checkOutDate'])) {
                    echo "<script>alert('Please enter your Check out date')</script>";
                }
            $checkindate = new DateTime($_POST['checkInDate']);
            $checkoutdate = new DateTime($_POST['checkOutDate']);
            if ($checkoutdate > $checkindate) {
                echo "<script>alert('Check out date couldn't come before the Check in date'</script>";
            }
            else if ($checkindate == $checkoutdate) {
                echo "<script>alert('Check in date couldn't be equal to Check out date')</script>";
            }
            $_SESSION['checkindate'] = $_POST['checkInDate'];
            $_SESSION['checkoutdate'] = $_POST['checkOutDate'];

            $daydiff = $checkindate->diff($checkoutdate);
            $days = $daydiff->days;
            echo $days;
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
            require_once 'dbConnection.php';
            $sql = "SELECT DATE_FORMAT(CheckinDate, '%d/%m/%Y') FROM rooms";
            $result = mysqli_query($conn, $sql);
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