<?php
header("HTTP/1.1 403 Forbidden");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";
// Tables (clients, guests, rooms)
$conn = new mysqli($servername, $username, $password, $dbname);
?>