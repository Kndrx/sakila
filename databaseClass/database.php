<?php

class database {

  private $host = "127.0.0.1";
  private $username = "root";
  private $password = "root";
  private $name="sakila";	//database name

  public function connect() {
    
    try {
      $conn = new PDO("mysql:host=$this->host;dbname=$this->name", $this->username, $this->password);

      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;

    } catch(PDOException $e) {

      echo "Connection failed: " . $e->getMessage();
    }
  }
  
}

