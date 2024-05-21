<?php
include('../scripts/connect.php');
	$id = $_POST['id']; 
		$db->beginTransaction();
		$stmt1 = $db->prepare("DELETE FROM `addcategory` WHERE id=:id"); 
		$stmt1->bindValue(':id',$id,PDO::PARAM_STR);  
		$stmt1->execute();
		
		$stmt2 = $db->prepare("DELETE FROM `inventory`  WHERE cid=:id"); 
		$stmt2->bindValue(':id',$id,PDO::PARAM_STR);  
		$stmt2->execute();
		 try{		
		 echo 1;
		 $db->commit();
		   }
		 catch(PDOException $e){
			echo $e->getMessage();
			exit();
		}
?>
