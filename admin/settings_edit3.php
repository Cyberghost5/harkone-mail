<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$mtn_data_api = $_POST['mtn_data_api'];
		$glo_data_api = $_POST['glo_data_api'];
		$airtel_data_api = $_POST['airtel_data_api'];
		$o9mobile_data_api = $_POST['9mobile_data_api'];
		$all_data_api = $_POST['all_data_api'];
		$airtime_api = $_POST['airtime_api'];
		$datacard_api = $_POST['datacard_api'];
		$cabletv_api = $_POST['cabletv_api'];
		$electricity_api = $_POST['electricity_api'];
		$airtimepin_api = $_POST['airtimepin_api'];
		
		$airtime_off_percentage = $_POST['airtime_off_percentage'];
		$airtimepin_off_percentage = $_POST['airtimepin_off_percentage'];
		
		$mtnsme_network_type = $_POST['mtnsme_network_type'];
		$mtngifting_network_type = $_POST['mtngifting_network_type'];
		$mtncg_network_type = $_POST['mtncg_network_type'];
		$mtndatacard_network_type = $_POST['mtndatacard_network_type'];
		$airtelgifting_network_type = $_POST['airtelgifting_network_type'];
		$airtelcg_network_type = $_POST['airtelcg_network_type'];
		$glogifting_network_type = $_POST['glogifting_network_type'];
		$glocg_network_type = $_POST['glocg_network_type'];
		$o9mobilesme_network_type = $_POST['o9mobilesme_network_type'];
		$o9mobilegifting_network_type = $_POST['o9mobilegifting_network_type'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE settings SET airtimepin_off_percentage=:airtimepin_off_percentage, airtime_off_percentage=:airtime_off_percentage, airtimepin_api=:airtimepin_api, cabletv_api=:cabletv_api, mtn_data_api=:mtn_data_api, glo_data_api=:glo_data_api, airtel_data_api=:airtel_data_api, 9mobile_data_api=:9mobile_data_api, all_data_api=:all_data_api, airtime_api=:airtime_api, datacard_api=:datacard_api, electricity_api=:electricity_api WHERE id=:id");
			$stmt->execute(['airtimepin_off_percentage'=>$airtimepin_off_percentage, 'airtime_off_percentage'=>$airtime_off_percentage, 'airtimepin_api'=>$airtimepin_api, 'cabletv_api'=>$cabletv_api,  'mtn_data_api'=>$mtn_data_api, 'glo_data_api'=>$glo_data_api, 'airtel_data_api'=>$airtel_data_api, '9mobile_data_api'=>$o9mobile_data_api, 'all_data_api'=>$all_data_api, 'airtime_api'=>$airtime_api, 'datacard_api'=>$datacard_api, 'electricity_api'=>$electricity_api, 'id'=>$id]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:mtnsme_network_type WHERE id = 1");
			$stmt->execute(['mtnsme_network_type'=>$mtnsme_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:mtngifting_network_type WHERE id = 2");
			$stmt->execute(['mtngifting_network_type'=>$mtngifting_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:mtncg_network_type WHERE id = 3");
			$stmt->execute(['mtncg_network_type'=>$mtncg_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:airtelcg_network_type WHERE id = 4");
			$stmt->execute(['airtelcg_network_type'=>$airtelcg_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:airtelgifting_network_type WHERE id = 5");
			$stmt->execute(['airtelgifting_network_type'=>$airtelgifting_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:glocg_network_type WHERE id = 6");
			$stmt->execute(['glocg_network_type'=>$glocg_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:glogifting_network_type WHERE id = 7");
			$stmt->execute(['glogifting_network_type'=>$glogifting_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:o9mobilesme_network_type WHERE id = 8");
			$stmt->execute(['o9mobilesme_network_type'=>$o9mobilesme_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:o9mobilesme_network_type WHERE id = 9");
			$stmt->execute(['o9mobilesme_network_type'=>$o9mobilesme_network_type]);
			
			$stmt = $conn->prepare("UPDATE data_type SET status=:mtndatacard_network_type WHERE id = 10");
			$stmt->execute(['mtndatacard_network_type'=>$mtndatacard_network_type]);
			
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

	header('location: api-settings');

?>
