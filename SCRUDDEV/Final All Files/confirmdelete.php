<?php

//11-9-2021 SCRUD 3 (1)
require "dbinfo.php";
$sel_record = $_POST['sel_record'];


//SQL statement to select information
//11-9-2021 SCRUD 3 (1)
// (11) 11/25/2021 - Switched out the "contats" table for the "aliens_abduction" table.
$sql = "SELECT * FROM aliens_abduction WHERE id = $sel_record";

   // execute SQL query and get result
   ////11-9-2021 SCRUD 3 (1)
if($result = mysqli_query($connection,$sql)){
        //Loop Through Record and Get Values
        while ($record = mysqli_fetch_array($result)) {
                $id = $record['id'];
                // $email = $record['email'];
                // $first = $record['first'];
                // $last = $record['last'];
                // $phone = $record['phone'];
        }
        //End While Loop
        //11-9-2021 SCRUD 3 (1)
        //(12) 11/25/2021 - Swapped out header.php with admin.html to handle the layout.
        $pageTitle = "Delete a Contact";
        include "admin.html";


    print <<<HERE
<h2>Are you sure you want to delete this record?
It will be permanently removed:</h2>
<ul>
<li>ID: </li>
<li>Name: </li>
<li>E-mail: </li>
<li>Phone: </li>
</ul>
<p><br />
<form method="post" action="reallydelete.php">
<input type="hidden" name="id" value="$id">
<input type="submit" name="reallydelete" value="really truly delete" />
<input type="button" name="cancel" value="cancel"
onClick="location.href='showcontacts.php'" /></a>
</p></form>
HERE;
}//end if
else{
        print "<h1>Something has gone wrong!</h1>";
}// end else

?>