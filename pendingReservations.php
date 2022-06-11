<html>
    <head>
        <title>Pending Rooms</title>
        <link rel="icon" href="favicon.png">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include "adminHome.php"; ?>
        <br><br><br>
        <h2>Pending Rooms</h2>
        <?php
        require_once "dbconnection.php";
        if (!isset($_SESSION['Role'])) {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        $sql = "SELECT * FROM rooms WHERE Pending != 'No'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            ?>
            <table class='table table-hover' id='manageRoomsTable' style='width:90%;margin-left: auto;margin-right:auto;'>
                        <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>User ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Room Type</th>
                                <th scope='col'>RoomNumber</th>
                                <th scope='col'>Board</th>
                                <th scope='col'>Extra</th>
                                <th scope='col'>Check In Date</th>
                                <th scope='col'>Check Out Date</th>
                                <th scope='col'>Paid</th>
                                <th scope='col'>Request</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = $result->fetch_assoc()) {
                            $roomNo = $row['RoomNumber'];
                            echo "<tr id='".$roomNo."'>
                            <th scope='row'>".$row["UserID"]."</th>
                            <td>".$row['Name']."</td>
                            <td>".$row['RoomType']."</td>
                            <td>".$roomNo."</td>
                            <td>".$row['Board']."</td>
                            <td>".$row['Extra']."</td>
                            <td>".$row['CheckinDate']."</td>
                            <td>".$row['CheckoutDate']."</td>
                            <td>".$row['Paid']."</td>
                            <td><button type='button' class='confirmRoom' id='".$roomNo."' value='Confirm'>Confirm</button></td>
                            </tr>";
                        }
                        ?>
                        </tbody></table>
                        <?php
                        }
                        else {
                            echo "No Data to show";
                        }
                        ?>
                        <script>
                            $(document).ready(function(){
                                $('.confirmRoom').click(function(){
                                    var el = this;
                                    var roomNo = $(this).attr('id');
                                        $.ajax({
                                            url: 'acceptRoom.php',
                                            type: 'POST',
                                            data: {roomNo: roomNo},
                                            success: function(response){
                                                alert("Room has been confirmed");
                                                $(el).closest('tr').remove();
                                            },
                                            error: function(response) {
                                                alert("Unable to do this action");
                                            }
                                        });
                            });
                        });
                    </script>
        </body>
        </html>