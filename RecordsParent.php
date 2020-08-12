<?php
class RecordsParent {	
   
	private $recordsTable ='MyParents';
	public $Id;
    public $username;
    public $Child1;
    public $Child2;
    public $Child3;
    public $Child4;
    public $Child5;
	public $Country_IP;
	public $email;
	public $last_connection;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(Id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Child1 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Child2 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Child3 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Child4 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Child5 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Country_IP LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR last_connection LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY Id DESC ';
		}
		
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 	
		    echo $record['username'];
			$rows = array();			
			$rows[] = $record['Id'];
			$rows[] = ucfirst($record['username']);
			$rows[] = $record['email'];
			$rows[] = $record['Child1'];	
			$rows[] = $record['Child2'];
			$rows[] = $record['Child3'];
			$rows[] = $record['Child4'];
			$rows[] = $record['Child5'];
			$rows[] = $record['Country_IP'];
			$rows[] = $record['last_connection'];
			//$rows[] = '<button type="button" name="update" id="'.$record["Id"].'" class="btn btn//-warning btn-xs update">Update</button>';
			$rows[] = '<button type="button" name="delete" id="'.$record["Id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$records[] = $rows;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);
		
		echo json_encode($output);
	}
	
	public function getRecord(){
		if($this->Id) {
			$sqlQuery = "
				SELECT * FROM ".$this->recordsTable." 
				WHERE Id = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->Id);
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}


	public function deleteRecord(){
		if($this->Id) {

			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->recordsTable." 
				WHERE Id = ?");

			$this->Id = htmlspecialchars(strip_tags($this->Id));

			$stmt->bind_param("i", $this->Id);

			if($stmt->execute()){
				return true;
			}
		}
	}
}
?>
