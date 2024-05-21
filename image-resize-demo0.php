<?php
include('scripts/connect.php');
	$Name = $_POST['Name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$stmt = $db->prepare("INSERT INTO orders(Name, phone_no, email, address  )VALUES 
	(:Name,:phone_no,:email,:address)");
	$stmt->bindValue(':Name',$Name,PDO::PARAM_STR);
	$stmt->bindValue(':phone_no',$phone_no,PDO::PARAM_STR);
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	$stmt->bindValue(':address',$address,PDO::PARAM_STR);
	$count = $stmt->rowCount();
	try{
		$stmt->execute();
		echo 1;
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
	?>

	

