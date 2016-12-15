<?php 
	
	include "db-info.php";

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$number = Trim(stripslashes($_POST['number']));
	$message = Trim(stripslashes($_POST['message']));

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	if ($connection->connect_error) {
    	die("Connection failed: " . $connection->connect_error);
	} 
	echo "Connected successfully";

	$query = "INSERT INTO proj3table (name, email, phone, message) VALUES ('$name', '$email', '$number', '$message')";

	$result = mysqli_query($connection, $query);

	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1 ) {
 		die('No records were written to the database. Waaaa!');
	}

	mysqli_close($connection);

	header("Location: database-read.php");


?>