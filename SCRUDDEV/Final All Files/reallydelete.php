<?php
//reallydelete.php
//gets $id from confirmdelete.php
//finds matching id in database and deletes
//shows confirmation that record has been deleted

//11-9-2021 SCRUD 3
//connect to database
require "dbinfo.php";

if(isset( $_POST['reallydelete']) && $_POST['reallydelete'] == "really truly delete") {
            $id = $_POST['id'];
    //now delete the contact
    $sql = "DELETE FROM contacts WHERE id = '$id'";

    if ($result = mysqli_query($connection, $sql)) {

        $pageTitle = "Contact Deleted";
        include "header.php";
        print "<p> Record has been permanently deleted.</p>";
         }
         //end if
        else {
            print "<h1>Something has gone wrong!</h1>";
        }

}
?>

