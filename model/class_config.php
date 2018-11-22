<?php
class Config
{   
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "db_sasanun";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "ggg";

        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}


// $test = new Config();
// $test->dbConnection();


?>