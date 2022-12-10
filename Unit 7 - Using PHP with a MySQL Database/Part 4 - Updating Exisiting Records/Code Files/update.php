<?php
//update.php
//connect to the database
require "dbinfo.php";

//clean and sanitize the incoming data


//create a safe sql query



if ($result = mysqli_query($connection, $query)) {
    //show confirmation
    print "<html><head><title>Update Results</title></head><body>";
    $pageTitle = "Record Updated";
    include "header.php";
    print <<<HERE
    <h1>The new record looks like this: </h1>
    <p><strong>E-mail:</strong> $email</p>
    <p><strong>First:</strong> $first</p>
    <p><strong>Last:</strong> $last</p>
    <p><strong>Phone:</strong> $phone</p>
HERE;
}else{
    print "<h1>Something has gone wrong!</h1>";
    exit();
}//end else

?>