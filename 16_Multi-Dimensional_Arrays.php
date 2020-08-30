<?php

$mda = array(
    array(2,5,6,5),
    array(6,5,4,1),
    array(2,5,6,0),
);


echo var_dump($mda);

echo "<br><br>";

// here print array 2 in 2nd position 5
echo $mda[1][2];


// Print 2 Daimensional Array
for ($i=0; $i < count($mda); $i++) { 
    echo var_dump($mda[$i]);
    echo "<br>";
}


echo "<br>";

for ($i=0; $i < count($mda); $i++) { 
    for ($j=0; $j < count($mda[$i]); $j++) { 
        echo $mda[$i][$j];
        echo " ";
    }
    echo "<br>";
}

//Created By NorthFox PHP Developers
?>