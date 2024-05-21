<?php
include('../scripts/connect.php');
	$email = $_POST['email'];
	$Password = $_POST['Password'];
	$stmt = $db->prepare("SELECT id, email, password, firstName,role FROM members WHERE email=:email AND password=:Password LIMIT 1");
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	$stmt->bindValue(':Password',$Password,PDO::PARAM_STR);
	$stmt->execute();
	$count = $stmt->rowCount();
	if($count > 0){
		session_start();
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		$id = $rows['id'];
		$firstName = $rows['firstName'];
		$role = $rows['role'];
		$firstName = $rows['firstName'];
			$_SESSION['logged_in']=true;
			$_SESSION['firstName']=$firstName;
			$_SESSION['id'] = $id;
			$_SESSION['role']= $role;
			
			if($role==1){
				echo 1;
			}else if($role==0){
				echo 2;
			}
		}else{
			echo 0;
			$db=null;
		}
	?>