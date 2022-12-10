<?php
//updateform.php
//connect to the database
require "dbinfo.php";


//SQL statement to select record to edit


// execute SQL query and get result


$pageTitle = "Edit a Contact";
include "header.php";
print <<<HERE
	<h2>Modify this Contact</h2>
    <p>Change the values in the text boxes then click the "Modify Record" button.</p>

	<form id = "myForm" method="POST" action = "update.php">
        <input type="hidden" name="id" value="">
	<div>
	    <label for="email">Email*:</label>
	    <input type="text" name="email" id="email" value="">
	</div>
	<div>
	    <label for="first">First Name*:</label>
	    <input type="text" name="first" id="first" value="">
	</div>
	<div>
	    <label for="last">Last Name*:</label>
	    <input type="text" name="last" id="last" value="">
	</div>
	<div>
	    <label for="phone">Phone*:</label>
	    <input type="text" name="phone" id="phone" value="">
	</div>
	<div>
	    <label for="image">Image:</label>
	    <input type="text" name="image" size="30" id="upload">
	</div>
	<div id="mySubmit">
	    <input type="submit" name="submit" value="Modify Record">
	</div>
	</form>

HERE;
 
?>

