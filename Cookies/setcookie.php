<?php
//add cookie script here
$name = 'bgColor';
$value = 'yellow';
$expires = strtotime('+1 year');
$path = '/';
setcookie($name, $value, $expire, $path);

?>

<html>
<head>
<title>Set Cookie</title>
</head>
<body>
<h1>Here's the cookie...</h1>

</body>
</html>


