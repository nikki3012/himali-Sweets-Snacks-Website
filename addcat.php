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
  <link href="assets/css/signup.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
<?php
include("templets/adminnav.php");
?>

	
		  
		
			
		<div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
		
<!-- category item display -->

    <main id="main">	

    </div>
	
    <?php include("scripts/connect.php");
 ?>
		<?php
	$stmt = $db->prepare("SELECT addcategory.id AS id, addcategory.name AS name,COUNT(inventory.category)AS pro, addcategory.tagline AS tagline FROM `addcategory` LEFT JOIN `inventory` ON inventory.category=addcategory.name GROUP BY addcategory.name");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
?>






		<br>
		</br>
		

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h1><span>Category</span> Information</h1>
					<br>
					<a class="btn btn-outline-warning " href="add-category.php">Create Category</a>
				</div>
				
			</div>
			
			<div class="container" style="margin-top:10px;">
				<table class="table table-striped">
					
					<thead>

						<th style="display:none" >S.N</th>
						<th>Category Name</th>
						<th>Total Product</th>
						<th>Tagline</th>
					</thead>
					<tbody>
						<?php foreach($rows as $row):?>
						<tr>							
							<td  style="display:none">
								<?php echo $row['id']?>
							</td>

							<td>
								<?php echo $row['name']?>
							</td>
							<td>
								<?php echo $row['pro']?>
							</td>	
							<td>
								<?php echo $row['tagline']?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</section>
		<!-- End Contact Section -->

	</main><!-- End #main -->
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
   <?php
		 include("templets/footer.php");
		 ?>
</body>
</html>