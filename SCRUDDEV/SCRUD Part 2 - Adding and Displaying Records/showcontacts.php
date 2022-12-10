<?php

//1. Make Connection to database
require "dbinfo.php";
include "header.php";

//2. setup safe query
$query = "SELECT * FROM contacts ORDER BY last ASC";

//3. run the query
if ($result=mysqli_query($connection, $query)){


	//4. read the results
	$count = mysqli_num_rows($result);
	echo "Number of Contacts: ($count)<br>";

	//Added 11-9-2021
	print <<<HERE
	<h2>My Contacts</h2>
	Select a record to edit or delete or <a href="addsimple.php">add new contacts</a>
		<table id="home">
	HERE;

	
		//loop to get all the records
		while ($row=mysqli_fetch_array($result)){
			$id=$row['id'];
			$email=$row['email'];
			$first=$row['first'];
			$last=$row['last'];
			$phone=$row['phone'];

			//name="sel_record" value="$id" mentioned in SCRUD 3 Part 1 3:46 11-9-2021
			print <<<HERE
			<tr>
				<td>
				<form method="post" action="confirmdelete.php">
				<input type="hidden" name="sel_record" value="$id"> 
				<input type="submit" name="delete" value=" Delete ">
				</form>
	
				<form method="post" action="updateform.php">
				<input type="hidden" name="sel_record" value="$id">
				<input type="submit" name="update" value=" Edit "></form>
				</td>   
				<td><strong>$first $last</strong><br/>
				Phone: $phone<br/>
				<a href="mailto: $email">$email</a></td></tr>
					
				
HERE; }//end while

	}
	else{
		echo "There was an issue with the query.";
	}
		
		

		
		?>