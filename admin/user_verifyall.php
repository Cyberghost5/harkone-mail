<?php
	include 'include/session.php';

	if(isset($_POST['verify'])){

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET status=:status WHERE type=:type");
			$stmt->execute(['status'=>1, 'type'=>0]);
			$_SESSION['success'] = 'All users verified successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select user to block first';
	}

	header('location: users');
?>
