<?php

$fptr = fopen("DemoFiles/myFile2.txt" ,"w");

fwrite($fptr, "This is First Line in MyFiles 2.\n");

fwrite($fptr, "This is Second Line in MyFiles 2.");

fclose($fptr);

//Created By NorthFox PHP Developers
?>