<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="icon" href="favicon.png">
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <br><br><br>
        <h2>Reservation List</h2>
                <?php
                if(session_id() == '') {
                    session_start();
                }
                if (!isset($_SESSION['Email'])) {
                    echo "<script>
                    window.location.href ='home.php';
                    alert('You don\'t have access to this page')
                    </script>";
                }
                require_once "dbConnection.php";
                $sql = "SELECT * FROM rooms WHERE UserID = '".$_SESSION['ID']."'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    echo "<table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
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
                                <th scope='col'>Delete</th>
                            </tr>
                        </thead>";
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
                        <td><button type='button' class='deleteRoom' id='".$roomNo."' value='Delete'>Delete</button></td>
                        </tr>";
                    }
                    echo "</tbody></table>";
                        ?>
                        <script>
                            $(document).ready(function(){
                                $('.deleteRoom').click(function(){
                                    var el = this;
                                    var roomID = $(this).attr('id');
                                    if (confirm("Do you really want to delete this row?")) {
                                        $.ajax({
                                            url: 'delete.php',
                                            type: 'GET',
                                            data: {id: roomID},
                                            success: function(response){
                                                if(response == 1){
                                                    $(this).closest('tr').remove();
                                                }
                                                else{
                                                    alert('Record not deleted.');
                                                }
                                            }
                                        });
                                    }
                            });
                        });
                    </script>
                    <?php
                }
                else {
                    echo "No Data to show";
                }
                    ?>
            </tbody>
        </table>
    </body>
</html>