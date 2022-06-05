<html>
    <head>
        <title>Manage Accounts</title>
        <link rel="icon" href="favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <?php include "adminHome.php"; ?>
        <br><br><br>
        <h2>Manage Accounts</h2>
        <?php
        require_once "dbconnection.php";
        if (!isset($_SESSION['Role']) && $_SESSION['Role'] != "QA") {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        $sql = "SELECT * FROM staff";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            ?>
            <table class='table table-hover' id='manageAccounts' style='width:90%;margin-left: auto;margin-right:auto;'>
                        <thead class='thead-dark'>
                            <tr>
                                <th scope='col'>Staff ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Password</th>
                                <th scope='col'>Role</th>
                                <th scope='col'>Enabled</th>
                                <th scope='col'>Delete</th>
                                <th scope='col'>Restrict</th>
                                <th scope='col'>Promote</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = $result->fetch_assoc()) {
                            $staffID = $row['StaffID'];
                            echo "<tr id='row'>
                            <th scope='row'>".$staffID."</th>
                            <td>".$row['Name']."</td>
                            <td>".$row['Password']."</td>
                            <td id='role_".$staffID."'>".$row['Role']."</td>
                            <td>".$row['Enabled']."</td>
                            <td><button type='button' class='deleteAccount' id='".$staffID."' value='Delete'>Delete</button></td>
                            <td><button type='button' class='restrictAccount' id='".$staffID."' value='Restrict'>Restrict</button></td>";
                            if ($row['Role'] == "Receptionist") {
                                echo "<td><button type='button' class='promoteAccount' id='".$staffID."' onclick='promote(this.id)' value='Promote'>Promote</button></td>";
                            }
                            echo "</tr>";
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
                            $(".deleteAccount").click(function(){
                                var id = $(this).attr('id');
                                if (confirm("Are you sure you want to delete this account")) {
                                    var http = new XMLHttpRequest();
                                    var url = "deleteStaffAccount.php";
                                    var params = "id="+id;
                                    http.open("POST", url, true);
                                    http.onreadystatechange = function() {
                                        if(http.readyState == 4 && http.status == 200) {
                                            alert("Deleted Successfully");
                                        }
                                    }
                                    http.send(params);
                                    $(this).closest('tr').css('background','tomato');
                                    $(this).closest('tr').fadeOut(800,function(){
                                        $(this).closest('tr').remove();
                                    });
                                }
                        });
                        $(".restrictAccount").click(function(){
                            var reason = prompt("Enter reason to Enable/Disable this account: ");
                            if (reason == "" || reason == null) {
                                exit();
                            } 
                        })
                    });
                        </script>
                        <script>
                            const promote=( id=false )=>{
                                if( id ){
                                    if (confirm("Are you sure you want to promote this accont?")) {
                                    let fd= new FormData();
                                    fd.set('id',id);
                                    fetch('promoteAccount.php', {method:'post', body:fd})
                                    .then(r=>r.text())
                                    .then(text=>{
                                        document.getElementById("role_"+id).innerHTML = "QA";
                                    })
                                }
                            }
                            }
                        </script>
        </body>
        </html>