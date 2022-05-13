<html>
    <body>
    <?php include "home.php"; ?>
    <br><br>
    <h1>Room Selection</h1>
    <h4>Available Rooms</h4>
    <?php
    require_once 'dbConnection.php';
    session_Start();
    /* Available Rooms
    10 Single Rooms
    10 Double Rooms
    10 Triple Rooms */
    $sql = "select TotalGuests from guests where UserID = '".$_SESSION['ID']."'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
        echo $row['TotalGuests'];
    }
    unset($_SESSION['roomType']);
    unset($_SESSION['quantity']);
    if (isset($_SESSION['extra'])) {
        unset($_SESSION['extra']);
    }
    ?>
    </body>
</html>
