<?php

  class Database{
    public $db_host;
    public $db_username;
    public $db_password;
    public $db_name;
    public $connection;
    // --------------CONSTRACT----------------------------------------
    function __construct($db_host , $db_username , $db_password , $db_name){
      $this->db_host = $db_host;
      $this->db_username = $db_username;
      $this->db_password = $db_password;
      $this->db_name = $db_name;
      $this->connection = mysqli_connect($this->db_host , $this->db_username , $this->db_password , $this->db_name);
    }
    // --------------SELECT FUNCTION----------------------------------------
    public function select($table_name , $id = null , $column ='*'){
      $sql = "SELECT $column FROM $table_name";
      $query = mysqli_query($this->connection , $sql);
      return $query;
      if ($id != null) {
        $sql .= " WHERE id=$id";
      }
    }
    // --------------INSERT FUNCTION----------------------------------------
    public function insert($table_name , $column , $values){
      $sql = "INSERT INTO $table_name ($column) VALUES ($values)";
      $query = mysqli_query($this->connection , $sql);
    }
    // --------------DELETE FUNCTION----------------------------------------
    public function delete($table_name , $id){
      $sql = "DELETE FROM $table_name WHERE id=$id";
      $query = mysqli_query($this->connection , $sql);
      return $query;
    }
    // --------------UPDATE SECTION----------------------------------------
    public function update($tname,$col, $id){
        $sql = "UPDATE $tname SET $col WHERE id = $id";
        $query = mysqli_query($this->connection, $sql);
      }
  }

  // --------------CONNECTION----------------------------------------
  $connect  = new Database("localhost" , "root" , "" , "blog");
 ?>
