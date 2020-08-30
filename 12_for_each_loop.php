<?php

$arr = array("Happy" , "Sad" , "Emotional" , "Crying");

for ($i=0; $i < count($arr); $i++) { 
    echo "$arr[$i]";
    echo "<br>";
}

echo " <br> Better way to do this <br>";
// Better way to do this

echo "<br>";

foreach ($arr as $value) {
    echo "$value <br>";
}

//Created By NorthFox PHP Developers
?>