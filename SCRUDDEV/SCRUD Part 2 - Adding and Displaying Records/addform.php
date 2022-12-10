<?php

//Setting the Defualt Value of Variables for initial page load
if (!isset($phoneError)) { $phoneError = ''; }
if (!isset($phone)) {$phone =''; }


include("header.php");
print <<<HERE
	<h2>Add a Contact</h2>
	<form action="add.php" method="POST" enctype="multipart/form-data">
	<div>
	    <label for="email">Email*:</label>
	    <input type="text" name="email" id="email" required="required">
	</div>

	<div>
	    <label for="first">First Name*:</label>
	    <input type="text" name="first" id="first" required="required">
	</div>

	<div>
	    <label for="last">Last Name*:</label>
	    <input type="text" name="last" id="last" required="required">
	</div>

	<div>
	    <label for="phone">Phone*:</label>
	    <input type="text" name="phone" id="phone" value="$phone" > $phoneError 
	</div>

	<div>
	    <label for="image">Image:</label>
	    <input type="file" name="upload" size="30" id="upload">
	    <br><small>Must be less than 512 kb.  Only JPG, GIF and PNG files.</small>
	</div>

	<div id="mySubmit">
	    <input type="submit" name="submit" value="Submit">
	</div>
	</form>
HERE;

?>