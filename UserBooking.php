<html>
    <head>
        <script src="booking.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
        <h6>Days:</h6> <select id="daySelect" onchange="checkSelection()">
            <option value="Day use">Day use</option>
            <option value="1 to 7 nights">1 to 7 nights</option>
            <option value="Long Stay">Long Stay (More than 7 nights)</option>
            <option value="Vacation">Vacation (More than a month)</option>
            <option value="I have a different plan">I have a different plan</option>
        </select><br>
        <h6>Room Types:</h6> <select id="roomType">
            <?php
            $guestNo = $_SESSION['NoOfGuests'];
            $extra = "";
            switch ($guestNo) {
                case 1:
                    echo "<option value='Single'>Single</option>";
                    break;
                case 2:
                    echo "<option value='Double Room'>Double Room</option>";
                    break;
                case 3:
                    echo "<option value='Triple Room'>Triple Room</option>";
                    break;
                case 4:
                    echo "<option value='Triple Room'>Triple Room</option>
                    <option value='Two double rooms'>Two double rooms</option>";
                    break;
                case 5:
                    
            }
            ?>
        </select>
        <h6 id="dayLabel">Number of Days:</h6>
        <input type="text" id="DifferentPlan" placeholder="Enter the duration">
        <script>
        document.getElementById("DifferentPlan").style.visibility = "hidden";
        document.getElementById("dayLabel").style.visibility = "hidden";
        </script>
        <br><button onclick="location.href='RoomSelection.php'" type="button">Check Available Rooms</button>
        </form>
</body>
</html>