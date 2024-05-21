<?php
include('../scripts/connect.php');
	$UserName = $_POST['UserName'];
	$home = $_POST['home'];
	$town_city = $_POST['town_city'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$pincode = $_POST['pincode'];
	$cid = $_POST['cid'];
	$pid = $_GET['pid'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	date_default_timezone_set('Asia/Kolkata');
	$o_date = date("Y-m-d");
    $time = date("h:i:sa");
	$tuple=0;
	
	$stmt1 = $db->prepare("SELECT prod_id FROM `cart` WHERE `user_id`=:cid");
	$stmt1->bindValue(':cid',$cid,PDO::PARAM_STR);
	
		
	
		try{
		$stmt1->execute();
		$count = $stmt1->rowCount();
		$rows = $stmt1->fetchALL(PDO::FETCH_ASSOC);
		
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
	
	exit();
	}
	
	
	
	
	foreach($rows as $row):	


	$stmt = $db->prepare("INSERT INTO checkout(UserName, home, town_city,phone_no,email, pincode,cid,pid,prod_id,quantity,price,o_date,time)VALUES  
	(:UserName,:home,:town_city,:phone_no,:email,:pincode,:cid,:pid,:prod_id,:quantity,:price,:o_date,:time)");
	$stmt->bindValue(':UserName',$UserName,PDO::PARAM_STR);
	$stmt->bindValue(':home',$home,PDO::PARAM_STR);
	$stmt->bindValue(':town_city',$town_city ,PDO::PARAM_STR);
	$stmt->bindValue(':phone_no',$phone_no,PDO::PARAM_STR);
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	$stmt->bindValue(':pincode',$pincode,PDO::PARAM_STR);
	$stmt->bindValue(':cid',$cid,PDO::PARAM_STR);
	$stmt->bindValue(':pid',$pid,PDO::PARAM_STR);
	$stmt->bindValue(':prod_id',$row['prod_id'],PDO::PARAM_STR);
	$stmt->bindValue(':quantity',$quantity,PDO::PARAM_STR);
	$stmt->bindValue(':price',$price,PDO::PARAM_STR);
	$stmt->bindValue(':o_date',$o_date,PDO::PARAM_STR);
	$stmt->bindValue(':time',$time,PDO::PARAM_STR);
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	
		
	
		try{
		$stmt->execute();
		$tuple=$tuple+1;
		
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
endforeach;
if($count=$tuple) 
{
	echo 1;
}else{
	echo 0;
}