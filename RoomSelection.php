<html>
    <body>
    <?php include "home.php"; ?>
    <br><br>
    <h1>Room Selection</h1>
    <h4>Available Rooms</h4>
    <?php
    require_once 'dbConnection.php';
    /* Available Rooms
    10 Single Sea View
    10 Single Pool View
    10 Single Garden View
    10 Double Sea View
    10 Double Pool View
    10 Double Garden View
    10 Triple Sea View
    10 Tripe Pool View 
    10 Triple Garden View
    Rooms Numbers: 
    1 - 30 Single
    31 - 70 Double
    71 - 90 Triple */
    $sql = "select TotalGuests from guests where UserID = '".$_SESSION['ID']."'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
        echo $row['TotalGuests'];
    }
    ?>
    </body>
</html>
