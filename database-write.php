<?php 
	
	include "db-info.php";

	$fname = Trim(stripslashes($_POST['fname']));
	$lname = Trim(stripslashes($_POST['lname']));
	$number = Trim(stripslashes($_POST['number']));

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	if ($connection->connect_error) {
    	die("Connection failed: " . $connection->connect_error);
	} 
	echo "Connected successfully";

	$query = "INSERT INTO friends (first_name, last_name, phone) VALUES ('$fname', '$lname', '$number')";

	$result = mysqli_query($connection, $query);

	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1 ) {
 		die('No records were written to the database. Waaaa!');
	}

	mysqli_close($connection);

	header("Location: database-read.php");


?>