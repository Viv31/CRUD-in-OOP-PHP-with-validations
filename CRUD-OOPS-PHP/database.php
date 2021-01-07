<?php
class database{
	private $db_host;
	private $db_user;
	private $db_password;
	private $db_name;

	protected function connect(){
		$this->db_host = 'localhost';
		$this->db_user = 'root';
		$this->db_password = '';
		$this->db_name = 'CRUD-OOPS-PHP';
		$conn = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);
		return $conn;
	}
}
?>