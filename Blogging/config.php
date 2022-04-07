<?php 
	session_start();

	// connect to database

	$conn = mysqli_connect("localhost", "root", "MySQL@#123", "php_project");
	// echo "connected";

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8081/blogging/');
?>