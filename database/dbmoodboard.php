<?php
	$servername = "localhost";
	$username = "zino";
	$password = "zino";
	$dbname = "moodboard";


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