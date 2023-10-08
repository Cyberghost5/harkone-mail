<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$site_name = $_POST['site_name'];
		$site_url = $_POST['site_url'];
		$site_desc = $_POST['site_desc'];
		$site_keyword = $_POST['site_keyword'];
		$location = $_POST['location'];
		$copyright = $_POST['copyright'];
		$admin_email = $_POST['admin_email'];
		$email_vef = $_POST['email_vef'];
		$color = $_POST['color'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE settings SET email_vef=:email_vef, site_name=:site_name, site_url=:site_url, site_desc=:site_desc, site_keyword=:site_keyword, location=:location, copyright=:copyright, admin_email=:admin_email, theme=:color WHERE id=:id");
			$stmt->execute(['email_vef'=>$email_vef, 'site_name'=>$site_name, 'site_url'=>$site_url, 'site_desc'=>$site_desc, 'site_keyword'=>$site_keyword, 'location'=>$location, 'copyright'=>$copyright, 'admin_email'=>$admin_email, 'color'=>$color, 'id'=>$id]);
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
