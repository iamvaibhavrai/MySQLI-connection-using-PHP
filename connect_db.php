<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_name";

	$connection = new mysqli($hostname,$username,$password,$dbname);
	if($connection->connect_error) {
		die("Connectionn Error: " . $connection->connect_error);
	}
?>

// Change hostname, username, password and database name according to your machine.
// If any error occurs, leave a comment or mail me at iamvaibhavrai@gmail.com
