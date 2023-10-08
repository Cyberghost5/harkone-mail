<?php
include 'include/session.php';
$conn = $pdo->open();
try{
  $stmt = $conn->prepare("SELECT * FROM settings WHERE id = 1");
  $stmt->execute();
  $settings = $stmt->fetch();
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();
?>
<?php
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip_address = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	$deviceinfo = $_SERVER['HTTP_USER_AGENT'];

	if(isset($_GET['return'])){
		$return = $_GET['return'];

	}
	else{
		$return = 'login';
	}

	$conn = $pdo->open();

	if(isset($_POST['login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE username = :username OR email = :email AND type = 1");
			$stmt->execute(['username'=>$username, 'email'=>$username]);
			$row = $stmt->fetch();
			
			$stmt = $conn->prepare("SELECT * FROM users WHERE id = :reffered_by");
			$stmt->execute(['reffered_by'=>$row['referredby_userid']]);
			$reffered_by = $stmt->fetch();

			if($row['numrows'] > 0){
				if($row['type']){
					if($row['status'] == 1){
						if(password_verify($password, $row['password'])){
							$_SESSION['admin'] = $row['id'];
							setcookie("username", $row['username'], time() + (86400 * 30), "/");
							setrawcookie("password", $row['password'], time() + (86400 * 30), "/");
						}
						else{
							$_SESSION['error'] = 'Incorrect Password';
							$_SESSION['username'] = $username;
						}
					}
					else{
						$_SESSION['error'] = 'Account not activated.';
						$_SESSION['username'] = $username;
					}
				}
				else{
					$_SESSION['error'] = 'You are not an admin!';
					$_SESSION['username'] = $username;
				}
			}
			else{
				$_SESSION['error'] = 'Username not found';
				$_SESSION['username'] = $username;
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['warning'] = 'No shortcuts, Fill up the form first';
	}

	$pdo->close();

	header('location:'.$return);
?>
