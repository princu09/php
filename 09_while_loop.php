<?php

$i = 0;

while ($i < 5) {
    echo $i+1;
    echo"<br>";
    $i++;
}

echo "<br>";
echo "<br>";

$j = 0;
while ($j < 5) {
    echo $j+1;
    echo"<br>";
    $j+=2;
}

echo "<br>";
echo "<br>";

while ($j < 30 && $i <50) {
    echo $j+1;
    echo '<br>';
    echo '<br>';
    echo $i+1;
    echo"<br>";
    
    $j+=2;
    $i+=4;
}
//Created By NorthFox PHP Developers
?>