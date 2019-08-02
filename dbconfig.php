<?php
class Database
{   
    private $host = "db4free.net";
    private $db_name = "shophapo";
    private $username = "shophapo";
    private $password = "Jayluv3139";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            //echo "Connection error: " . $exception->getMessage();
        echo '<script type="text/javascript"> window.location = "page_403" </script>';
    }
         
        return $this->conn;
    }
}
?>
