<?php
//1.  make connection to database
//database connection information
$host="localhost";
$user="dccc3393_morrese";
$password="P00585150#";
$database="dccc3393_P00585150";

//If there is an error with the connection the error is put in the mysqli_connect_error property
//Die Means if there is an error the script will die. Will print out an message that says connect error.
//Successfully connect to the database.
//@ before the new suppresed the normal error handling.

$connection = @mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()){
    die('Connect Error: ' . mysqli_connect_error());
} else {
    echo 'Successful connection to database!';
}

echo "<br>";
?>


