<html>
    <head><title>Guests Information</title></head>
    <body>
        <style>
            h4 { display: inline; }
            </style>
        <?php include "home.php"; ?>
        <h3>Guest Information</h3>
        <?php
        if (!isset($_COOKIE['roomBooked'])) {
            echo "<script>
                 window.location.href ='home.php';
                 alert('You don\'t have access to this page')
                 </script>";
        }
        require_once 'dbConnection.php';
        if(session_id() == '') {
            session_start();
        }
        $guestNo = $_SESSION['guests'];
        $guestNoDB = $guestNo + 1;
        $name = $_SESSION['Fname'] . " " . $_SESSION['Lname'];
        ?>
        <br><h4>Total guests are: <?php echo $_SESSION['guests'] ?> </h4>
        <br><br><form method='post'>
        <?php
        switch ($guestNo) {
            case 1: ?>
                <b>Guest Name 1:</b>
                <input type='text' name='GuestName1'><br>
                <b>Guest ID 1:</b>
                <input type='text' name='GuestID1'>
                <?php
                break;
            case 2: ?>
                <b>Guest Name 1:</b>
                <input type='text' name='GuestName1'><br><br>
                <b>Guest ID 1:</b>
                <input type='text' name='GuestID1'><br><br>
                <b>Guest Name 2:</b>
                <input type='text' name='GuestName2'><br><br>
                <b>Guest ID 2:</b>
                <input type='text' name='GuestID2'>
                <?php
                break;
            case 3: ?>
                <b>Guest Name 1:</b>
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
                <input type='text' name='GuestID3'>
                <?php
                break;
            }
            ?>
            <br><input type='Submit' name='Submit' value='Submit'></form>
            <?php
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
                        else if (!is_numeric($_POST['GuestID1']) || strlen($_POST['GuestID1']) != 14) {
                             echo "<script>
                             alert('Enter Valid National ID for the guest')
                             </script>";
                        }
                        $sql = "insert into guests(UserID, Name, TotalGuests, Guest1Name, Guest1ID) values('".$_SESSION['ID']."','".$name."','".$guestNoDB."','".$_POST['GuestName1']."','".$_POST['GuestID1']."')";
                        $result=mysqli_query($conn,$sql);
                        if ($result) {
                            $_SESSION['NoOfGuests'] = $guestNoDb;
                            header("Location:home.php");
                        }
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
                            else if (!is_numeric($_POST['GuestID1']) || !is_numeric($_POST['GuestID2']) || strlen($_POST['GuestID1']) != 14 || strlen($_POST['GuestID2']) != 14) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Name, TotalGuests, Guest1Name, Guest1ID, Guest2Name, Guest2ID) values('".$_SESSION['ID']."','".$name."','".$guestNoDB."','".$_POST['GuestName1']."','".$_POST['GuestID1']."','".$_POST['GuestName2']."','".$_POST['GuestID2']."')";
                            $result=mysqli_query($conn,$sql);
                            if ($result) {
                                $_SESSION['NoOfGuests'] = $guestNoDb;
                                header("Location:home.php");
                            }
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
                            else if (!is_numeric($_POST['GuestID1']) || !is_numeric($_POST['GuestID2']) || !is_numeric($_POST['GuestID3']) || strlen($_POST['GuestID1']) != 14 || strlen($_POST['GuestID2']) != 14 || strlen($_POST['GuestID3']) != 14) {
                                echo "<script>
                                alert('Enter Valid National ID for the guest')
                                </script>";
                            }
                            $sql = "insert into guests(UserID, Name, TotalGuests, Guest1Name, Guest1ID, Guest2Name, Guest2ID, Guest3Name, Guest3ID) values('".$_SESSION['ID']."','".$name."','".$guestNoDB."','".$_POST['GuestName1']."','".$_POST['GuestID1']."','".$_POST['GuestName2']."','".$_POST['GuestID2']."','".$_POST['GuestName3']."','".$_POST['GuestID3']."')";
                            $result=mysqli_query($conn,$sql);
                            if ($result) {
                                $_SESSION['NoOfGuests'] = $guestNoDb;
                                header("Location:home.php");
                            }
                            break;
                    }
                }
                ?>
    </body>
</html>