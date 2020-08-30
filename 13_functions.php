<?php

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$darkweb  = [87 , 85 , 95 , 98 , 99];
$sumMarks = processMarks($darkweb);

echo "Total marks scored by Darkweb out of 500 is $sumMarks";

//Created By NorthFox PHP Developers
?>