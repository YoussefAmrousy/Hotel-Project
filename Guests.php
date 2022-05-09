<html>
    <head><title>Guests Information</title></head>
    <body>
        <style>
            h4 { display: inline; }
            </style>
        <?php include "home.php"; ?>
        <h3>Guest Information</h3>
        <?php
        if(session_id() == '') {
            session_start();
        }
        $guestNo = $_SESSION['NoOfGuests'];
            echo "<br><h4>Total guests are: ".$_SESSION['NoOfGuests']."</h4><br><br><form method='post'>";
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
                echo "<br><input type='Submit' name='Submit' value='Submit'></form>";
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "web-project";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if (isset($_POST['Submit'])) {
                    switch($guestNo) {
                        case 1:
                            if (empty($_POST['GuestName1']) || empty($_POST['GuestID1'])) {
                                echo "<script>
                                alert('Please fill of the fields')
                                </script>";
                            }
                            else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName1'])) {
                                echo "<script>
                                alert('Only letters and white spaces allowed')
                                </script>";
                            }
                            else if (!is_numeric($_POST['GuestID1'])) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Guest1Name, Guest1ID) values('".$_SESSION['ID']."','".$_POST['GuestName1']."','".$_POST['GuestID1']."')";
                            $result=mysqli_query($conn,$sql);
                            break;
                        case 2:
                            if (empty($_POST['GuestName1']) || empty($_POST['GuestID1']) || empty($_POST['GuestName2']) || empty($_POST['GuestID2'])) {
                                echo "<script>
                                alert('Please fill of the fields')
                                </script>";
                            }
                            else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName1']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName2'])) {
                                echo "<script>
                                alert('Only letters and white spaces allowed')
                                </script>";
                            }
                            else if (!is_numeric($_POST['GuestID1']) || !is_numeric($_POST['GuestID2'])) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Guest1Name, Guest1ID, Guest2Name, Guest2ID) values('".$_SESSION['ID']."','".$_POST['GuestName1']."','".$_POST['GuestID1']."','".$_POST['GuestName2']."','".$_POST['GuestID2']."')";
                            $result=mysqli_query($conn,$sql);
                            break;
                        case 3:
                            if (empty($_POST['GuestName1']) || empty($_POST['GuestID1']) || empty($_POST['GuestName2']) || empty($_POST['GuestID2']) || empty($_POST['GuestName3']) || empty($_POST['GuestID3'])) {
                                echo "<script>
                                alert('Please fill of the fields')
                                </script>";
                            }
                            else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName1']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName2']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName3'])) {
                                echo "<script>
                                alert('Only letters and white spaces allowed')
                                </script>";
                            }
                            else if (!is_numeric($_POST['GuestID1']) || !is_numeric($_POST['GuestID2']) || !is_numeric($_POST['GuestID3'])) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Guest1Name, Guest1ID, Guest2Name, Guest2ID, Guest3Name, Guest3ID) values('".$_SESSION['ID']."','".$_POST['GuestName1']."','".$_POST['GuestID1']."','".$_POST['GuestName2']."','".$_POST['GuestID2']."','".$_POST['GuestName3']."','".$_POST['GuestID3']."')";
                            $result=mysqli_query($conn,$sql);
                            break;
                        case 4:
                            if (empty($_POST['GuestName1']) || empty($_POST['GuestID1']) || empty($_POST['GuestName2']) || empty($_POST['GuestID2']) || empty($_POST['GuestName3']) || empty($_POST['GuestID3']) || empty($_POST['GuestName4']) || empty($_POST['GuestID4'])) {
                                echo "<script>
                                alert('Please fill of the fields')
                                </script>";
                            }
                            else if (!preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName1']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName2']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName3']) || !preg_match("/^[a-zA-Z-']*$/",$_POST['GuestName4'])) {
                                echo "<script>
                                alert('Only letters and white spaces allowed')
                                </script>";
                            }
                            else if (!is_numeric($_POST['GuestID1']) || !is_numeric($_POST['GuestID2']) || !is_numeric($_POST['GuestID3']) || !is_numeric($_POST['GuestID4'])) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Guest1Name, Guest1ID, Guest2Name, Guest2ID, Guest3Name, Guest3ID, Guest4Name, Guest4ID) values('".$_SESSION['ID']."','".$_POST['GuestName1']."','".$_POST['GuestID1']."','".$_POST['GuestName2']."','".$_POST['GuestID2']."','".$_POST['GuestName3']."','".$_POST['GuestID3']."','".$_POST['GuestName4']."','".$_POST['GuestID4']."')";
                            $result=mysqli_query($conn,$sql);
                            break;
                    }
                    unset($_SESSION['NoOfGuests']);
                }
                ?>
    </body>
</html>