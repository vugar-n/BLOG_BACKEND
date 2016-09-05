<?php
	class Database{
			public $host = 'localhost';
			public $db_username = 'root';
			public $db_password = '';
			public $db_name = 'blog';
			public $db_con;
			public function connect(){
				$this->db_con = mysqli_connect($this->host, $this->db_username, $this->db_password, $this->db_name);
			}
			public function select($table, $col='*'){
				$sql = "SELECT $col FROM $table";
				$query = mysqli_query($this->db_con, $sql);
				return $query;
			}
			public function select1($table, $col,$id){
				$sql = "SELECT $col FROM $table WHERE id=$id";
				$query = mysqli_query($this->db_con, $sql);
				return $query;
			}
			public function insert($table, $col, $value){
				$sql = "INSERT INTO $table ($col)  VALUES ($value)";
				$query = mysqli_query($this->db_con, $sql);
				return $sql;
			}
			public function delete($table, $id){
				$sql = "DELETE FROM $table WHERE id=$id";
				$query = mysqli_query($this->db_con,$sql);
			}
			public function update($table,$name, $id){
				$sql = "UPDATE $table SET name='$name' WHERE id=$id";
				$query = mysqli_query($this->db_con, $sql);
			}
		}
?>
