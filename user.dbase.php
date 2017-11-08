<!--  Class that stablish a connection with my datatbase  -->
<?php
	class Connect {
		private $hostname; 
		private $username; 
		private $password; 
		private $dbname;   
		
		private $db;
		private $error;
		private $rows;

		
		function __construct() {
			$this->hostname = "sql.njit.edu";
			$this->username ="jar95";
			$this->password ="uHnrTJqnT";
			$this->dbname   ="jar95";
			$this->rows = 0;
		}
			
		
		protected function getDB(){	
			try {
				$conn = 'mysql:host='. $this->hostname. ';dbname=' . $this->dbname;				
				$this->db = new PDO($conn, $this->username, $this->password);
								
			} catch(PDOException $e) {
				$this->error =$e->getMessage();
			}
			return $this->db;
		}

		
		public function runQuery($query){
			$dbc = $this->getDB();
			$statement = $dbc->prepare($query); 
			$statement->execute();
			$this->rows = $statement->fetchAll();
			$statement->closeCursor();	
			return $this->rows;		
		}
	
	}
?>

