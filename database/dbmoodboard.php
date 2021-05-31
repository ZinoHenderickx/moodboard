<?php
	$servername = "localhost";
	$username = "frederick";
	$password = "PPPPPP";
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