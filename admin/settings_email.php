<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$stmphost = $_POST['stmphost'];
		$portno = $_POST['portno'];
		$stmpprotocol = $_POST['stmpprotocol'];
		$stmpuser = $_POST['stmpuser'];
		$password = $_POST['password'];
		$from_email = $_POST['from_email'];
		$subject = $_POST['subject'];
		$replyto = $_POST['replyto'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM email_settings WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		try{
			$stmt = $conn->prepare("UPDATE email_settings SET stmphost=:stmphost, portno=:portno, stmpprotocol=:stmpprotocol, stmpuser=:stmpuser, password=:password, from_email=:from_email, subject=:subject, replyto=:replyto WHERE id=:id");
			$stmt->execute(['stmphost'=>$stmphost, 'portno'=>$portno, 'stmpprotocol'=>$stmpprotocol, 'stmpuser'=>$stmpuser, 'password'=>$password, 'from_email'=>$from_email, 'subject'=>$subject, 'replyto'=>$replyto, 'id'=>$id]);
			$_SESSION['success'] = 'Email Settings updated successfully';

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
