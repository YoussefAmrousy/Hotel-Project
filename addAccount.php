<html>
    <head>
        <title>Add Account</title>
        <link rel="icon" href="favicon.png">
    </head>
    <body>
        <?php
        include 'adminHome.php';
        if (!isset($_SESSION['Role']) && $_SESSION['Role'] != "QA") {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        ?>
        <br><br><br>
        <h2>Add Account</h2>
        <form method="post">
            Name: <input type="text" name="name" required="required"><br>
            Email: <input type="text" name="email" required="required"><br>
            Password: <input type="text" name="password" required="required"><br>
            Role: <select name="role">
                <option value="Receptionist">Receptionist</option>
                <option value="QA">Quality Assurance</option>
            </select><br>
            <input type="submit" name="add" value="Add Account">
        </form>
        <?php
        require_once 'dbConnection.php';
        if (isset($_POST['add'])) {
            $emailSql = "SELECT * FROM staff WHERE Email = '".$_POST['email']."'";
            $emailResult = mysqli_query($conn, $emailSql);
            $nameSql = "SELECT * FROM staff WHERE Name = '".$_POST['name']."'";
            $nameResult = mysqli_query($conn, $nameSql);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                echo "<script>
                alert('Inavlid name, please change it to another one')
                </script>";
                die();
              }
            else if ($emailResult->num_rows > 0) {
                echo "<script>
                alert('This email is already reserved for another staff, Choose another one')
                </script>";
                die();
            }
            else if ($nameResult->num_rows > 0) {
                echo "<script>
                alert('This name is already taken, Choose another one')
                </script>";
                die();
            }
            $email = $_POST['email']."@grnd.com";
            $sql = "INSERT INTO staff(Name, Email, Password, Role, Enabled) values('".$_POST['name']."','".$email."','".$_POST['password']."','".$_POST['role']."','True')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
                alert('Account was added successfully')
                </script>";
            }
        }
        ?>
    </body>
</html>
