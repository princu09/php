<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phptuts";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn , $sql);

$num = mysqli_num_rows($result);
echo $num . " Records Found in Database";
echo "<br>";

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Welcome " . $row['f_name'] . " " . $row['l_name'];
        echo "<br>";
    }
}

//Created By NorthFox PHP Developers

?>