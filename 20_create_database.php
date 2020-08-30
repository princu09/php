<?php

//1. Mysqli Extension
//2. PDO php data objects
// Connect to Database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection

$conn = mysqli_connect($servername , $username , $password);


$sql = "CREATE DATABASE dbPHP1";
$result = mysqli_query($conn , $sql);

if ($result) {
    echo "The Database was Created Successfully !!";
}
else {
    echo "The Database was not created because of this error --->". mysqli_error($conn);
}

//Created By NorthFox PHP Developers
?>