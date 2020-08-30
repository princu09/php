<?php

//1. Mysqli Extension
//2. PDO php data objects
// Connect to Database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$connect = mysqli_connect($servername , $username , $password);

if (!$connect) {
    echo "Sorry We can't connect to Database";
}else {
    echo "Connection was successfully";
}

//Created By NorthFox PHP Developers
?>