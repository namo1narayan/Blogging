<?php 
	// session_start();
	// session_unset($_SESSION['user']);
	// session_destroy();
	// return('location: index.php');

session_start();
// destroy the session.
session_destroy();
header('Location: index.php');
 ?>