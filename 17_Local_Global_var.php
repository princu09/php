<?php

echo "Welcome to scope and local/global vars in php<br>";
$a = 58; // Global Variable
$b = 56;

function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 500;
    $b = 600;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a . "<br>"; 
echo $b; 

printValue();

echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";

// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

//Created By NorthFox PHP Developers
?>