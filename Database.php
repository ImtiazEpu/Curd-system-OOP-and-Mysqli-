<?php 

	class Database{
		private $host  = DB_HOST;
		private $user  = DB_USER;
		private $pass  = DB_PASS;
		private $dbname = DB_NAME;



		public $link;
		public $error;

		public function __construct(){
			$this->connectDB();
		}
	    
	    private function connectDB(){
	    	$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
	    	if (!$this->link){
	    		$this->error = "Connection Fail".$this->link->connect_error;
	    		return false;
	    	}
	    }

	    public function select($query){
	    	$result = $this->link->query($query) or die($this->link->error.__LINE__);
	    	if ($result->num_rows > 0) {
	    		return $result;

	    	}else{
		    		return false;
		    	}
	    }


	}


 ?>