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
				<h1>PRODUCT<span> INFORMATION</span></h1>
			</div>

		
		
		
		<?php foreach($rows as $row):?>
        <div class="container">
		<h3><?php echo $row['category']?></h3>
			<div class="row">
	<?php 
			$stmt1 = $db->prepare("SELECT `id`, `item_Name`, `price`, `price_for` FROM `inventory` WHERE `category`=:category AND `specials`=0 ");
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
				
                    <div class="container" style="margin-top:100px;">
		<table class="table table-striped">
			

			<thead>

				<th style="display:none">id</th>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Price for</th>

			</thead>



			<tbody>
				<?php foreach($rows1 as $row):?>
				<tr>
					<td style="display:none">
						<?php echo $row1['id']?>
					</td>
					<td>
						<?php echo $row1['item_Name']?>
					</td>
					<td>
						<?php echo $row1['quantity']?>
					</td>
					<td>
						<?php echo $row1['price']?>
					</td>
					<td>
								<?php echo $row1['price_for']?>
							</td>


				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
			
				<!-- Card---->
				<?php endforeach; ?>
			</div>
					
		</div>
		<?php endforeach; ?>
				
	</div>
	</section>
		<!-- End Me
		</main><!-- End #main -->

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