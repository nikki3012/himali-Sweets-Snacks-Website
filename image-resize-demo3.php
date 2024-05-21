<?php
include('scripts/connect.php');
//If user Actually clicked register button
if(isset($_POST)) {
	//This variable is used to catch errors doing upload process. False means there is some error and we need to notify that user.
$uploadOk = true;
$uploadErrorImg= "";
$name= $_POST['name'];
$tagline= $_POST['tagline'];

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
	$stmt = $db->prepare("INSERT INTO `addcategory`(`name`,`tagline`, `image`) VALUES 
	(:name,:tagline,:img)"); 
	
	$stmt->bindValue(':name',$name,PDO::PARAM_STR);
	$stmt->bindValue(':tagline',$tagline,PDO::PARAM_STR);
	$stmt->bindValue(':img',$filename,PDO::PARAM_STR);


	
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