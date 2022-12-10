<?php
//reads cookie information from setcookie.php

print <<<HERE
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Contact Database Home</title>
</head>
<title>Read Cookie</title>
<style type="text/css">
body { background-color: 
HERE;
//add cookie script here to set background color
if(isset($_COOKIE['bgColor']))
    print $_COOKIE['bgColor'];

    else
        print "#ffffff";

?>
}
</style>
</head>
<body>
<p>yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda yadda
</p>
</body>
</html>