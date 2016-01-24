<?php
	class MyData {
		//protected variables
		protected $_table;
		protected $_conn;
		
		public function __construct($mysql_host,$mysql_database,$mysql_user,$mysql_password){
			//create a new connection object
			$this->_conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		}
		
		//----------------------------------------------------------------------------------------
		//------------------------------------------------------------------------------------Sets
		//----------------------------------------------------------------------------------------
		public function query($query){
			//query the database and return the info
			return $this->_conn->query($query);
		}
		
		public function close(){
			$this->_conn->close();
		}
			
	}