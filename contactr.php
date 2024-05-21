<?php
include('scripts/connect.php');
//If user Actually clicked register button
$Name= $_POST['Name'];
$Email= $_POST['Email'];
$Subject= $_POST['Subject'];
$message= $_POST['message'];

	$stmt = $db->prepare("INSERT INTO contact(Name,Email, Subject,message) VALUES 
	(:Name,:Email,:Subject,:message)"); 
	$stmt->bindValue(':Name',$Name,PDO::PARAM_STR);
	$stmt->bindValue(':Email',$Email,PDO::PARAM_STR);
	$stmt->bindValue(':Subject',$Subject,PDO::PARAM_STR);
	$stmt->bindValue(':message',$message,PDO::PARAM_STR);
	try{
		$stmt->execute();
		echo 1;
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
?>