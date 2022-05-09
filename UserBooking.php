<html>
    <head>
        <script src="booking.js"></script>
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
        <h6 id="dayLabel">Number of Days:</h6>
        <input type="text" id="DifferentPlan" placeholder="Enter the duration">
        <script>
        document.getElementById("DifferentPlan").style.visibility = "hidden";
        document.getElementById("dayLabel").style.visibility = "hidden";
        </script>
        <br><button>Check Available Rooms</button>
        </form>
</body>
</html>