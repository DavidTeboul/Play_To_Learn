<?php
class Database{
	
	private $host  = 'localhost';
    private $user  = 'u815710449_playtolearn';
    private $password   = "Sce2019";
    private $database  = "u815710449_playtolearn";
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>
