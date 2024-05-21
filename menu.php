<?php include("scripts/connect.php"); 
	$stmt = $db->prepare("SELECT `category` FROM `inventory` GROUP BY `category`");
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
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

	<?php include("templets/nav.php");?>
	<?php include("scripts/connect.php");
?>
	
<script>
	$(document).ready(function() {
		$(document).scroll(function() {
			$("main").each(function(){
				if ($(this).offset().top <= $(document).scrollTop() + 32){
					$(this).css("opacity", "0");
				} else {
					$(this).css("opacity", "1");
				}
			});
		});
	});
</script>
<main id="main">



<!-- ======= Menu Section ======= -->

	<section id="menu" class="menu">
	<div class="container">

			<div class="section-title">
				<br>
		</br>
				<h2>Check our tasty <span>Menu</span></h2>
			</div>

		
		
		
		<?php foreach($rows as $row):?>
        <div class="container">
		<h3><?php echo $row['category']?></h3>
			<div class="row">
	<?php 
			$stmt1 = $db->prepare("SELECT `id`, `item_Name`, `price`, `price_for`,`image` FROM `inventory` WHERE `category`=:category AND `specials`=0 ");
			$stmt1->bindValue(':category',$row['category'],PDO::PARAM_STR);
			try{
			$stmt1->execute();
			$rows1 = $stmt1->fetchALL(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e){
				echo $e->getMessage();
				$db = null;
			}
	?>
				<!-- Card---->
				<?php foreach($rows1 as $row1):?>
				
				<div class="col-sm-4 py-3 py-sm-0">
					<div class="img-size">
						<div class="card shadow p-3 mb-5 bg-white rounded menu-item filter-salads">
						<img class="card-img-top" src="<?php echo $row1['image']?>"  width="130" height="230"  alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Item Name: <?php echo $row1['item_Name']?></h5>
							<p class="card-text"> Price: Rs.<?php echo $row1['price']?>   <?php echo $row1['price_for']?></p>
							<a href="product.php?id=<?php echo $row1['id']?>" class="btn btn-outline-warning">View Item</a>
						</div>
					</div>
					</div>
					
				</div>
			
				<!-- Card---->
				<?php endforeach; ?>
			</div>
					
		</div>
		<?php endforeach; ?>
				
	</div>
	</section>
		<!-- End Me
	

	<!-- ======= Footer ======= -->
	<?php include("templets/footer.php");?><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
		class="bi bi-arrow-up-short"></i></a>

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