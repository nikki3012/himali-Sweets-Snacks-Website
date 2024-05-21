<?php include("scripts/connect.php"); 
	$stmt = $db->prepare("SELECT * FROM `inventory` ");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
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
	<link href="assets/css/special.css" rel="stylesheet">
	<?php include("templets/nav.php");?>

</head>

<body>

	
					
	

<main id="main">

	<!-- = ======= Menu Section ======= -->
								<?php 
											include("scripts/connect.php");
											$stmt1 = $db->prepare("SELECT `id`, `item_Name`, `price`, `price_for`, `image`, `specials` FROM `inventory` WHERE `specials`=1 ");
											
											try{
											$stmt1->execute();
											$rows = $stmt1->fetchALL(PDO::FETCH_ASSOC);
											$count = $stmt1->rowCount();
											
											}
											catch(PDOException $e){
												echo $e->getMessage();
												$db = null;
											}
								?>

			<section id="menu" class="menu">
				<div class="container">

							<div class="section-title">
								<br>
								</br>
								<h2>Check our <span>Specials</span></h2>
							</div>
						<div class="container">
						
							<div class="row">
										
								<!-- Card---->
									<?php if($count >0){
									 foreach($rows as $row):?>
									
										<div class="col-sm-4 py-3 py-sm-0">
											<div class="img-size">
												<div class="card shadow p-3 mb-5 bg-white rounded menu-item filter-salads">
												<img class="card-img-top" src="<?php echo $row['image']?>"  width="130" height="270"  alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title">Item Name: <?php echo $row['item_Name']?></h5>
													<p class="card-text"> Price: Rs.<?php echo $row['price']?>  <?php echo $row['price_for']?></p>
													<a href="product.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning">View Item</a>
												</div>
											</div>
											</div>
											
										</div>
									<?php endforeach; ?>
								<!-- Card---->
								<?php 
								}else{
									echo "Nothing";
								}
								?>
							</div>
									
						</div>
					
								
				</div>
			</section>
			
</main>
		<!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include("templets/footer.php");?><!-- End Footer -->



<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>