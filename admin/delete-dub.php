<?php
	include 'include/session.php';

	if(isset($_POST['delete'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE users
			FROM users
			JOIN (
				SELECT email,
					   MIN(id) AS min_id
				FROM users
				WHERE type = 0
				GROUP BY email
				HAVING COUNT(*) > 1
			) AS duplicates ON users.email = duplicates.email AND users.id > duplicates.min_id;			
			");
			$stmt->execute();

			$_SESSION['success'] = 'Dublicate deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Invalid request';
	}

	header('location: users');

?>
