<html>
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="homeStyle.css">
</head>

<body style="height:1500px">
<?php
        if(session_id() == '') {
            session_start();
        }
        ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Hurghada GRND Hotel</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <?php if (isset($_SESSION['Fname'])) {
            echo "<li class='nav-item'>
            <a class='nav-link' href='SignOut.php'>Sign Out</a>
            </li>";
        }
        else {
            echo "<li class='nav-item'>
            <a class='nav-link' href='Login.php'>Login</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' href='SignUp.php'>Register</a>
            </li>";
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" id ="contact" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled " id="username" href="#"></a>
        </li>
        <?php if (isset($_SESSION['Fname'])) {
            echo "<script>
            document.getElementById('username').innerHTML = 'Welcome ".$_SESSION['Fname']."';
            document.getElementById('username').style.visibility = 'visible';
            document.getElementById('username').style.textAlign = right;
            </script>";
        }
        else {
            echo "<script>
            document.getElementById('username').style.visiblity ='hidden';
            </script>";
        }
        ?>
    </ul>
</nav>
</body>
</html>