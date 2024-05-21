Thanks for downloading this template!

Template Name: Delicious
Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/


 <?php include("scripts/connect.php");
	?>
		   <?php
	   $stmt = $db->prepare("SELECT item_Name, price FROM inventory WHERE category='NAMKEENS'");
	   try{
	   $stmt->execute();
	   $r2 = $stmt->fetchALL(PDO::FETCH_ASSOC);
	   }
	   catch(PDOException $e){
		   echo $e->getMessage();
		   $db = null;
	   }
   ?>
   <?php include("scripts/connect.php");
	?>
		   <?php
	   $stmt = $db->prepare("SELECT item_Name, price FROM inventory WHERE category='BAKERY'");
	   try{
	   $stmt->execute();
	   $r3 = $stmt->fetchALL(PDO::FETCH_ASSOC);
	   }
	   catch(PDOException $e){
		   echo $e->getMessage();
		   $db = null;
	   }
   ?>
   <?php include("scripts/connect.php");
	?>
		   <?php
	   $stmt = $db->prepare("SELECT item_Name, price FROM inventory WHERE category='RESTAURANT'");
	   try{
	   $stmt->execute();
	   $r4 = $stmt->fetchALL(PDO::FETCH_ASSOC);
	   }
	   catch(PDOException $e){
		   echo $e->getMessage();
		   $db = null;
	   }
   ?>
