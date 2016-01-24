<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	require('includes/classes/class.content.php');
	
	$page = htmlspecialchars($_GET['page'], ENT_QUOTES);
	
	
	//create the connection object
	$conn = new Content("db545467511.db.1and1.com", "dbo545467511", "Rage2167_robert", "db545467511");
	
	
	if (isset($page) and $page == "index"){
		//this is the index page will be used to show recent examples
		echo $conn->content("SELECT * FROM information WHERE display<>1 ORDER BY ID DESC LIMIT 1, 3");
	}else{
		//query the database and pull the results
		//select everything from the information table
		echo $conn->content("SELECT * FROM information WHERE page='$page'");
	}
	
	