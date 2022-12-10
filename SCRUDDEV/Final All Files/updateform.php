<?php
//updateform.php
//connect to the database
require "dbinfo.php";
$sel_record = $_POST['sel_record'];


//SQL statement to select record to edit - 11-9-2021
$query = "SELECT * FROM contacts WHERE id = $sel_record";


// execute SQL query and get result
   ////11-9-2021 SCRUD 4 
   if($result = mysqli_query($connection,$sql)){
	//Loop Through Record and Get Values
	while ($record = mysqli_fetch_array($result)) {
			$id = $record['id'];
			$email = $record['email'];
			$first = $record['first'];
			$last = $record['last'];
			$phone = $record['phone'];
	}

//11-9-2021 SCRUD 4 
$pageTitle = "Edit a Contact";
include "header.php";
print <<<HERE
	<h2>Modify this Contact</h2>
    <p>Change the values in the text boxes then click the "Modify Record" button.</p>

	<form id = "myForm" method="POST" action = "update.php">
        <input type="hidden" name="id" value="$id">
	<div>
	<label for="fname"><b>* First name:</b></label>
    <input type="text" id="fname" name="fname" value="" placeholder="First Name"><br>
    <!---10/5/2021 Print Error Message (Validation)--->
   
    <label for="lname"><b>* Last name:</b></label>
    <input type="text" id="lname" name="lname" value="" placeholder="Last Name" ><br>
  
    <!-- 10/2/2021 Changed "Type" to Email-->
    <label for="email"><b>* What is your email address?</b></label>
    <input type="email" id="email" name="email" value="" placeholder="Email"><br>
  
    <label for="when"><b>When did it happen?</b></label>
    <input type="date" id="when" name="when" value="" placeholder="MM/DD/YYYY" ><br>
  
    <!-- 10/2/2021 Changed "Type" to Date-->
    <label for="long"><b>How long were you gone?</b></label>
    <input type="text" id="long" name="long" value="" placeholder="Hours, Days, Years?"><br>
  
    <!-- 10/2/2021 Changed "Type" to Number-->
    <label for="how"><b>How many did you see?</b></label>
    <input type="number" id="how" name="how" value="" placeholder="Enter a number"><br>
  
    <label for="description"><b>Describe them:</b></label>
    <input type="text" id="description" name="description" value="" placeholder="What did they look like?"><br>
  
    <label for="what"><b>What did they do to you?</b></label>
    <input type="text" id="what" name="what" value="" placeholder="Describe what they did"><br>
  
    <div class="col-75">
    </div>
  
    <p><b>*Have you seen my dog Fluffly?</b></p>
  
    <!--- Created Two Radio Buttons. Same name but different ID's. This Way Both 
    Radio Buttons can be selected. ---> 
    <!--- Created an Array "confirmation[]" for both Radio Buttons.
      Corresponds With The PHP Script. ---> 
    <!--- 10/9/2021 Changed Label Radio name to "radioExample" from "confirmation[]"
    In Order For NULL Logic In The PHP Script. --->
    <label>
      <input type="radio" id="yes" name="radioExample" value="yes">Yes
    </label>
  
    <label>
      <input type="radio" id="no" name="radioExample" value="no">No
    </label>
    
  
            
    <br>
    <br>
  
   <!--- Utilized Area Text Box. ---> 
    <label for="add"><b>Anything else you want to add?</b></label>
    <textarea id="add" name="add"  style="height:25px" placeholder="Your comments..."></textarea>
    <br>
    <br>

	</form>

HERE;
 
?>

