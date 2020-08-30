<?php

$fptr = fopen("DemoFiles/myFile2.txt" ,"a");

fwrite($fptr, "\nThis is New Line in MyFiles 2.\n");

fwrite($fptr, "This is New Second Line in MyFiles 2.");

fclose($fptr);

//Created By NorthFox PHP Developers
?>