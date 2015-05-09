<?php
	require "config.php";
	
	$conn = mysqli_connect($host, $username, $password) or die("could not connect");
	
	if($conn->connect_error)
	{
		die("connection Failed: " . $conn->connection_error);
	}
	else
	{
		
	}
	
	mysqli_select_db($conn, $database);
?>