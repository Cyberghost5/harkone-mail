<?php
include 'include/session.php';
$token = $settings['monnify_token'];
$secret_key = $settings['monnify_sk'];
$monnify_cn = $settings['monnify_cn'];
$monnify_api = $settings['monnify_api'];
$token1 = base64_encode($monnify_api.':'.$secret_key);
$fullname = $user['firstname'].''.$user['lastname'];
$bvn = $settings['bvn'];
$email = $user['email'];

$req = '{ "accountReference": "abc123d380",
    "accountName": "ysbbs hsbsb nxnznq",
    "currencyCode": "NGN",
    "contractCode": "7059707855",
    "customerEmail": "jxbbz@qq.com",
    "customerName": "ysbbs hsbsb nxnznq",
    "bvn": "54848484888",
    "getAllAvailableBanks": true
}';

$request = [
    'accountReference' => 'TRX'.time(),
    'accountName' => $fullname,
    'currencyCode' => 'NGN',
    'contractCode' => $monnify_cn,
	'customerEmail' => $email,
	'customerName' => $fullname,
	'bvn' => $bvn,
    'getAllAvailableBanks' => true
];

    $curl = curl_init();
    curl_setopt_array($curl, array(
    // CURLOPT_URL => 'https://api.flutterwave.com/v3/payments', // Live
    CURLOPT_URL => 'https://sandbox.monnify.com/api/v1/auth/login', // Test
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        "Authorization: Basic {$token1}",
        "Content-Type: application/json"
    ),
    ));
        
    $response = curl_exec($curl);
    
    curl_close($curl);
        
    // echo "<pre>";
    // echo $response;
    // echo "</pre>";
        
    $res = json_decode($response);
    $real_token = $res->responseBody->accessToken;

	$curl = curl_init();
	curl_setopt_array($curl, array(
      //CURLOPT_URL => "https://api.flutterwave.com/v3/virtual-account-numbers",
	  CURLOPT_URL => 'https://sandbox.monnify.com/api/v2/bank-transfer/reserved-accounts', // Test
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode($request),
	  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Authorization: Bearer {$real_token}"
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<pre>";
	echo $response;
	echo "</pre>";

	$res = json_decode($response);
	echo "<pre>";
	var_dump($res->responseBody);
	echo "</pre>";
	
	$conn = $pdo->open();
	
    $stmt = $conn->prepare("INSERT INTO users_account (userid, aza, account_details) VALUES (:userid, :aza, :account_details)");
    $stmt->execute(['userid'=>81, 'aza'=>$response, 'account_details'=>$response]);
    
    $pdo->close();
    
?>