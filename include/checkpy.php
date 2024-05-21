<?php
include('../scripts/connect.php');

$Name_Card = $_POST['Name_Card'];
$card_number = $_POST['card_number'];
$Exp_Month = $_POST['Exp_Month'];
$Exp_Year = $_POST['Exp_Year'];
$CVV = $_POST['CVV'];
$tot = $_GET['tot'];
$cid = $_POST['cid'];
$id = $_POST['did'];
$pid = $_POST['pid'];
$unit = $_POST['unit'];
$prod_id = $_POST['prod_id'];

	$stmt1 = $db->prepare("SELECT `prod_id`,`quantity` FROM `checkout` WHERE `cid`=:cid AND `pid`=:pid");
	$stmt1->bindValue(':cid',$cid,PDO::PARAM_STR);
	$stmt1->bindValue(':pid',$pid,PDO::PARAM_STR);
	
		
	
		try{
		$stmt1->execute();
		$count = $stmt1->rowCount();
		$rows = $stmt1->fetchALL(PDO::FETCH_ASSOC);
		
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
	
	exit();
	}




// Update inventory quantity













// Insert payment record
$insertStmt = $db->prepare("INSERT INTO `payment` (`Name_Card`, `card_number`, `Exp_Month`, `Exp_Year`, `CVV`, `tot`, `cid`, `pid`) VALUES 
(:Name_Card, :card_number, :Exp_Month, :Exp_Year, :CVV, :tot, :cid, :pid)");

// Delete cart items
$deleteStmt = $db->prepare("DELETE FROM `cart` WHERE `user_id` = :id");

try {
    $db->beginTransaction();

    // Update inventory quantity
    foreach($rows as $row):	
	$Stmt = $db->prepare("SELECT `quantity` FROM `inventory` WHERE id=:prod_id");
	$Stmt->bindParam(':prod_id', $row['prod_id']);
	try{
		$Stmt->execute();
		$rows1 = $Stmt->fetch(PDO::FETCH_ASSOC);
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
	
	exit();
	}	
	$total=$rows1['quantity']-$row['quantity'];
	
	
	
	
	$updateStmt = $db->prepare("UPDATE `inventory` SET `quantity` = :total WHERE `id` = :prod_id");
	$updateStmt->bindParam(':total', $total);
	$updateStmt->bindParam(':prod_id', $row['prod_id']);
	try{
		$updateStmt->execute();
	}
	catch(PDOException $e){
		echo $e->getMessage();
	
	exit();
	}

	endforeach;


    // Insert payment record
    $insertStmt->bindValue(':Name_Card', $Name_Card, PDO::PARAM_STR);
    $insertStmt->bindValue(':card_number', $card_number, PDO::PARAM_STR);
    $insertStmt->bindValue(':Exp_Month', $Exp_Month, PDO::PARAM_STR);
    $insertStmt->bindValue(':Exp_Year', $Exp_Year, PDO::PARAM_STR);
    $insertStmt->bindValue(':CVV', $CVV, PDO::PARAM_STR);
    $insertStmt->bindValue(':tot', $tot, PDO::PARAM_STR);
    $insertStmt->bindValue(':cid', $cid, PDO::PARAM_STR);
    $insertStmt->bindValue(':pid', $pid, PDO::PARAM_STR);
    $insertStmt->execute();

    // Delete cart items
    $deleteStmt->bindValue(':id', $id, PDO::PARAM_STR);
    $deleteStmt->execute();

    $db->commit();

    echo 1;
} catch (PDOException $e) {
    $db->rollback();
    echo $e->getMessage();
    exit();
}
?>
