<?php



//SQL statement to select information


   // execute SQL query and get result





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