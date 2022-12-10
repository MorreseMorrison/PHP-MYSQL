<!DOCTYPE html>
<html>
    <head>
        <title>Alien Abducted Me - Report an Abduction</title>
        </head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

<!-- Utilized Variables for Each Text Answer Boxes --->
<?php

//Created Three Mail Function Parameters
$to      = "rese298@outlook.com";
$subject = "Aliens Abducted Me Form Submission";
$message = "hello";
$headers = "mmorrison15@mail.dccc.edu";

//Called The Mail Function With Three Parameters (Default)
mail($to, $subject, $message, $headers);

//Created Variables To Hold The Data From The Submission Form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$when = $_POST['when'];
$long = $_POST['long'];
$how = $_POST['how'];
$description = $_POST['description'];
$add = $_POST['add'];


//Utilized the Print Statement coupled With The Text Box Variables
echo "Thanks for Submitting the form <b>$fname</b> <b>$lname</b>.";
echo "<br>";
echo "Your were abducted on <b>$when</b> and gone for <b>$long</b>.";
echo "<br>";
echo "You said there were <b>$how</b> of them.";
echo "<br>";
echo "You described them as <b>$description</b>.";
echo "<br>";
echo "Did you see Fluffy? You Answered: ";
//Radio Button Answer, how?
//Utilized The Array Method. Set Both Radio Buttons To The Array "confirmation[]"
//Utilized The For Each Loop Method To Loop Through The Array. Assigned It To The Variable "$value"
foreach($_POST['confirmation'] as $value)
{
    //Prints The Value Method
   print "<b>$value</b>";
}
echo "<br>";
echo "We will contact you at <b>$email</b> if we have any relevant news.";
echo "<br>";
echo "You other comments were: <b>$add</b>.";






?>