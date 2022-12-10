<?php
// Debugging an Application
// reading error messages

// generates a "warning"
$text = 'Test';
echo strpos($text, 'Test', 5);		// 3rd parameter represents an "offset"

// generates a "warning"
echo 22/0;							// divide by zero is not allowed

// generates a "parse" error
$error = 'This is a string which doesnt have the escaped properly!';

// generates both a warning and a fatal error
require 'some_file.txt';


