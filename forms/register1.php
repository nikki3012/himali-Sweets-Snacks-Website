<?php
	$firstName = $_POST['firstName'];		
	$lastName = $_POST['lastName'];																			
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','login2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(firstName, lastName, phone, password, confirmpassword, date, gender) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssis", $firstName, $lastName, $phone, $password, $confirmpassword, $date, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	} 	
?>