<?php
	//session_start();

	// initializing variables
	$username = "";
	$email    = "";
	$errors=array();

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'registration');
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	//LOGIN USER
	
	
  ?>
