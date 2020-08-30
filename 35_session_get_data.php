<?php

// Start Session and get data
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . ".";
    echo "<br> Your Favorite Category is " . $_SESSION['favData'];
    echo "<br>";
}
else {
    echo "Please Login to Continue";
}
//Created By NorthFox PHP Developers
?>