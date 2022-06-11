<html>
    <head>
        <title>Search For Rooms</title>
        <link rel="icon" href="favicon.png">
    </head>
    <body>
        <style>
            .button {
                transition-duration: 0.4s;
            }
            .button:hover {
                background-color: #f44336; /* Green */
                color: white;
            }
            </style>
        <?php include "adminHome.php"; ?>
        <br><br><br>
        <h2>Room Search</h2>
        <div id="Form">
        <form method="post" id="searchForm">
            <input type="radio" name="searchOption" value="roomNo">
            <label for="RoomNo">Room Number</label><br>
            <input type="radio" name="searchOption" value="name">
            <label for="name">Name</label><br>
            <input type="text" name="searchValue"><br><br>
            <input type="submit" name="search" value="Search" class="button">
        </form>
        </div>
        <?php
        require_once "dbconnection.php";
        if (!isset($_SESSION['Role'])) {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        if (isset($_POST['search'])) {
            if (empty($_POST['searchValue'])) {
                echo "<script>alert('Please Enter the value to search for')</script>";
                die();
            }
            else if (empty($_POST['searchOption'])) {
                echo "<script>alert('Please select an option')</script>";
                die();
            }
            $value = $_POST['searchOption'];
            if ($value == "roomNo") {
                $sql = "SELECT * FROM rooms WHERE RoomNumber=".$_POST['searchValue'];
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<script>
                        document.getElementById('Form').style.display = 'none'
                        </script>
                        <table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
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
                    echo "<script>
                    document.getElementById('Form').style.display = 'none'
                    </script>
                    <table class='table table-hover' id='checkOutTable' style='width:90%;margin-left: auto;margin-right:auto;'>
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