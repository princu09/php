<?php

// String
$name = "North Fox";
echo $name;
echo "<br>";


// String Length
$length = "NorthFoxDevelopers";
echo strlen($length);
echo "<br>";


// Joint Some Strings
$JoinString = "Hello";
echo "The string" . "length is " . strlen($JoinString);
echo "<br>";

// Word Count
$word = "This is Some Words";
echo str_word_count($word);
echo "<br>";

// String Reverse
$revString = "Hello Developers";
echo strrev($revString);
echo "<br>";

// Position In String
$searchStr = "Hello Developers";
echo strpos($searchStr , "Deve"); 
echo "<br>";

// Replace in String
$repString = "He is Good";
echo str_replace("He" , "She" , $repString);
echo "<br>";

// Repeat String
$repeatStr = "Fox <br>";
echo str_repeat($repeatStr , 10);
echo "<br>";

// Trim String
echo "<pre>";
echo rtrim("    This is Right Trim      ");
echo "<br>";

echo ltrim("    This is Left Trim       ");
echo "<br>";
echo "</pre>";


//Created By NorthFox PHP Developers
?>