<?php
// Connect to Database

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry We can't connect to Database");
} else {
    echo "Connection was successfully";
}

//Created By NorthFox PHP Developers
?>