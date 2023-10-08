<?php
include 'include/session.php';

	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://www.nellobytesystems.com/APIWalletBalanceV1.asp?UserID={$settings['clubkonnect_userid']}&APIKey={$settings['clubkonnect_apikey']}",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<pre>";
	echo $response;
	echo "</pre>";

	$res = json_decode($response);

?>