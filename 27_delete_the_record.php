<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

// ----------Delete rows Normaly-------------------

echo "Delete Row in Single";

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'mansa'";

$result = mysqli_query($conn , $sql);

$aff = mysqli_affected_rows($conn);

echo "Number of Affected Rows : $aff <br>";

if ($result) {
    echo "Deleted Successfully";
}else {
    $err = mysql_error($conn);
    echo "Operation Can't Successfull --> $err";
}

echo "<br><br><br><br>";
echo "Delete Row in Bulk";

// ----------Delete rows in limit-------------------

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'mansa' LIMIT 2";

$result = mysqli_query($conn , $sql);

$aff = mysqli_affected_rows($conn);

echo "<br><br> Number of Affected Rows : $aff <br>";

if ($result) {
    echo "Deleted Successfully";
}else {
    $err = mysql_error($conn);
    echo "Operation Can't Successfull --> $err";
}
//Created By NorthFox PHP Developers

?>
