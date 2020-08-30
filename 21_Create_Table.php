<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
    die("Sorry We can't connect to Database");
}else {
    echo "Connection was successfully<br>";
}

// Create a table in database
$sql = "CREATE TABLE `phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`));";


// Check for the table connection
$result = mysqli_query($conn , $sql);

if ($result) {
    echo "The Table was Created Successfully !!";
}
else {
    echo "The Table was not created because of this error --->". mysqli_error($conn);
}

//Created By NorthFox PHP Developers
?>