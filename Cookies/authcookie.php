<?php
//authcookie.php
//successful login, cookie is created
//user is redirected to showcontacts.php
//if not successful, sent back to login screen (index.html)
//see if user is logged in
if (isset($_POST["login"]))  {
    if (isset($_POST["username"] ) &&
        ($_POST["username"] == "imagreatstudent") &&
        isset($_POST["password"] ) &&
        ($_POST["password"] == "test") )
        {

            //a match - set a cookie
            setcookie('userID', $_POST['username']);
            //redirect user to admin page
            header("Location: showcontacts.php");

        }

        else {
            
            //no match - send them back to the login again
            header("Location: index.html");

        }

    }//end if $_POST["Login"] 

//user is logging out

    if(isset($_GET["logout"])) {

            //delete teh cookie
            setcookie('userID', '', time()-3600);
            //send them back to login again
            header("Location: index.html");

    }


?>


