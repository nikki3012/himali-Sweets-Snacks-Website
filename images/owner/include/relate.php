<?php
include('../script/connect.php');
	$category = $_POST['category'];
	// $image = $_POST['image'];
    $item_Name = $_POST['item_Name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];
	$stmt = $db->prepare("INSERT INTO inventory(category, item_Name, quantity, price, description)VALUES 
	(:category,:item_Name,:quantity,:price,:description)");
	$stmt->bindValue(':category',$category,PDO::PARAM_STR);
	// $stmt->bindValue(':image',$image,PDO::PARAM_STR);
    $stmt->bindValue(':item_Name',$item_Name,PDO::PARAM_STR);
    $stmt->bindValue(':quantity',$quantity,PDO::PARAM_STR);
    $stmt->bindValue(':price',$price,PDO::PARAM_STR);
    $stmt->bindValue(':description',$description,PDO::PARAM_STR);

	$stmt->execute();
	$count = $stmt->rowCount();
	if($count > 0){
		
		echo 1;
		
	}else{
		echo 0;
		$db=null;
	}
?>
