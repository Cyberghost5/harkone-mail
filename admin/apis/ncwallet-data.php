<?php
include 'include/session.php';
$nc_token = $settings['ncwallet'];

$request = [
    'network' => 1,
    'phone' => 07048885892,
    'data_plan' => 1,
    'bypass' => true,
	'request-id' => 'TRX'.time()
];

	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://ncwallet.ng/api/data/', // Test
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
			"Authorization: Token {$nc_token}"
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<pre>";
	echo $response;
	echo "</pre>";

	$res = json_decode($response);

?>