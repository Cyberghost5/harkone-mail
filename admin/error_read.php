<?php
	include 'include/session.php';

	if(isset($_POST['read'])){
		$id = $_POST['id'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE error_logs SET status = 1 WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Error set as read successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Error to read first';
	}

	header('location: error-logs');

?>
