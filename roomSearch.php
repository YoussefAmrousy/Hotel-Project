<html>
    <head>
        <title>Search For Rooms</title>
    </head>
    <body>
        <?php include "home.php"; ?>
        <br><br><br>
        <h2>Room Search</h2>
        <form method="post" id="searchForm">
            <input type="radio" name="searchOption" value="roomNo">
            <label for="RoomNo">Room Number</label><br>
            <input type="radio" name="searchOption" value="name">
            <label for="name">Name</label><br>
            <input type="text" name="searchValue"><br>
            <input type="submit" name="search" value="Search">
        </form>
        <?php
        require_once "dbconnection.php";
        if (isset($_POST['search'])) {
            if (empty($_POST['searchValue'])) {
                echo "<script>alert('Please Enter the value to search for')</script>";
            }
            else if (empty($_POST['searchOption'])) {
                echo "<script>alert('Please select an option')</script>";
            }
            $value = $_POST['searchOption'];
            if ($value == "roomNo") {
                $sql = "SELECT * FROM rooms WHERE RoomNumber=".$_POST['searchValue'];
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
                        <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>User ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Room Type</th>
                                <th scope='col'>Room Number</th>
                                <th scope='col'>Board</th>
                                <th scope='col'>Extra</th>
                                <th scope='col'>Check In Date</th>
                                <th scope='col'>Check Out Date</th>
                                <th scope='col'>Paid</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <th scope='row'>".$row["UserID"]."</th>
                        <td>".$row['Name']."</td>
                        <td>".$row['RoomType']."</td>
                        <td>".$row['RoomNumber']."</td>
                        <td>".$row['Board']."</td>
                        <td>".$row['Extra']."</td>
                        <td>".$row['CheckinDate']."</td>
                        <td>".$row['CheckoutDate']."</td>
                        <td>".$row['Paid']."</td>
                        </tr>
                        </tbody>
                        </table>";
                    }
                }
                else {
                    echo "No Data to show";
                }
            }
            else {
                $sqlname = "SELECT * FROM rooms WHERE Name ='".$_POST['searchValue']."'";
                $resultname = mysqli_query($conn, $sqlname);
                if ($resultname->num_rows > 0) {
                    echo "<table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
                           <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>User ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Room Type</th>
                                <th scope='col'>Room Number</th>
                                <th scope='col'>Board</th>
                                <th scope='col'>Extra</th>
                                <th scope='col'>Check In Date</th>
                                <th scope='col'>Check Out Date</th>
                                <th scope='col'>Paid</th>
                            </tr>
                        </thead>";
                    while ($row = $resultname->fetch_assoc()) {
                        echo "<tbody>
                        <tr>
                        <th scope='row'>".$row["UserID"]."</th>
                        <td>".$row['Name']."</td>
                        <td>".$row['RoomType']."</td>
                        <td>".$row['RoomNumber']."</td>
                        <td>".$row['Board']."</td>
                        <td>".$row['Extra']."</td>
                        <td>".$row['CheckinDate']."</td>
                        <td>".$row['CheckoutDate']."</td>
                        <td>".$row['Paid']."</td>
                        </tr>";
                    }
                    echo "</tbody></table>";
                }
                else {
                    echo "No Data to show";
                }
            }
        }
        ?>
    </body>
</html>