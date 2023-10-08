<?php
	include 'include/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];

	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$userid = $admin['id'];
		$curr_password = $_POST['curr_password'];
		// $email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contact_info = $_POST['contact_info'];

		$photo = $_FILES['photo']['name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM users WHERE id=:userid");
		$stmt->execute(['userid'=>$userid]);
		$row = $stmt->fetch();

		if(password_verify($curr_password, $admin['password'])){
			if(!empty($photo)){
				$ext = pathinfo($photo, PATHINFO_EXTENSION);
				$new_filename = $row['username'].'_'.time().'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$new_filename);
				$filename = $new_filename;
			}
			else{
				$filename = $admin['photo'];
			}

			if($password == $admin['password']){
				$password = $admin['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			// $conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE users SET password=:password, firstname=:firstname, lastname=:lastname, contact_info=:contact_info, photo=:photo WHERE id=:id");
				$stmt->execute(['password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact_info'=>$contact_info, 'photo'=>$filename, 'id'=>$userid]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();

		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:'.$return);

?>
