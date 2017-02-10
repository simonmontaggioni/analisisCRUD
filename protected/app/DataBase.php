<?php
	class DataBase extends PDO {
		
		public function __construct() {
			$options = array(
							PDO::ATTR_PERSISTENT => TRUE,
							PDO::ATTR_ERRMODE 	 => PDO::ERRMODE_EXCEPTION
					  );
			
			parent::__construct(
					'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, 
					DB_USER, 
					DB_PASS, 
					$options
			);
		}
	}	
?>