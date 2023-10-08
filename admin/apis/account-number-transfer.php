<?php include 'include/session.php'; 

$conn = $pdo->open();
$conn_old = $pdo_old->open();

echo "Importing Users:";

$stmt = $conn_old->prepare("SELECT * FROM minatuser");
$stmt->execute(['userid'=>$user['id']]);

foreach($stmt as $olduser_details){
    echo "<pre>";
    // var_dump($olduser_details);
    echo "ID: ".$olduser_details['id']."</br>";
    $str_arr = explode (" ", $olduser_details['name']); 
    $now = date('Y-m-d');
    
    if($olduser_details['type'] == "AGENT"){
     $user_type = 1;
     $type = 0;
    }elseif($olduser_details['type'] == "ADMIN"){
     $user_type = 1;
     $type = 1;
    }else{
     $user_type = 0;
     $type = 0;
    }
    
    if($olduser_details['pin'] == NULL){
     $pin = '1234';
    }else{
     $pin = $olduser_details['pin'];
    }
    
    // echo "Firstname: ".$str_arr[0]."</br>";
    // echo "Lastname: ".$str_arr[1]."</br>";
    // echo "Fullname: ".$olduser_details['name']."</br>";
    // echo "Username: ".$olduser_details['username']."</br>";
    // echo "Password: ".$olduser_details['password']."</br>";
    // echo "Email: ".$olduser_details['email']."</br>";
    // echo "Phone: ".$olduser_details['phone']."</br>";
    // echo "Balance: ".$olduser_details['bal']."</br>";
    // echo "Ref Balance: ".$olduser_details['refbal']."</br>";
    // echo "PIN: ".$olduser_details['pin']."</br>";
    // echo "User Type: ".$olduser_details['type']."</br>";
    // echo "Sterling: ".$olduser_details['sterlen']."</br>";
    // echo "Wema: ".$olduser_details['wema']."</br>";
    // echo "Moniepoint: ".$olduser_details['rolex']."</br>";
    // echo "Fidelity: ".$olduser_details['fed']."</br>";
    // echo "GTB: ".$olduser_details['gtb']."</br>";
    // echo "Data Added: ".$olduser_details['date']."</br>";
    // $dum_date = '3/June/2023';
    // $str_arrw = explode ("/", $olduser_details['date']);
    // $created_on = date('Y', strtotime(strstr($str_arrw[2], ' @', true)))."-".date('m', strtotime($str_arrw[1]))."-".$str_arrw[0];
    // echo "New Date: ".$created_on."</br>";
    // echo "</pre>";
    
    $response = '
    {
      "responseBody": {
        "accounts": [
          {
            "bankCode": "50515",
            "bankName": "Moniepoint Microfinance Bank",
            "accountNumber": "'.$olduser_details['rolex'].'",
            "accountName": "'.$olduser_details['username'].'"
          },
          {
            "bankCode": "035",
            "bankName": "Wema bank",
            "accountNumber": "'.$olduser_details['wema'].'",
            "accountName": "'.$olduser_details['username'].'"
          },
          {
            "bankCode": "070",
            "bankName": "Fidelity bank",
            "accountNumber": "'.$olduser_details['fed'].'",
            "accountName": "'.$olduser_details['username'].'"
          },
          {
            "bankCode": "232",
            "bankName": "Sterling bank",
            "accountNumber": "'.$olduser_details['sterlen'].'",
            "accountName": "'.$olduser_details['username'].'"
          }
        ],
        "restrictPaymentSource": false
      }
    }
    ';
    //echo $response;
    
    $stmti = $conn->prepare("SELECT COUNT(*) AS numrowws FROM users_account WHERE userid=:userid");
	$stmti->execute(['userid'=>$olduser_details['id']]);
	$rowp = $stmti->fetch();
    
    if($rowp['numrowws'] > 0){
        echo "User <b>".$olduser_details['username']."</b> Bank details already added, Skipped.<br>";
    }else{
        $stmtq = $conn->prepare("INSERT INTO users_account (userid, aza, account_details) VALUES (:userid, :aza, :account_details)");
        $stmtq->execute(['userid'=>$olduser_details['id'], 'aza'=>$response, 'account_details'=>$response]);
        if($stmtq){
            echo "User <b>".$olduser_details['username']."</b> Bank Account Added successfully.<br>";
        }else{
            echo "User <b>".$olduser_details['username']."</b> Bank Account Not successfully.<br>";
        }
    }
    
    
    $stmtj = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
	$stmtj->execute(['email'=>$olduser_details['email']]);
	$row = $stmtj->fetch();
    
    if($row['numrows'] > 0){
        echo "User <b>".$olduser_details['username']."</b> already added, Skipped.<br>";
    }else{
        $stmtd = $conn->prepare("INSERT INTO users (id, username, email, contact_info, password, firstname, lastname, balance, refbal, pin, pin_set, user_type, type, status, created_on) VALUES (:id, :username, :email, :contact_info, :password, :firstname, :lastname, :balance, :refbal, :pin, :pin_set, :user_type, :type, :status, :now)");
        $stmtd->execute(['id'=>$olduser_details['id'], 'username'=>$olduser_details['username'], 'email'=>$olduser_details['email'], 'contact_info'=>$olduser_details['phone'], 'password'=>$olduser_details['password'], 'firstname'=>$str_arr[0], 'lastname'=>$str_arr[1], 'balance'=>$olduser_details['bal'], 'refbal'=>$olduser_details['refbal'], 'pin'=>$pin, 'pin_set'=>1, 'user_type'=>$user_type, 'type'=>$type, 'status'=>1, 'now'=>$created_on]);
        
        if($stmtd){
            echo "User <b>".$olduser_details['username']."</b> Account Added successfully.<br>";
        }else{
            echo "User <b>".$olduser_details['username']."</b> Not successfully.<br>";
        }
    }
}

  $pdo->close();
  $pdo_old->close();
?>