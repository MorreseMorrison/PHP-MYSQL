<?php

//showcontacts.php
//with images
//pagination and sorting
//cookie authentication

//if the right cookie is not set, redirect user
if(!isset($_COOKIE['userID']))

	//no match - send them back to login again
	header("Location: index.html");

	//make connection to database
	require "dbinfo.php";