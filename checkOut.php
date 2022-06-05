<html>
    <head>
        <title>Check Out</title>
        <link rel="icon" href="favicon.png">
    </head>
    <body>
        <style>
            h6 {
                display: inline;
            }
        </style>
        <?php include 'home.php'; ?>
        <br><br><br>
        <h2>Check Out</h2>
        <form method="POST"> 
            <h6>Visa Card Number:</h6> <input type="text" name="visacard" required="required"><br>
            <h6>Expiry Date:</h6> <input type="text" name="expiry" required="required"><br>
            <h6>CVV:</h6> <input type="text" name="cvv" required="required"><br>
            <input type="submit" name="book" value="Book Room">
        </form>
        <?php
        require_once 'dbconnection.php';
         if(session_id() == '') {
            session_start();
        }
        if (!isset($_SESSION['Email'])) {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";
        }
        else if (!isset($_SESSION['roomBooked']) && $_SESSION['roomBooked'] !== "true") {
            echo "<script>
            window.location.href ='home.php';
            alert('You don\'t have access to this page')
            </script>";   
        }
        if (isset($_POST['book'])) {
            if (empty($_POST['visacard']) || empty($_POST['expiry']) || empty($_POST['cvv'])) {
                echo "<script>
                alert('Please fill all of the required fields')
                </script>";
            }
            $sql = "update rooms set Paid = 'Yes' where UserID = '".$_SESSION['ID']."'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
                window.location.href ='reservationList.php';
                alert('Your reservation has been confirmed, Enjoy your stay')
                </script>";
            }
        }
        ?>
    </body>
</html>
