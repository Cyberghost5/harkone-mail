<?php

Class Database{

  private $server = "mysql:host=localhost;dbname=email_sending";
  private $username = "root";
  private $password = "";
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

$conn = $pdo->open();
try{
  $stmt = $conn->prepare("SELECT * FROM settings WHERE id = 1");
  $stmt->execute();
  $settings = $stmt->fetch();
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();

  header('Content-type: application/json');
  echo '
  {
      "name": "'.$settings['site_name'].'",
      "lang": "en-us",
      "short_name": "'.$settings['site_name'].'",
      "description": "'.$settings['site_desc'].'",
      "start_url": "'.$settings['site_url'].'",
      "scope": "'.$settings['site_url'].'",
      "display": "standalone",
      "theme_color": "'.$settings['theme'].'",
      "background_color": "'.$settings['theme'].'",
      "orientation": "any",
      "icons": [
          {
              "src": "'.$settings['site_url'].'assets/images/favicon-icon.jpg",
              "type": "image/jpg",
              "sizes": "32x32"
          }
      ]
  }
  ';
?>
