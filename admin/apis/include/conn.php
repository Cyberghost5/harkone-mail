<?php

Class Database{

  private $server = "mysql:host=localhost;dbname=smdvtuco_vtutest";
  private $username = "smdvtuco_vtutest";
  private $password = "smdvtuco_vtutest";
  private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
  protected $conn;

  public function open(){
     try{
       $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
       return $this->conn;
     }
     catch (PDOException $e){
       echo "There is some problem in connection: " . $e->getMessage();
     }

    }

  public function close(){
       $this->conn = null;
   }

}
// error_reporting(E_ALL);
$pdo = new Database();
?>
