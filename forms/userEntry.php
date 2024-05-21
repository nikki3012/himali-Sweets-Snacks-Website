<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','loginsystem');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(Name, email) values(?, ?)");
		$stmt->bind_param("ss", $Name, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>