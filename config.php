<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "complete-blog-php");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/complete-blog-php/');
?>