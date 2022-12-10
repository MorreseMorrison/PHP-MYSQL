<?php
// initiate session
session_start();
// check that form has been submitted and that name is not empty
if ($_POST && !empty($_POST['name'])) {
    // set session variable
    $_SESSION['name'] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Simple Session Example</title>
</head>
<body>
	<?php
		// check session variable is set
			if (isset($_SESSION['name'])) {
    		// if set, greet by name
    		echo 'Hi, ' . $_SESSION['name'] . '. <a href="session03.php">Next</a><p>';
			} else {
    			// if not set, send back to login
    			echo 'Who are you? <a href="session01.php">Login</a>';
			}
	?>
</body>
</html>

