 <?php

class Database {
    private $host 	= DB_HOST;
    private $user 	= DB_USER;
    private $pass   = DB_PASS;
    private $dbname = DB_NAME;
    
    
    
    public $link;
    public $error;
    
    public function __construct() {
        $this->connectDB();
    }
    
    private function connectDB() {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->link) {
            $this->error = "Connection Fail" . $this->link->connect_error;
            return false;
        }
    }
    
    //Select & Read Database
    //======================
    
    public function select($selectquery) {
        $result = $this->link->query($selectquery) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
    
    //Insert data in Database
    //======================
    
    public function insert($insertquery) {
        $result = $this->link->query($insertquery) or die($this->link->error . __LINE__);
        if ($result) {
            echo "<script type='text/javascript'>window.top.location='index.php?msg=Data Insert Successfully.';</script>";
            exit();
        } else {
            die("Error:(" . $this->link->errno . ")" . $this->link->error);
        }
    }
    
    
    //Update data in Database
    //======================
    
    public function update($updatequery) {
        $result = $this->link->query($updatequery) or die($this->link->error . __LINE__);
        if ($result) {
            echo "<script type='text/javascript'>window.top.location='index.php?msg=Data Updated Successfully.';</script>";
            exit();
        } else {
            die("Error:(" . $this->link->errno . ")" . $this->link->error);
        }
    }
    
    
    //Delete data from Database
    //========================
    
    public function delete($deletequery) {
        $result = $this->link->query($deletequery) or die($this->link->error . __LINE__);
        if ($result) {
            echo "<script type='text/javascript'>window.top.location='index.php?msg=Data Deleted Successfully.';</script>";
            exit();
        } else {
            die("Error:(" . $this->link->errno . ")" . $this->link->error);
        }
    }
    
    
    
    
    
    
}


?> 