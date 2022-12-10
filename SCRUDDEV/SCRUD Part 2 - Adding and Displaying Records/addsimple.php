<?php
// make connection to database
require "dbinfo.php";

//clean and sanitize the incoming data
if($_POST['submit']=="Submit")
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
}


// setup a safe query
$query = "INSERT INTO contacts VALUES (NULL, '$email',  '$first', '$last', '$phone')";


// run the query
if($result = mysqli_query($connection, $query)){

	//show confirmation
    include "header.php";
    echo "Contact added: $email, $first, $last, $phone<br>";
}
else{

    echo"Unable to add record.";

}

?>

