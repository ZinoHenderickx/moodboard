<?php
	$servername = "localhost";
	$username = "XXX";
	$password = "XXX";
	$dbname = "XXX";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
    else
     {
      
     }
?>
