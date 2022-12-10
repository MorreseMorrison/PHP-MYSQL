<!DOCTYPE html>
<html>
    <head>
        <title>Alien Abducted Me - Report an Abduction</title>
        </head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

<!-- Utilized Variables for Each Text Answer Boxes --->
<?php

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
// $fname = $_POST['fname'];
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

//10-1-2021 The Below Logic Checks To See If The First And Last Name Field Are Empty
//If They Are Null A Message Will Show On The Confirmation Page
//However The Assignment Wants A Message On The Form Page If Not Filled Our Properly
//Use of filter_input() Will Need To Be Used

// if ($fname == NULL && $lname == NULL)  {
//     echo "Please enter your First Name and Your Last Name!";
// }
// elseif ($fname != NULL && $lname != NULL) {
//     echo "Thanks for Submitting the form <b>$fname</b> <b>$lname</b>.";
// }
// Or if(empty($fname)){
//     $fname= NULL;
//     $nameError = "<p> Please enter your first name.</p>";
// }

 //10/2/2021 - If fname is empty display error message (Validation)
// if($fname == NULL){
//     $fnameError = "Please enter your first name";
// }

//if 10/5/2021 $fname is empty display error message
if($fname==NULL){
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
//Utilized The Array Method. Set Both Radio Buttons To The Array "confirmation[]"
//Utilized The For Each Loop Method To Loop Through The Array. Assigned It To The Variable "$value"
// foreach($_POST['confirmation'] as $value)
// {
//     //Prints The Value Method
//    print "<b>$value</b>";
// }
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