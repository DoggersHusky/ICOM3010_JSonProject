<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	require('includes/classes/class.content.php');
	
	//create the connection object
	$conn = new Content("db545467511.db.1and1.com", "dbo545467511", "Rage2167_robert", "db545467511");
	
	//query the database and pull the results
	//select everything from the information table
	echo $results = $conn->content("SELECT * FROM pages ORDER BY position");
