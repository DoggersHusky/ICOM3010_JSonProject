<?php
	class Content extends mysqli{
		
		protected $_jsonString;
		
		public function __construct($mysql_host,$mysql_database,$mysql_user,$mysql_password){
			//inherit from the parent
			parent::__construct($mysql_host,$mysql_database,$mysql_user,$mysql_password);
		}
		
		public function content($query) {
			$results = $this->query($query);
			$json = array();
			
			while ($rs = $results->fetch_array(MYSQLI_ASSOC)) {
				$json[] = $rs;
			}
			$this->close();
			return json_encode($json);
		}
		
	}