<?php

// Simple Array
$arr = array('this' , 'that' , 'what');
echo $arr[0];

echo "<br>";

// Associative Array

$favColor = array('prince' => 'red', 'gaurav' => 'blue' , 'harsh' =>'green' ,'brij'  => 'black');

// simple type to print
echo $favColor['prince'];
echo "<br>";
echo $favColor['gaurav'];
echo "<br>";

// now print using foreach loop

foreach ($favColor as $key => $value) {
    echo "Favorite Color of $key is $value <br>";
}
//Created By NorthFox PHP Developers

?>