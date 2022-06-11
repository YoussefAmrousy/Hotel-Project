<html>
    <head>
    <style>
body {
    font-family: 'Roboto', sans-serif!important;
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.mainscreen
{
	min-height: 100vh;
	width: 100%;
	display: flex;
    flex-direction: column;
    background-color: #DFDBE5;
    background-image: url("https://wallpaperaccess.com/full/3063067.png");
    color:#963E7B;
}
.card {
	width: 60rem;
    margin: auto;
    background: white;
    position:center;
    align-self: center;
    top: 50rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display:flex;
    flex-direction: row;
}

.leftside {
	background: #ffffff;
	width: 25rem;
    align-items: center;
	border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
	width: 20em;
    height: 20em;
    border-radius: 100%;
}
.rightside {
    background-color: #ffffff;
	width: 600px;
	border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 0.1rem 0.1rem 1.5rem 1rem;
}
p{
    display:block;
    font-size: 15px;
}
.inputbox
{
    color:#030303;
	width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
  outline:none;
}
.expcvv {
    display:flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}
.button{
    background: linear-gradient(
135deg
, #753370 0%, #298096 100%);
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width:250px;
    letter-spacing: .11rem;
    outline:none;
}
.button:hover
{
	transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}
</style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="mainscreen">
      <div class="card">
        <div class="leftside">
          <img src="https://c4.wallpaperflare.com/wallpaper/359/481/80/luxury-hotel-room-bedroom-furniture-set-wallpaper-preview.jpg" class="product">
        </div>
        <div class="rightside">
          <form action="" method="POST">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="name" required="required">
            <p>Card Number</p>
            <input type="text" class="inputbox" name="visacard" required="required">
            <p>Card Type</p>
            <select class="inputbox" name="card_type" required="required">
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="MasterCard">MasterCard</option>
            </select>
            <div class="expcvv">
            <p>Expiry </p>
            <input type="date" class="inputbox" name="expiry" min=<?php $mindate = date("Y-m-d"); echo $mindate; ?> max="2030-12-31" required="required">
            <p>CVV</p>
            <input type="text" class="inputbox" name="cvv" required="required">
            </div>
            <p></p>
            <input type="submit" class="button" name="checkout" value="Check Out"></button>
          </form>
        </div>
      </div>
    </div>
    <?php
    if(session_id() == '') {
        session_start();
    }
    require 'errorHandling.php';
    require_once 'dbconnection.php';
    if (isset($_POST['checkout'])) {
        if (is_numeric($_POST['visacard']) && !is_numeric($_POST['name']) && ctype_alpha($_POST['name']) && strlen($_POST['cvv']) == 3) {
            $sql = "UPDATE rooms SET Paid='Yes' WHERE UserID=".$_SESSION['ID'];
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
                window.location.href='home.php';
                alert('Room was booked successfully, Hope you enjoy your stay')
                </script>";
            }
        }
        else {
            echo "<script>
            alert('Invalid Credit Card Credentials')
            </script>";
            trigger_error("Invalid Credit Card Credentials");
        }
    }
    ?>
</body>
</html>