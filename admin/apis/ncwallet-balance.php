<?php
include 'include/session.php';
// $token = $settings['ncwallet'];
$nc_username = $settings['nc_username'];
$nc_password = $settings['nc_password'];
$token = base64_encode($nc_username.':'.$nc_password);
// $token = $settings['ncwallet'];

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
	  CURLOPT_URL => 'https://ncwallet.ng/api/user/', // Test
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_POSTFIELDS => json_encode($request),
	  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Authorization: Basic {$token}"
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<pre>";
	echo $response;
	echo "</pre>";

	$res = json_decode($response);
	
	echo "API key - ".$res->apikey."<br>";
	echo "Token key - ".$res->AccessToken."<br>";

?>