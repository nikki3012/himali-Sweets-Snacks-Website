<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Update Product</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<?php include("templets/adminnav.php");?>
    <main id="main">	

    </div>
	
    <?php include("scripts/connect.php");
 ?>
		<?php
	$stmt = $db->prepare("SELECT `id`, `name`, `image`FROM `addcategory` ");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
?>
</head>

<body>


	<main id="main">


		<br>
		</br>

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h2><span>CATEGORY</span> INFORMATION</h2>
				</div>

			</div>
			<div class="container" style="margin-top:10px;">
				<table class="table table-striped">
					
					<thead>

						<th style="display:none">id</th>
						<th>Item Name</th>
						<th>IMAGE</th>
					</thead>
					<tbody>
						<?php foreach($rows as $row):?>
						<tr>							
							<td >
								<?php echo $row['id']?>
							</td>

							<td>
								<?php echo $row['name']?>
							</td>

							<td>
								<img src="<?php echo $row['image']?>">
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</section>
		<!-- End Contact Section -->

	</main><!-- End #main -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.table').DataTable();

			$('.table tbody').on('click', 'tr', function () {
				var data = $('.table').DataTable().row(this).data();
				var id = data[0];
				window.location.href = "update-cat.php?message=" + id;
			});
		});
	</script>
