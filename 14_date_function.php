<?php

// Print Day Like Sunday , Monday
$d = date("l");
echo "Todays date is $d <br>";

// Print Day & Date Like 12 Sunday , 13 Monday
$d = date("d l");
echo "Todays date is $d <br>";

// Print Day & Date Like 12th Sunday , 13 Monday
$d = date("dS");
echo "Todays date is $d <br>";

// Print Day , Month & Date Like 12th Jan Sunday
$d = date("dS F");
echo "Todays date is $d <br>";

// Print Day , Month , Year & Date Like 12th Jan 2020 Sunday
$d = date("dS F Y");
echo "Todays date is $d <br>";

// Print Copyright Year in Footer Like This 2020 © NorthFox Group
$year = date("Y");
echo "$year © NorthFox Group | All Rights Reserved <br>";

//Created By NorthFox PHP Developers
?>