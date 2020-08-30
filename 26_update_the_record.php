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
    echo "Connection was successfully";
}
echo "<br>";

$sql = "SELECT * FROM `phptrip` WHERE `dest`='Ahmedabad'";
$result = mysqli_query($conn , $sql);

$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in Database";
echo "<br>";

$no = 1;

if ($num > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $no .". ". "Hello " .  $row['name'] . " " . "Welcome to " . $row['dest'] ;
        echo "<br>";
        $no = $no +1;
    }
}

echo "<br>";

$sql = "UPDATE `phptrip` SET `name` = 'Gaurav2' WHERE `sno` = 3;";
$result = mysqli_query($conn ,$sql);

if ($result) {
    echo "We Updated the records Successfully.";
}
else {
    echo "We couldn't Updated the records Successfully.";
}

$aff = mysqli_affected_rows($conn);
echo "<br> Number of Affected Rows : $aff <br>" 

//Created By NorthFox PHP Developers

?>