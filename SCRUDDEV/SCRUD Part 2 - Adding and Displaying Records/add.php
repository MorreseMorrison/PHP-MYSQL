<?php
//clean and sanitize the incoming data
if($_POST['submit']=="Submit") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    validateForm($email, $first, $last, $phone);
    //check to see if your required fields are setup
    //Procedure Call, after we receive the data from this form run validateForm Function
}

//Function with parameters so the function can recognize the variable scope
function validateForm($email, $first, $last, $phone){
    //your code to check and see if things are empty, regular expressions, etc.

    if($phone == NULL)
    $phoneError = "Please enter a phone number";

    if($phoneError != ''){
        include('addform.php');
        exit();
    }


    else
    {
        addData($email, $first, $last, $phone);
    }



}//end validateForm


function addData($email, $first, $last, $phone)
{
    // make connection to database
require "dbinfo.php";



// setup a safe query
$query = "INSERT INTO contacts Values (NULL, '$email',  '$first', '$last', '$phone' )";


// run the query
if($result = mysqli_query($connection, $query)){

	//show confirmation
    include "header.php";
    echo "<b> Contact added: <br> $first <br> $last <br> $email <br> $phone<br> </b>";
}
else{

    echo"Unable to add record.";

}

}//end addData

?>
