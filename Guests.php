<html>
    <head><title>Guests Information</title></head>
    <body>
        <?php include "home.php"; ?>
        <h3>Guest Information</h3>
        <?php
        if(session_id() == '') {
            session_start();
        }
        $guestNo = $_SESSION['NoOfGuests'];
        if ($guestNo == 0) {
            header("Location:home.php");
        }
        else {
            echo "<h4>Total guests are:</h4>".$_SESSION['NoOfGuests']."<form>";
            switch ($guestNo) {
                case 1:
                    echo "<b>Guest Name 1:</b>
                    <input type='text' name='GuestName1'><br>
                    <b>Guest ID 1:</b>
                    <input type='text' name='GuestID1'>";
                    break;
                    case 2:
                        echo "<b>Guest Name 1:</b>
                        <input type='text' name='GuestName1'><br><br>
                        <b>Guest ID 1:</b>
                        <input type='text' name='GuestID1'><br><br>
                        <b>Guest Name 2:</b>
                        <input type='text' name='GuestName2'><br><br>
                        <b>Guest ID 2:</b>
                        <input type='text' name='GuestID2'>";
                        break;
                    case 3:
                        echo "<b>Guest Name 1:</b>
                        <input type='text' name='GuestName1'><br><br>
                        <b>Guest ID 1:</b>
                        <input type='text' name='GuestID1'><br><br>
                        <b>Guest Name 2:</b>
                        <input type='text' name='GuestName2'><br><br>
                        <b>Guest ID 2:</b>
                        <input type='text' name='GuestID2'><br><br>
                        <b>Guest Name 3:</b>
                        <input type='text' name='GuestName3'><br><br>
                        <b>Guest ID 3:</b>
                        <input type='text' name='GuestID3'>";
                        break;
                    case 4:
                        echo "<b>Guest Name 1:</b>
                        <input type='text' name='GuestName1'><br><br>
                        <b>Guest ID 1:</b>
                        <input type='text' name='GuestID1'><br><br>
                        <b>Guest Name 2:</b>
                        <input type='text' name='GuestName2'><br><br>
                        <b>Guest ID 2:</b>
                        <input type='text' name='GuestID2'><br><br>
                        <b>Guest Name 3:</b>
                        <input type='text' name='GuestName3'><br><br>
                        <b>Guest ID 3:</b>
                        <input type='text' name='GuestID3'><br><br>
                        <b>Guest Name 4:</b>
                        <input type='text' name='GuestName4'><br><br>
                        <b>Guest ID 4</b>
                        <input type='text' name='GuestID4'>";
                        break;
                    }
                    echo "<br><input type='submit' name='Submit' value='Submit'></form>";
                }
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "web-project";
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if (isset($_POST['Submit']) && $guestNo > 0) {
                    
                }
                ?>
    </body>
</html>