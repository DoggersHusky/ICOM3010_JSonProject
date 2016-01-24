<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	//create the connection object
	$conn = new mysqli("db545467511.db.1and1.com", "dbo545467511", "Rage2167_robert", "db545467511");
	
	//query the database and pull the results
	//select everything from the information table
	$results = $conn->query("SELECT * FROM pages ORDER BY position");
	
	$outp = "[";
	
	while ($rs = $results->fetch_array(MYSQLI_ASSOC)) {
		if ($outp != "[") {
				$outp .= ",";
			}
		$outp .= '{"ID":"' . htmlspecialchars_decode($rs["ID"], ENT_QUOTES) . '",';
		$outp .= '"pageLinkName":"' . htmlspecialchars_decode($rs["pageLinkName"], ENT_QUOTES) . '",';
		$outp .= '"linkUnderPage":"' . htmlspecialchars_decode($rs["linkUnderPage"], ENT_QUOTES) . '",';
		$outp .= '"page":"' . htmlspecialchars_decode($rs["page"], ENT_QUOTES) . '",';
		$outp .= '"pageMenu":"' . htmlspecialchars_decode($rs["pageMenu"], ENT_QUOTES) . '",';
		$outp .= '"position":"' . htmlspecialchars($rs["position"], ENT_QUOTES) . '"}';
	}
	$outp .= "]";


	
	$conn->close();
	echo $outp;