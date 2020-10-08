## PHP Free Source Code By NF PHP Developers

##### 📫 Connect with me here:<br />
 <br />
 <p>
  <a target="_blank" href="https://www.instagram.com/princu.09">
    <img src="https://img.shields.io/badge/princu.09-386938188?style=flat&logo=instagram&color=black">
  </a> &nbsp; 
  <a target="_blank" href="https://twitter.com/princu09">
    <img src="https://img.shields.io/badge/@princu09-30302f?style=flat&logo=twitter&color=black">
  </a>&nbsp; 
  <a target="_blank" href="https://github.com/princu09">
    <img src="https://img.shields.io/badge/@princu09-30302f?style=flat&logo=github&color=black">
  </a>&nbsp;
    <a target="_blank" href="https://www.t.me/proghub09">
    <img src="https://img.shields.io/badge/ProgHub09-386938188?style=flat&logo=telegram&color=black">
  </a>
</p>

![Logo Here](https://github.com/princu09/premiumaccounts/blob/master/Logo%20NFG.jpg?raw=true)

<!-- #### <span style="color:green">Projects IN This Git :</span>

<a href="https://github.com/princu09/php/tree/master/CRUDOperation">
    <img src="https://img.shields.io/badge/NFG-CRUD_Operations-386938188?style=flat&logo=github&color=black" height="25px">
</a> &nbsp;<a href="https://github.com/princu09/php/tree/master/LoginSystem">
    <img src="https://img.shields.io/badge/NFG-Login_System-386938188?style=flat&logo=github&color=black" height="25px">
</a>&nbsp;<a href="https://github.com/princu09/php/tree/master/ForumDiscuss">
    <img src="https://img.shields.io/badge/NFG-Forum_Discuss-386938188?style=flat&logo=github&color=black" height="25px">
</a> -->
  
##### Check All Files List :


| File Name & Link   | File Name & Link   | File Name & Link   | File Name & Link
------------- | ------------- | ----------- | ------------
[00 Hello World !](#hello-world-)  | [ Comments](#comments)   | [01 Sum](#sum) | [02 useInHTML ](#user-use-php-in-differents-parts)
[03 Variable](#variable)  | [04 Data Types](#data-types)   | [05 String](#string) | [05 String Length ](#string-length)
[05 Joint String](#joint-string)  | [05 Word Count](#word-count)   | [05 Reverse String](#reverse-string) | [05 Search In String ](#search-in-string)
[05 Replace In String](#replace-in-string)  | [05 Repeat In String](#repeat-in-string)   | [05 Trim String](#trim-in-string) | [06 Arithmetic Operators](#arithmetic-operators)
[06 Assignment Operators](#assignment-operators)  | [06 Comparison Operators](#comparison-operators)   | [06 Logical Operators](#logical-operators) | [07 If-Else](#if-else)
[07 If Else Ladder](#if-else-ladder)  | [08 Switch Case](#switch-case)   | [09 While Loop](#while-loop) | [10 For Loop](#for-loop)
[11 Do While Loop](#do-while-loop)  | [12 For Each Loop](#for-each-loop)   | [13 Functions](#functions) | [14 Date Functions](#date-functions)
[15 Associative Arrays](#associative-arrays)  | [16 Multi-Dimensional Arrays](#multi-dimensional-arrays)   | [17 Global Local Variable](#global-local-variable) | [18 Get Alert When Submit Form](#get-alert-when-submit-form)
[19 Connect to Database](#connect-to-database)  | [20 Create Database](#create-database)   | [21 Create Table using php File](#create-table-using-php-file) | [22 Insert Data](#insert-data)
[23 Store Form Data](#store-form-data)  | [24 Fetch Data](#fetch-data)   | [25 Print Particular Data](#print-particular-data) | [26 Update Records](#update-records)
[27 Delete the Record](#delete-the-records)  | [28 Files](#files-in-php) | [29 File Open Read Close](#file-open-read-close) | [30 Read Files](#read-files)
[31 Write Mode](#write-mode)  | [32 Append Mode](#append-mode) | [33 Cookies](#cookies) | [34 Sessions](#session-start) 
[35 Session Get Data](#session-get-data)  | [36 Logout](#session-destroy) 
<!-- | [33 Cookies](#cookies) | [34_sessions.php](#session-start)  -->


<br>
<br>

#### Hello World !

* File Name in Git : <b>[00_hello_world.php](00_hello_world.php)</b>

``` 
<?php
    echo "Hello World !";
?>
```

#### Comments

* File Name in Git : <b>No Files</b>

``` 
// This is Single Line Comments
/*
    This is
    Multie Line
    Comments
*/
```

#### Sum

* File Name in Git : <b>[01_sum.php](01_sum.php)</b>

``` 
<?php

    echo "sum answer is \n";
    echo "52+65";

?>
```

#### User use php in differents parts

* File Name in Git : <b>No files</b>

``` 
<?php
echo "Hello World !"; 
?>

<!-- Some Codes Here -->

<?php
echo "Hello World !"; 
?>

<!-- Some Codes Here -->

<?php
echo "Hello World !"; 
?>
```

#### Use php in HTML File Content

* File Name in Git : <b>[02_useInHTML.php](02_useInHTML.php)</b>

```
<! DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo "This is "; echo"title"?>
    </title>

</head>
<body>

    <?php echo"Hello World!"?>

</body>
</html>
```

#### Variable

* File Name in Git : <b>[03_variable.php](03_variable.php)</b>

``` 
<?php

// Variable are container to store information
// start with $
// Variable is Case Sensitive

$name = "Prince";
$company = "NorthFox Developers";

echo "Hello User !! I am $name and I am Owner of $company ";
?>
```
#### Data Types

* File Name in Git : <b>[04_data_types.php](04_data_types.php)</b>

```
<?php
$name = "NorthFox";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// String - sequence of characters

$name = "North";
$friend = 'Fox';
echo "$name $friend";


// Integer - Non decimal number

$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number

$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of classes

// Array - Used to store multiple values in a single variable

$friends = array("Prince", "North", "Fox", "Developers");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

//echo $friends[4]; // will throw an error as the size of 

array is 4

// NULL

$name = NULL;
echo var_dump($name);

?>
```
----
#### String

* File Name in Git : <b>[05_string_funcation.php](https://github.com/princu09/php/blob/master/05_string_function.php)</b>
```
<?php
    $name = "NorthFox";
    echo $name;
?>
```
#### String Length

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $name = "NorthFox";
    echo $name;

    echo "<br>";
    echo strlen($name)
?>
```
#### Joint String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    echo strlen($name);
    echo "<br>";
    echo "The string" . "length is " . strlen($name);
?>
```

#### Word Count

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $word = "This is Some Words";
    echo str_word_count($name);
?>
```
#### Reverse String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $revString = "Hello Developers";
    echo strrev($revString);
?>
```
#### Search In String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $searchStr = "Hello Developers";
    echo strpos($searchStr , Dev);
?>
```
#### Replace In String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $repString = "He is Good";
    echo str_replace("He" , "She" , $repString);
?>
```
#### Repeat In String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    $repeatStr = "Fox";
    echo str_repeat($repeatStr , 10);
?>
```
#### Trim In String

* File Name in Git : <b>[05_string_funcation.php](05_string_funcation.php)</b>
```
<?php
    echo "<pre>";
    echo rtrim("    This is Right Trim      ");
    echo "<br>";

    echo ltrim("    This is Left Trim       ");
    echo "<br>";
    echo "</pre>";
?>
```
---
#### Arithmetic Operators

* File Name in Git : <b>[06_operators.php](06_operators.php)</b>
```
<?php
    $a = 45;
    $b = 9;

    echo "For a + b, the result is " . ($a + $b) . "<br";

    echo "For a - b, the result is " . ($a - $b) . "<br";

    echo "For a * b, the result is " . ($a * $b) . "<br";

    echo "For a / b, the result is " . ($a / $b) . "<br";

    echo "For a % b, the result is " . ($a % $b) . "<br";

    echo "For a ** b, the result is " . ($a ** $b) . "<br";
?>
```
#### Assignment Operators

* File Name in Git : <b>[06_operators.php](06_operators.php)</b>
```
<?php
$x = $a;
echo "For x, the value is ". $x . "<br>";

$a += 6;
echo "For a, the value is ". $a . "<br>";

$a -= 6;
echo "For a, the value is ". $a . "<br>";

$a *= 6;
echo "For a, the value is ". $a . "<br>";

$a /= 5;
echo "For a, the value is ". $a . "<br>";

$a %= 5; // $a = $a % 5
echo "For a, the value is ". $a . "<br>";
?>
```
#### Comparison Operators

* File Name in Git : <b>[06_operators.php](06_operators.php)</b>
```
<?php
 
$x = 78;
$y = 78;

echo "For x > y, the result is ";
echo var_dump($x > $y);

echo "For x > y, the result is ";
echo var_dump($x >= $y);

echo "For x < y, the result is ";
echo var_dump($x < $y);

echo "For x < y, the result is ";
echo var_dump($x <= $y);

echo "For x <> y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";

?> 

```
#### Logical Operators

* File Name in Git : <b>[06_operators.php](06_operators.php)</b>
```
<?php

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";
?>
```
----
#### If Else

* File Name in Git : <b>[07_if_else_conditional.php](07_if_else_conditional.php)</b>
```
<?php

$a = 65;
$b = 9;


if ($a > 78) {
    echo "a is greater than 78";
}else {
    echo "a is not greater than 78";
}

echo"Done.";


?>
```

#### If Else Ladder

* File Name in Git : <b>[07_if_else_conditional.php](07_if_else_conditional.php)</b>
```
<?php

$age = 20;

if ($age > 18) {
   echo "You can Drive a Car.";
}
elseif ($age >16) {
    echo "You can Drive only Two Whihler without gear.";
}
else {
    echo "You can't Drive at your age.";
}

echo"Done.";

?>
```
----
#### Switch Case

* File Name in Git : <b>[08_switch_case.php](08_switch_case.php)</b>
```
<?php

$age = 18;

switch ($age) {
    case '18':
        echo "You Are Adult Now.";
        break;
    
    case '16':
        echo "You Are Adult Now but you can't show Porn.";
        break;
    
    default:
        echo "You are smaller than 18.";
        break;
}
?>
```


----
#### While Loop

* File Name in Git : <b>[09_while_loop.php](09_while_loop.php)</b>
```
<?php

$i = 0;

while ($i < 10) {
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
    echo"<br>";
    $j+=2;
    $i+=4;
}
?>
```


#### For Loop

* File Name in Git : <b>[10_for_loop.php](10_for_loop.php)</b>
```
<?php

for ($index=1; $index < 5; $index++) { 
//for (intialization , condition , updation)
    echo "The Number is $index <br>";
}

?>
```

#### Do While Loop

* File Name in Git : <b>[11_do_while_loop.php](11_do_while_loop.php)</b>
```
<?php

$i = 95;

do {
    echo "$i <br>";
} while ($i < 5);

?>
```


#### For Each Loop

* File Name in Git : <b>[12_for_each_loop.php](12_for_each_loop.php)</b>
```
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

?>
```
---

#### Functions

* File Name in Git : <b>[13_functions.php](13_functions.php)</b>
```
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
?>
```



#### Date Functions

* File Name in Git : <b>[14_date_function.php](14_date_function.php)</b>
```
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

?>
```

----
#### Associative Arrays

* File Name in Git : <b>[15_Associative_Arrays.php](15_Associative_Arrays.php)</b>
```
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
?>
```

#### Multi-Dimensional Arrays

* File Name in Git : <b>[16_Multi-Dimensional_Arrays.php](16_Multi-Dimensional_Arrays.php)</b>
```
<?php

$mda = array(
    array(2,5,6,5),
    array(6,5,4,1),
    array(2,5, 6,0),
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
?>
```

#### Global Local Variable

* File Name in Git : <b>[17_Local_Global_var.php](17_Local_Global_var.php)</b>
```
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

echo $a; 
printValue();

echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";

// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>
```
----

#### Get Alert When Submit Form

* File Name in Git : <b>[18_Form_Submit_Alert.php](18_Form_Submit_Alert.php)</b>
```
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      // Submit these to a database
    }
    //Created By NorthFox PHP Developers
?>
```


----

<center>
 ----------------------------------------DataBase Codes Here---------------------------------------
</center>

#### Connect to Database

* File Name in Git : <b>[19_MySQL_connect.php](19_MySQL_connect.php)</b>
```
<?php
//1. Mysqli Extension
//2. PDO php data objects


// Connect to Database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection

$conn = mysqli_connect($servername , $username , $password);


if (!$conn) {
    die("Sorry We can't connect to Database");
}else {
    echo "Connection was successful";
}

?>
```

#### Create Database

* File Name in Git : <b>[20_create_database.php](20_create_database.php)</b>
```
<?php

//1. Mysqli Extension
//2. PDO php data objects
// Connect to Database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection

$conn = mysqli_connect($servername , $username , $password);


$sql = "CREATE DATABASE dbPHP1";
$result = mysqli_query($conn , $sql);

if ($result) {
    echo "The Database was Created Successfully !!";
}
else {
    echo "The Database was not created because of this error --->". mysqli_error($conn);
}

//Created By NorthFox PHP Developers
?>
```

#### Create Table using php File

* File Name in Git : <b>[21_Create_Table.php](21_Create_Table.php)</b>
```
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "(type you Database Name)";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
    die("Sorry We can't connect to Database");
}else {
    echo "Connection was successfully<br>";
}

// Create a table in database
$sql = "CREATE TABLE `phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`));";


// Check for the table connection
$result = mysqli_query($conn , $sql);

if ($result) {
    echo "The Table was Created Successfully !!";
}
else {
    echo "The Table was not created because of this error --->". mysqli_error($conn);
}

//Created By NorthFox PHP Developers
?>
```



#### Insert Data

* File Name in Git : <b>[22_Insert_data.php](22_Insert_data.php)</b>
```
<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry We can't connect to Database");
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "Vikrant";
$destination = "Russia";

// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

?>
```


#### Store Form Data

* File Name in Git : <b>[23_Form_Data_store.php](23_Form_Data_store.php)</b>
```
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Get/Post</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
    
    // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "php";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was not successful
        if (!$conn){
            die("Sorry We can't connect to Database");
        }
        else{
            echo "";
        }
        
        $sql = "INSERT INTO `contact` ( `name`, `email`, `concern`, `date`) VALUES ( '$name', '$email', '$desc', CURRENT_TIMESTAMP())";
        $result = mysqli_query($conn, $sql);

        // Add a new trip to the Trip table in the database
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        }
    }
    //Created By NorthFox PHP Developers
?>

<div class="container mt-3">
<h1>Contact us for your concerns</h1>
    <form action="/php/23_Form_Data_store.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
```

#### Fetch Data

* File Name in Git : <b>[24_fetch_data.php](24_fetch_data.php)</b>
```
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn , $sql);

$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in Database";
echo "<br>";

if ($num > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['sno'] . "." . "Hello" . $row['name'] . "Welcome" ;
        echo "<br>";
    }
}

//Created By NorthFox PHP Developers

?>
```


#### Print Particular Data

* File Name in Git : <b>[25_print_particular_data.php](25_print_particular_data.php)</b>
```
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
    die("Sorry We can't connect to Database");
}else {
    echo "Connection was successfully";
}

echo "<br>";

$sql = "SELECT * FROM `phptrip` WHERE `dest`='Ahmedabad'";
$result = mysqli_query($conn , $sql);

$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in Database";
echo "<br>";

$no = 1;

if ($num > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $no .". ". "Hello " .  $row['name'] . " " . "Welcome to " . $row['dest'] ;
        echo "<br>";
        $no = $no +1;
    }
}
?>
```

#### Update Records

* File Name in Git : <b>[26_update_the_record.php](26_update_the_record.php)</b>
```
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
    die("Sorry We can't connect to Database");
}else {
    echo "Connection was successfully";
}
echo "<br>";

$sql = "SELECT * FROM `phptrip` WHERE `dest`='Ahmedabad'";
$result = mysqli_query($conn , $sql);

$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in Database";
echo "<br>";

$no = 1;

if ($num > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $no .". ". "Hello " .  $row['name'] . " " . "Welcome to " . $row['dest'] ;
        echo "<br>";
        $no = $no +1;
    }
}

echo "<br>";

$sql = "UPDATE `phptrip` SET `name` = 'Gaurav2' WHERE `sno` = 3;";
$result = mysqli_query($conn ,$sql);

if ($result) {
    echo "We Updated the records Successfully.";
}
else {
    echo "We couldn't Updated the records Successfully.";
}

$aff = mysqli_affected_rows($conn);
echo "<br> Number of Affected Rows : $aff <br>" 

?>
```


#### Delete The Records

* File Name in Git : <b>[27_delete_the_record.php](27_delete_the_record.php)</b>
```
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create a connection

$conn = mysqli_connect($servername , $username , $password , $database);


// ----------Delete rows Normaly-------------------

echo "Delete Row in Single";

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'mansa'";

$result = mysqli_query($conn , $sql);

$aff = mysqli_affected_rows($conn);

echo "Number of Affected Rows : $aff <br>";

if ($result) {
    echo "Deleted Successfully";
}else {
    $err = mysql_error($conn);
    echo "Operation Can't Successfull --> $err";
}

echo "<br><br><br><br>";
echo "Delete Row in Bulk";

// ----------Delete rows in limit-------------------

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'mansa' LIMIT 2";

$result = mysqli_query($conn , $sql);

$aff = mysqli_affected_rows($conn);

echo "<br><br> Number of Affected Rows : $aff <br>";

if ($result) {
    echo "Deleted Successfully";
}else {
    $err = mysql_error($conn);
    echo "Operation Can't Successfull --> $err";
}

?>
```

#### Files In PHP

* File Name in Git : <b>[28_Files.php](28_Files.php)</b>
```
<?php

// Print Char after text
$a = readfile("DemoFiles/myFile.txt");
echo $a ."<br><br>";

// can't Print Char after text
readfile("DemoFiles/myFile.txt");

// also use html file in php
readfile("DemoFiles/demofile.html")

//Created By NorthFox PHP Developers
?>
```


#### File Open Read Close

* File Name in Git : <b>[29_File_ORC.php](29_File_ORC.php)</b>
```
<?php

$fptr = fopen("DemoFiles/myFile.txt", "r");

$count = fread($fptr , filesize("DemoFiles/myFile.txt"));
echo $count;
//Created By NorthFox PHP Developers

?>
```
<table border="1px" style="max-width:90%;margin-top:20px;border:2px solid black;">
        <th colspan="2">File Open Mode and Description</th>
        <tr>
            <td>Mode</td>
            <td>Description</td>
        </tr>
        <tr>
            <td>
                'r'</td>
            <td>
                Open for reading only; place the file pointer at the beginning of the file.
            </td>
        </tr>
        <tr>
            <td>
                'r+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the beginning of the file.
            </td>
        </tr>
        <tr>
            <td>
                'w'
            </td>
            <td>
                Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
            </td>
        </tr>
        <tr>
            <td>
                'w+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
            </td>
        </tr>
        <tr>
            <td>
                'a'
            </td>
            <td>
                Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
            </td>
        </tr>
        <tr>
            <td>
                'a+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
            </td>
        </tr>
        <tr>
            <td>
                'x'
            </td>
            <td>
                Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning FALSE and generating an error of level E_WARNING. If the file does not exist, attempt to create
                it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
            </td>
        </tr>
        <tr>
            <td>
                'x+'
            </td>
            <td>
                Create and open for reading and writing; otherwise it has the same behavior as 'x'.
            </td>
        </tr>
        <tr>
            <td>
                'c'
            </td>
            <td>
                Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the
                file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used
                after the lock is requested).</td>
        </tr>
        <tr>
            <td>
                'c+'</td>
            <td>
                Open the file for reading and writing; otherwise it has the same behavior as 'c'. </td>
        </tr>
        <tr>
            <td>
                'e'
            </td>
            <td>
                Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.
            </td>
        </tr>
    </table>

#### Read Files

* File Name in Git : <b>[30_read_files.php](30_read_files.php)</b>
```
<?php

$fptr = fopen("DemoFiles/myFile.txt" ,"r");

echo $fptr;

?>
```

#### Write Mode

* File Name in Git : <b>[31_write_mode.php](31_write_mode.php)</b>
```
<?php

$fptr = fopen("DemoFiles/myFile2.txt" ,"w");

fwrite($fptr, "This is First Line in MyFiles 2.\n");

fwrite($fptr, "This is Second Line in MyFiles 2.");

fclose($fptr);

//Created By NorthFox PHP Developers
?>
```

#### Append Mode

* File Name in Git : <b>[32_append_mode.php](32_append_mode.php)</b>
```
<?php

$fptr = fopen("DemoFiles/myFile2.txt" ,"a");

fwrite($fptr, "\nThis is New Line in MyFiles 2.\n");

fwrite($fptr, "This is New Second Line in MyFiles 2.");

fclose($fptr);

?>
```

#### Cookies

* File Name in Git : <b>[33_cookies.php](33_cookies.php)</b>
```
<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>
```
----

#### <span style="Color:green">Session Store Detail and Destroy</span>

#### Session Start

* File Name in Git : <b>[34_sessions.php](34_sessions.php)</b>
```
<?php

// Stat Session and verify User Login Info
session_start();

$_SESSION['username'] = "DarkWeb";
$_SESSION['favData'] = "Hacking Books";

echo "We Have saved your Session.";

?>
```

#### Session Get Data

* File Name in Git : <b>[35_session_get_data.php](35_session_get_data.php)</b>
```
<?php

// Start Session and get data
session_start();

echo "Welcome " . $_SESSION['username'] . ".";
echo "<br> Your Favorite Category is " . $_SESSION['favData'];

?>
```


#### Session Destroy

* File Name in Git : <b>[36_logout.php](36_logout.php)</b>
```
<?php

// Start Session and get data
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . ".";
    echo "<br> Your Favorite Category is " . $_SESSION['favData'];
    echo "<br>";
}
else {
    echo "Please Login to Continue";
}
    
?>
```
----




-----
######  Note : Show Many More

* Go to Here PHP Site : <b><span style="color:red;">[https://www.php.net/manual/en/](https://www.php.net/manual/en/)</b>

* Go to Here Date Functions PHP : <b>[https://www.php.net/manual/en/function.date.php](https://www.php.net/manual/en/function.date.php)</b>

