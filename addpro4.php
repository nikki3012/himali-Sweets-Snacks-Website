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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  
</head>

<body>

	<?php include("templets/adminnav.php");?>
	<?php include("scripts/connect.php");
?>
	

<main id="main">



<!-- ======= Menu Section ======= -->

	<section id="menu" class="menu">
	<div class="container">

			<div class="section-title">
				<br>
					</br>
				<h1>Product<span> Information</span></h1>
				<a class="btn btn-outline-warning " href="addproduct2.php">Add Product</a>
			</div>
		
		
		<?php foreach($rows as $row):?>
        <div class="container">
		<h3><?php echo $row['category']?></h3>
			<div class="row">
	<?php 
			$stmt1 = $db->prepare("SELECT `id`, `item_Name`,`quantity`, `price`, `price_for`,`specials` FROM `inventory` WHERE `category`=:category ");
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
			
				
				<div class="container">
				<div class="col-lg-12 shawdow-sm" style="margin-bottom:80px;" >
					<table class="table table-striped">
						

						<thead>

							<th style="display:none">id</th>
							<th>Item Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Price for</th>
							<th>Specials</th>

						</thead>



						<tbody>
							<?php foreach($rows1 as $row1):?>
								<tr data-category="<?php echo $row['category']; ?>">

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
										<td>
											<?php echo $row1['specials']?>
										</td>


							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
			
				<!-- Card---->
			
			</div>
					
		</div>
		<?php endforeach; ?>
				
	</div>
	</section>
    
	

		<!-- End Me
		</main><!-- End #main -->
       


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
<script>
		$(document).ready(function () {
			$('.table').DataTable();

			$('.table tbody').on('click', 'tr', function () {
				var data = $('.table').DataTable().row(this).data();
				var category = $(this).data('category');
				var id = data[0];
				window.location.href = "updateproduct.php?message=" + id + "&category=" + category;
			});
		});
	</script>


</body>

</html>