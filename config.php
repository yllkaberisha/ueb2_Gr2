<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "shop_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>