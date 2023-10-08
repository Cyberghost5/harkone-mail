<?php

Class Databaseold{

  private $server = "mysql:host=localhost;dbname=smdvtuco_vtu";
  private $username = "smdvtuco_vtu";
  private $password = "smdvtuco_vtu";
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
$pdo_old = new Databaseold();
?>
