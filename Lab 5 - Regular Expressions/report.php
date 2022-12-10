<!DOCTYPE html>


<!--- LAB 5 Version 10/9/2021 --->
<!--- Completed on 10/9/2021 --->
<html>
    <head>
        <title>Alien Abducted Me - Report an Abduction</title>
        </head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

<!-- Utilized Variables for Each Text Answer Boxes --->
<?php

//DATABASE CONNECT Start
//SCRUD PART 1 - Database Connection
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
//DATABASE CONNECT END


if(isset($fname))
//Created Four Mail Function Parameters
$to      = "rese298@outlook.com";
$subject = "Aliens Abducted Me Form Submission";
$message = "hello";
$headers = "mmorrison15@mail.dccc.edu";

//Called The Mail Function With Three Parameters (Default)
mail($to, $subject, $message, $headers);



//10/5/2021
//Created Variables To Hold The Data From The Submission Form
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$when = filter_input(INPUT_POST, 'when', FILTER_SANITIZE_STRING);
$long = filter_input(INPUT_POST, 'long', FILTER_SANITIZE_STRING);
$how = filter_input(INPUT_POST, 'how', FILTER_SANITIZE_NUMBER_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$add = $_POST['add'];
//10/9/2021 Radio Example Varible Creation
$radioExample = filter_input(INPUT_POST, 'radioExample'); 




//Utilized the ECHO Statement coupled With The Text Box Variables


//if 10/5/2021 $fname is empty display error message

//LAB 5 Regular Expression
//Regular Expression Logic, Nothing but white spaces
if(!preg_match('/^[a-zA-Z ]*$/', $fname)) {
    echo "<br>";
    echo("Only letters and white space allowed in the First name string! " );
}

if(!preg_match('/^[a-zA-Z ]*$/', $lname)) {
    echo "<br>";
    echo("Only letters and white space allowed in the Last name string! " );
}


else if($fname==NULL){
    $fnameError = " *Please enter your first name!";}



if($lname==NULL){
    $lnameError = " *Please enter your last name!";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = " *Please enter a valid email address!";
      }

if ($radioExample==NULL) {
	$radioExampleError = "*Please select a radio button!"; 
}
    else{
echo "Thanks for Submitting the form <b>$fname</b> <b>$lname</b>.";
echo "<br>";
echo "Your were abducted on <b>$when</b> and gone for <b>$long</b>.";
echo "<br>";
echo "You said there were <b>$how</b> of them.";
echo "<br>";
echo "You described them as <b>$description</b>.";
echo "<br>";
echo "Did you see Fluffy? You Answered: <b>$radioExample</b>.";
echo "<br>";
echo "We will contact you at <b>$email</b> if we have any relevant news.";
echo "<br>";
echo "You other comments were: <b>$add</b>.";

    }

//  10/5/2021if an error message exists, show the form page
if(($fnameError != '') || ($lnameError != '') ||
($emailError != '') || ($radioExampleError != '')){
    
    include('index.php');
    exit();
}







?>