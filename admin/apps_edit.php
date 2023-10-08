<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$app = $_POST['app'];
		$app2 = $_POST['app2'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE about SET app=:app, app2=:app2 WHERE id=:id");
			$stmt->execute(['app'=>$app, 'app2'=>$app2, 'id'=>$id]);
			$_SESSION['success'] = 'App Links updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}


		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: text-settings');

?>
