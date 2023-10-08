<?php
  include 'include/conn.php';
  include 'include/conn1.php';

  session_start();
  
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
  $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
  }else {
  $ip_address = $_SERVER['REMOTE_ADDR'];
  }

$device_info = $_SERVER['HTTP_USER_AGENT'];
$today = date('Y-m-d');

  if(isset($_SESSION['admin'])){

    $conn = $pdo->open();

    try{
      $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
      $stmt->execute(['id'=>$_SESSION['admin']]);
      $admin = $stmt->fetch();
      // header('location: profile.php');
    }
    catch(PDOException $e){
      echo "There is some problem in connection: " . $e->getMessage();
    }
    
    if($admin['pin_set'] === 0){
    // echo "<script>window.location.assign('set-pin')</script>"; 
    // header('location: set-pin');
    $_SESSION['error'] = "Set your transaction PIN <a href='set-pin'>here</a>";
    }

    $pdo->close();
  }else {
    // header('location: ../login');
    echo "<script>window.location.assign('../')</script>";
  }

    if ('session_start()' == true) {

  $conn = $pdo->open();

  $stmt = $conn->prepare("SELECT * FROM visitors");
  $stmt->execute();
  $row = $stmt->fetch();

  $count = $row['count'] + 1;
  $ini_count = 1;
  $db_ip = $row['ip'];

  if ($db_ip == $ip_address) {
    $stmt = $conn->prepare("UPDATE visitors SET count = :count, date = :date WHERE ip = :ip");
    $stmt->execute(['count'=>$count, 'date'=>$today, 'ip'=>$db_ip]);
  }
  else {
    $stmt = $conn->prepare("INSERT INTO visitors(count, ip, deviceinfo, date) VALUES (:count, :ip, :deviceinfo, :date)");
    $stmt->execute(['count'=>$ini_count, 'ip'=>$ip_address, 'deviceinfo'=>$device_info, 'date'=>$today]);
  }

  $pdo->close();

}

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
?>
