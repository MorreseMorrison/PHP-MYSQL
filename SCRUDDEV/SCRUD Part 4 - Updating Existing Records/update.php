<?php
//update.php
//connect to the database
require "dbinfo.php";

//11-9-2021 SCRUD 4
//clean and sanitize the incoming data
if(isset($_POST['submit'])=="submit" && $_POST['submit']=="Modify Record") {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
}//end if

//11-9-2021 SCRUD 4
//create a safe sql query
$query = "UPDATE contacts SET
    email = '$email',
    first = '$first',
    last = '$last',
    phone = '$phone'
    where id='$id' ";



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
}
    else{
        print "<h1>Something has gone wrong!</h1>";
        exit();
}//end else

?>