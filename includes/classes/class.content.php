<?php
	require('class.data.php');
	class Content extends mysqli{
		
		protected $_jsonString;
		
		public function __construct($mysql_host,$mysql_database,$mysql_user,$mysql_password){
			//inherit from the parent
			parent::__construct($mysql_host,$mysql_database,$mysql_user,$mysql_password);
		}
		
		public function content($query) {
			$results = $this->query($query);
			
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
			
			$this->close();
			return $outp;
		}
		
	}