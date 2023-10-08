<?php
	include 'include/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$amount = $_POST['amount'];
		$fund_type = $_POST['fund_type'];
		$txid = "TRX".time();
		$date = date('d/m/Y H:i');

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		if($fund_type === 'credit'){
		    $balance = $row['balance'] + $amount;
		    $type = "Admin Credit by ".$admin['username'];
		}elseif($fund_type === 'debit'){
		    $balance = $row['balance'] - $amount;
		    $type = "Admin Debit by ".$admin['username'];
		}else{
		    $_SESSION['error'] = 'Transaction not valid';
		}
		
		
		try{
			$stmt = $conn->prepare("UPDATE users SET balance=:balance WHERE id=:id");
			$stmt->execute(['balance'=>$balance, 'id'=>$id]);
			
			$stmt = $conn->prepare("INSERT INTO transaction_admincredit (trxid, userid, amount, datetime, status) VALUES (:trxid, :userid, :amount, :datetime, :status)");
            $stmt->execute(['trxid'=>$txid, 'userid'=>$id, 'amount'=>$amount, 'datetime'=>$date, 'status'=>1]);

            $stmt = $conn->prepare("INSERT INTO transaction_all (userid, trxid, amount,	type, status) VALUES (:userid, :trxid, :amount, :type, :status)");
            $stmt->execute(['userid'=>$id, 'trxid'=>$txid, 'amount'=>$amount, 'type'=>$type, 'status'=>1]);
            
			$_SESSION['success'] = 'User Balance updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}


		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}

	header('location: users-details?userid='.$id);

?>