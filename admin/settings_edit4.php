<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		if($_POST['service_data'] === 'off'){
		    $service_data = 0;
		}else{
		    $service_data = 1;
		}
		$service_data = $_POST['service_data'];
		$service_airtime = $_POST['service_airtime'];
		$service_datacard = $_POST['service_datacard'];
		$service_airtimepin = $_POST['service_airtimepin'];
		$oservice_cable = $_POST['service_cable'];
		$service_electricity = $_POST['service_electricity'];
		$service_a2cash = $_POST['service_a2cash'];
		$service_epins = $_POST['service_epins'];
		$service_bulksms = $_POST['service_bulksms'];
		
		$payment_flutterwave = $_POST['payment_flutterwave'];
		$payment_monnify = $_POST['payment_monnify'];
		$payment_autobank = $_POST['payment_autobank'];
		$payment_banktransfer = $_POST['payment_banktransfer'];
		$payment_coupon = $_POST['payment_coupon'];
		
		$sme_status = $_POST['SME'];
		$vtu_status = $_POST['VTU'];
		$gifting_status = $_POST['Gifting'];
		
// 		var_dump($_POST);
// 		var_dump($_POST['service_data']);
// 		echo "<br>". $service_data;
        // $_SESSION['success'] = 'Settings updated successfully';

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE settings SET payment_coupon=:payment_coupon, payment_banktransfer=:payment_banktransfer, payment_autobank=:payment_autobank, payment_monnify=:payment_monnify, payment_flutterwave=:payment_flutterwave, service_data=:service_data, service_airtime=:service_airtime, service_datacard=:service_datacard, service_airtimepin=:service_airtimepin, service_cable=:service_cable, service_electricity=:service_electricity, service_a2cash=:service_a2cash, service_epins=:service_epins, service_bulksms=:service_bulksms WHERE id=:id");
			$stmt->execute(['payment_coupon'=>$payment_coupon, 'payment_banktransfer'=>$payment_banktransfer, 'payment_autobank'=>$payment_autobank, 'payment_monnify'=>$payment_monnify, 'payment_flutterwave'=>$payment_flutterwave, 'service_data'=>$service_data,  'service_airtime'=>$service_airtime, 'service_datacard'=>$service_datacard, 'service_airtimepin'=>$service_airtimepin, 'service_cable'=>$oservice_cable, 'service_electricity'=>$service_electricity, 'service_a2cash'=>$service_a2cash, 'service_epins'=>$service_epins, 'service_bulksms'=>$service_bulksms, 'id'=>$id]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>$sme_status, 'id'=>1]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>$vtu_status, 'id'=>2]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>$gifting_status, 'id'=>3]);
			
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

	header('location: gen-settings');

?>
