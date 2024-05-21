

 <?php
include('../scripts/connect.php');
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$role = $_POST['role'];
	
	$stmt = $db->prepare("INSERT INTO members(firstName, lastName, email, password,  date,gender,role)VALUES 
	(:firstName,:lastName,:email,:password,:date,:gender,:role)");
	$stmt->bindValue(':firstName',$firstName,PDO::PARAM_STR);
	$stmt->bindValue(':lastName',$lastName,PDO::PARAM_STR);
	$stmt->bindValue(':email',$email,PDO::PARAM_STR);
	$stmt->bindValue(':password',$password,PDO::PARAM_STR);

	$stmt->bindValue(':date',$date,PDO::PARAM_STR);
	$stmt->bindValue(':gender',$gender,PDO::PARAM_STR);
	$stmt->bindValue(':role',$role,PDO::PARAM_STR);
	$count = $stmt->rowCount();
	try{
		$stmt->execute();
		echo 1;
		
	}
	catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
	?>

	

