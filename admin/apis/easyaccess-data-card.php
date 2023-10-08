<?php
include 'include/session.php';
$easy_token = $settings['easyaccess'];

$request = [
    'network' => '01',
    'no_of_pins' => '5',
    'dataplan' => '165'
];

	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://easyaccessapi.com.ng/api/datacard.php', // Test
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode($request),
	  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"AuthorizationToken: {$easy_token}"
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<pre>";
	echo $response;
	echo "</pre>";

	$res = json_decode($response);

?>