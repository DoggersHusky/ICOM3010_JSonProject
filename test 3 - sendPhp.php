<?php
	$data = json_decode(file_get_contents('php://input'), true);
	
	echo $data['content'];
	
	$conn = new mysqli("db545467511.db.1and1.com", "dbo545467511", "Rage2167_robert", "db545467511");
	
	$sql = "UPDATE information SET page='".$data["page"]."', contentTitle='".$data["contentTitle"]."', imgUrl='".$data["imgUrl"]."', content='".htmlspecialchars($data["content"])."' WHERE id=".$data['ID']."";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
	
	$conn->close();
		