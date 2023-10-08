<?php
	include 'include/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM error_logs WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Error Log deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Error Log to delete first';
	}

	header('location: error-logs');

?>
