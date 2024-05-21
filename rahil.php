<?php
include('scripts/connect.php');
//If user Actually clicked register button
if(isset($_POST)) {
	//This variable is used to catch errors doing upload process. False means there is some error and we need to notify that user.
$uploadOk = true;
$uploadErrorImg= "";
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$bgroup= $_POST['bgroup'];
$pnum= $_POST['pnum'];
$Semester= $_POST['Semester'];
$birthday= $_POST['birthday'];
$gender= $_POST['gender'];
$parentmobile= $_POST['parentmobile'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$pcode= $_POST['pcode'];
$fathername= $_POST['fathername'];
$mothername= $_POST['mothername'];
$gname= $_POST['gname'];
$occupation= $_POST['occupation'];

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
	   
    } else {
	$stmt = $db->prepare("INSERT INTO `studentdetail`(`firstName`, `middleName`, `lastName`, `email`, `bloodGroup`, `phoneNo`, `semester`, `birthday`, `gender`,  `parentNo`, `stAddress`, `city`, `state`, `pincode`, `fatherName`, `motherName`, `guardianName`, `occupation`,`imgPath`) VALUES 
	(:fname,:mname,:lname,:email,:bgroup,:pnum,:Semester,:birthday,:gender,:parentmobile,:address,:city,:state,:pcode,:fathername,:mothername,:gname,:occupation,:filename)"); 
	
	$stmt->bindValue(':fname',$fname,PDO::PARAM_STR);
	$stmt->bindValue(':mname',$mname,PDO::PARAM_STR);
	$stmt->bindValue(':lname',$lname,PDO::PARAM_STR);
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	$stmt->bindValue(':bgroup',$bgroup,PDO::PARAM_STR);
	$stmt->bindValue(':pnum',$pnum,PDO::PARAM_STR);
	$stmt->bindValue(':Semester',$Semester,PDO::PARAM_STR);
	$stmt->bindValue(':birthday',$birthday,PDO::PARAM_STR);
	$stmt->bindValue(':gender',$gender,PDO::PARAM_STR);
	$stmt->bindValue(':parentmobile',$parentmobile,PDO::PARAM_STR);
	$stmt->bindValue(':address',$address,PDO::PARAM_STR);
	$stmt->bindValue(':city',$city,PDO::PARAM_STR);
	$stmt->bindValue(':state',$state,PDO::PARAM_STR);
	$stmt->bindValue(':pcode',$pcode,PDO::PARAM_STR);
	$stmt->bindValue(':fathername',$fathername,PDO::PARAM_STR);
	$stmt->bindValue(':mothername',$mothername,PDO::PARAM_STR);
	$stmt->bindValue(':gname',$gname,PDO::PARAM_STR);
	$stmt->bindValue(':occupation',$occupation,PDO::PARAM_STR);
	$stmt->bindValue(':filename',$filename,PDO::PARAM_STR);
	
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