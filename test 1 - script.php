<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	$page = htmlspecialchars($_GET['page'], ENT_QUOTES);
	
	//create the connection object
	$conn = new mysqli("db545467511.db.1and1.com", "dbo545467511", "Rage2167_robert", "db545467511");
	
	
	
	if (isset($page) and $page == "index"){
		//this is the index page will be used to show recent examples
		//query string for the database
		$results = $conn->query("SELECT * FROM information WHERE display<>1 ORDER BY ID DESC LIMIT 1, 3");
	}else{
		//query the database and pull the results
		//select everything from the information table
		$results = $conn->query("SELECT * FROM information WHERE page='$page'");
	}
	$outp = "[";
	while ($rs = $results->fetch_array(MYSQLI_ASSOC)) {
		if ($outp != "[") {
				$outp .= ",";
			}
		$outp .= '{"ID":"' . htmlspecialchars_decode($rs["ID"], ENT_QUOTES) . '",';
		$outp .= '"display":"' . htmlspecialchars_decode($rs["display"], ENT_QUOTES) . '",';
		$outp .= '"contentTitle":"' . $rs["contentTitle"] . '",';
		//$outp .= '"content":"' . htmlspecialchars(json_encode($rs["content"]), ENT_QUOTES, 'UTF-8') . '"}';
		$outp .= '"content":"' . base64_encode(htmlspecialchars_decode($rs["content"], ENT_QUOTES)). '",'; 
		$outp .= '"page":"' . htmlspecialchars($rs["page"], ENT_QUOTES) . '",';
		$outp .= '"pYear":"' . htmlspecialchars($rs["pYear"], ENT_QUOTES) . '",';
		$outp .= '"pMonth":"' . htmlspecialchars($rs["pMonth"], ENT_QUOTES) . '",';
		$outp .= '"pDay":"' . htmlspecialchars($rs["pDay"], ENT_QUOTES) . '",';
		$outp .= '"dateModified":"' . htmlspecialchars($rs["dateModified"], ENT_QUOTES) . '"}';
	}
	$outp .= "]";


	
	$conn->close();
	echo $outp;