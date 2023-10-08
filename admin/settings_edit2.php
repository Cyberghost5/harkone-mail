<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$public_key = $_POST['public_key'];
		$secret_key = $_POST['secret_key'];
		$encryption_key = $_POST['encryption_key'];
		$text_api_sender_id = $_POST['text_api_sender_id'];
		$text_api_key = $_POST['text_api_key'];
		$text_api_amount = $_POST['text_api_amount'];
		$open_weather_api = $_POST['open_weather_api'];
		$bvn = $_POST['bvn'];
		$percentage = $_POST['percentage'];
		$airtime_phoneno = $_POST['airtime_phoneno'];
		$airtime_percentage = $_POST['airtime_percentage'];
		$airtime_max = $_POST['airtime_max'];
		$airtime_min = $_POST['airtime_min'];
		$email_amount = $_POST['email_amount'];
		$ref_bonus = $_POST['ref_bonus'];
		$ref_min = $_POST['ref_min'];
		$auto_percentage = $_POST['auto_percentage'];
		$api_username = $_POST['api_username'];
		$api_password = $_POST['api_password'];
		$dataway_public = $_POST['dataway_public'];
		$dataway_private = $_POST['dataway_private'];
		
		$monnify_sk = $_POST['monnify_sk'];
		$monnify_cn = $_POST['monnify_cn'];
		$monnify_api = $_POST['monnify_api'];
		$easyaccess = $_POST['easyaccess'];
		$nc_username = $_POST['nc_username'];
		$nc_password = $_POST['nc_password'];
		$ncwallet = base64_encode($nc_username.':'.$nc_password);
		
		$clubkonnect_apikey = $_POST['clubkonnect_apikey'];
		$clubkonnect_userid = $_POST['clubkonnect_userid'];
		
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM settings WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		if($ncwallet !== $row['ncwallet']){
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
        	  CURLOPT_HTTPHEADER => array(
        			"Content-Type: application/json",
        			"Authorization: Basic {$ncwallet}"
        	  ),
        	));
        	$response = curl_exec($curl);
        	curl_close($curl);
        
        // 	echo "<pre>";
        // 	echo $response;
        // 	echo "</pre>";
        
        	$res = json_decode($response);
        	
        	$nc_apikey = $res->apikey;
        	$ncuser = $res->AccessToken;
		}else{
		    $nc_apikey = $row['nc_apikey'];
		    $ncuser = $row['ncuser'];
		}

		try{
			$stmt = $conn->prepare("UPDATE settings SET airtime_max=:airtime_max, airtime_min=:airtime_min, clubkonnect_apikey=:clubkonnect_apikey, clubkonnect_userid=:clubkonnect_userid, ncuser=:ncuser, nc_apikey=:nc_apikey, ncwallet=:ncwallet, nc_password=:nc_password, nc_username=:nc_username, easyaccess=:easyaccess, monnify_api=:monnify_api, monnify_cn=:monnify_cn, monnify_sk=:monnify_sk, auto_percentage=:auto_percentage, ref_bonus=:ref_bonus, ref_min=:ref_min, dataway_public=:dataway_public, dataway_private=:dataway_private, api_username=:api_username, api_password=:api_password, public_key=:public_key, secret_key=:secret_key, encryption_key=:encryption_key, text_api_sender_id=:text_api_sender_id, text_api_key=:text_api_key, text_api_amount=:text_api_amount, open_weather_api=:open_weather_api, bvn=:bvn, percentage=:percentage, airtime_phoneno=:airtime_phoneno, airtime_percentage=:airtime_percentage, email_amount=:email_amount WHERE id=:id");
			$stmt->execute(['airtime_max'=>$airtime_max, 'airtime_min'=>$airtime_min, 'clubkonnect_apikey'=>$clubkonnect_apikey, 'clubkonnect_userid'=>$clubkonnect_userid, 'ncuser'=>$ncuser, 'nc_apikey'=>$nc_apikey, 'ncwallet'=>$ncwallet, 'nc_password'=>$nc_password, 'nc_username'=>$nc_username, 'easyaccess'=>$easyaccess, 'monnify_api'=>$monnify_api, 'monnify_cn'=>$monnify_cn, 'monnify_sk'=>$monnify_sk, 'auto_percentage'=>$auto_percentage, 'ref_bonus'=>$ref_bonus, 'ref_min' =>$ref_min, 'dataway_public'=>$dataway_public, 'dataway_private'=>$dataway_private, 'api_username'=>$api_username, 'api_password'=>$api_password, 'public_key'=>$public_key, 'secret_key'=>$secret_key, 'encryption_key'=>$encryption_key, 'text_api_sender_id'=>$text_api_sender_id, 'text_api_key'=>$text_api_key, 'text_api_amount'=>$text_api_amount, 'open_weather_api'=>$open_weather_api, 'bvn'=>$bvn, 'percentage'=>$percentage, 'airtime_phoneno'=>$airtime_phoneno, 'airtime_percentage'=>$airtime_percentage, 'email_amount'=>$email_amount, 'id'=>$id]);
			$_SESSION['success'] = 'Settings updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}


		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up settings form first';
	}

	header('location: apikeys-settings');

?>
