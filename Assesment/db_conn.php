<?php
$servername = "localhost";
$username = "lance";
$password = "lance";
$dbname = "assess";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("connectin failed " . mysqli_connect_error());

}
//echo "Connected  sucessfully";