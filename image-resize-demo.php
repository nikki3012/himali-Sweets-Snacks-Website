<?php
include('scripts/connect.php');
//If user Actually clicked register button
if(isset($_POST)) {
	//This variable is used to catch errors doing upload process. False means there is some error and we need to notify that user.
$uploadOk = true;
$uploadErrorImg= "";
$cid= $_POST['category'];
$item_Name= $_POST['item_Name'];
$quantity= $_POST['quantity'];
$price= $_POST['price'];
$price_for= $_POST['price_for'];
$description= $_POST['description'];
$specials= $_POST['specials'];
	$stmt1 = $db->prepare("Select `name` FROM addcategory WHERE id=:cid");
	$stmt1->bindValue(':cid',$cid,PDO::PARAM_STR);
	$stmt1->execute();
	$rows1 = $stmt1->fetch(PDO::FETCH_ASSOC);
	$category = $rows1['name'];
	

	// Code for image
$folder_dir = "./images/";
$base = basename($_FILES['my_image']['name']); 
$imageFileType = pathinfo($base, PATHINFO_EXTENSION); 
$file = uniqid() . "." . $imageFileType; 
$filename = $folder_dir .$file; 
if(file_exists($_FILES['my_image']['tmp_name'])) { 

            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")  {

                if($_FILES['my_image']['size'] < 500000) { // File size is less than 5MB

                    move_uploaded_file($_FILES["my_image"]["tmp_name"], $filename);
					

                } else {
                 
                   $uploadErrorImg = "Wrong Size. Max Size Allowed : 5MB";
                    $uploadOk = false;
                }
            } else {
                $uploadErrorImg = "Wrong Format. Only jpg & png Allowed";
                $uploadOk = false;
            }
        } else {
               $uploadErrorImg = "Something Went Wrong. File Not Uploaded. Try Again.";
                $uploadOk = false;
            }

     //If there is any error then redirect back.
    
	if($uploadOk == false) {
	   echo $uploadErrorImg;
	   echo $uploadErrorPdf;
	   
    } else {
	$stmt = $db->prepare("INSERT INTO `inventory`(`cid`,`category`, `item_Name`, `quantity`, `price`, `price_for`, `image`,`description`,`specials`) VALUES 
	(:cid,:category,:item_Name,:quantity,:price,:price_for,:img,:descrip,:specials)"); 
	
	$stmt->bindValue(':cid',$cid,PDO::PARAM_STR);
	$stmt->bindValue(':category',$category,PDO::PARAM_STR);
	$stmt->bindValue(':item_Name',$item_Name,PDO::PARAM_STR);
	$stmt->bindValue(':quantity',$quantity,PDO::PARAM_STR);
	$stmt->bindValue(':price',$price,PDO::PARAM_STR);
	$stmt->bindValue(':price_for',$price_for,PDO::PARAM_STR);
	$stmt->bindValue(':img',$filename,PDO::PARAM_STR);
	$stmt->bindValue(':descrip',$description,PDO::PARAM_STR);
	$stmt->bindValue(':specials',$specials,PDO::PARAM_STR);

	
	try{
		$stmt->execute();
		echo 1;
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
	}
}
else{
	echo "something went wrong post";
}

?>