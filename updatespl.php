<?php
$id = $_GET['message'];
include("scripts/connect.php"); 

	$stmt = $db->prepare("SELECT * FROM `inventory` WHERE id=:id");
	$stmt->bindValue(':id',$id,PDO::PARAM_STR);
	try{
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/Admin1.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	
</head>

<body>

	<!-- ======= Header ======= -->
	<?php include("templets/adminnav.php");?>

	<div class="container1">
			
		<div>
	<div class="field ">
	<centre><h1>UPDATE SPECIAL</h1></centre>
				</div> 
				<br>
				</br>
			<form action="" method="POST">
	
           


				<label>Item Name:</label>
				<div class="field">
					<input type="text" id="item_Name" name="item_Name" placeholder=" Item Name"
						value="<?php echo $rows['item_Name']?>">
				</div>
				<label>Quantity:</label>
				<div class="field">
					<input type="text" id="quantity" name="quantity" placeholder=" Quantity"
						value="<?php echo $rows['quantity']?>">
				</div>
				<label>Price:</label>
				<div class="field">
					<input type="text" id="price" name="price" placeholder="Price " value="<?php echo $rows['price']?>">
				</div>

				<label>Description:</label>
				<div class="field">
					<textarea  id="description" name="description"cols="30" rows="2"  placeholder="Description"
						value="<?php echo $rows['description']?>"></textarea>
				</div>
				<br>
				<br>
				
			
				<input id="button" type="submit" name="update_btn" class="btn btn-success" value="Update">
				<input id="button" type="submit" name="delete_btn" class="btn btn-danger" value="Delete">
			</form>
		</div>
	
		
		<div>
				<form action="" method="POST" enctype="multipart/form-data">
				</br>
				</br>
				</br>
				
					<div>

						<label>Image Url:</label>
						
							<input type="file" name="my_image" id="my_image">
							</br>
							</br>
							
						
						<div class="holder">
							<img id="imgPreview" src="<?php echo $rows['image']?>" alt="pic" />
						</div>
						</br>
						<input id="button" type="submit" name="updateimg_btn" class="btn btn-success"value="Update">
						
					</div>
				</form>
		</div>


	</div>



	<!-- Slide 3 -->


	</div>


	</div>
	</div>
	</section><!-- End Hero -->






<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "himali";
		
		
	try {
		$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];
		$pdo = new PDO($dsn, $username, $password, $options);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		exit;
	}

	if (isset($_POST['delete_btn'])){
		$sql = "DELETE from inventory where id = :id";
		$stmt = $pdo -> prepare($sql);

		$id = $_GET['message'];
		$stmt -> bindParam(":id", $id);
		if ($stmt -> execute()) {
			?><script>alert("Successfully Deleted");</script><?php
			echo '<meta http-equiv="refresh" content="0; url=http://localhost/himaliA(15)/addspl2.php">';

		} else {
			?><script>alert("Failed to Delete");</script><?php
		}
	}

	if (isset($_POST['update_btn'])) {

		$sql = "UPDATE specials SET item_Name = :item_Name, quantity = :quantity, price = :price, description = :description WHERE id = :id";
		$stmt = $pdo -> prepare($sql);

		$id = $_GET['message'];
		$item_Name = $_POST['item_Name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$description = $_POST['description'];

		$stmt -> bindParam(":id", $id);
		$stmt -> bindParam(":item_Name", $item_Name);
		$stmt -> bindParam(":quantity", $quantity);
		$stmt -> bindParam(":price", $price);
		$stmt -> bindParam(":description", $description);

		if ($stmt->execute()) {
			?><script>alert("Successfully Updated");</script><?php
			echo '<meta http-equiv="refresh" content="0; url=http://localhost/himaliA(15)/addspl2.php">';
		} else {
			?><script>alert("Failed to Update");</script><?php
		}
	}

	if (isset($_POST['updateimg_btn'])) {

		



		$sql = "UPDATE specials SET  image = :folder WHERE id = :id";
		$stmt = $pdo -> prepare($sql);

		$id = $_GET['message'];
	
		$filename = $_FILES["my_image"]["name"];
		$tempname = $_FILES["my_image"]["tmp_name"];
		$folder = "images/".$filename;
		move_uploaded_file($tempname, $folder);
		
		$stmt -> bindParam(":id", $id);
		$stmt -> bindParam(":folder", $folder);

		if ($stmt->execute()) {
			?><script>alert(" Image Successfully Updated");</script><?php
			echo '<meta http-equiv="refresh" content="0; url=http://localhost/himaliA/addspl2.php">';
		} else {
			?><script>alert("Failed to Update");</script><?php
		}

		
	}
	include("templets/footer.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	$(document).ready(()=>{
      $('#my_image').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
	</script>

</body>

</html>