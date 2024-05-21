<?php
$cat = $_GET['cat'];

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
	<link href="assets/css/Admin.css" rel="stylesheet">
	<!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
  <?php
include("templets/nav.php");
?>

	
	
 


<br>
</br>

	
<!-- ======= Contact Section ======= -->
<section id="contact" class="menu">
    <div class="container">

        <div class="section-title">
			<?php echo $cat;?>



		</div>
		<?php include("scripts/connect.php");
 ?>
		<?php
	$stmt = $db->prepare("SELECT `id`,`image`, `item_Name`, `quantity`, `price`FROM `inventory` WHERE category=:cat");
	$stmt->bindValue(':cat',$cat,PDO::PARAM_STR);
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
<!-- Card---->
<?php foreach($rows as $row1):?>
	
					<div class="ficc">
						<div class="card shadow p-3 mb-5 bg-white rounded menu-item filter-salads">
						  <img class="card-img-top" src="<?php echo $row1['image']?>"  width="130" height="160" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title">ITEM NAME: <?php echo $row1['item_Name']?></h5>
							<p class="card-text"> PRICE: RS.<?php echo $row1['price']?></p>
							<a href="" class="btn btn-outline-warning">BUY NOW!</a>
							<a href="" class="btn btn-outline-warning"></a>
						  </div>
						</div>
					</div>
				
                <!-- Card---->
                <?php endforeach; ?>
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
				window.location.href = "updateproduct.php?message=" + id;
			});
		});
	</script>

<?php include("templets/footer.php");?>
</main>
</body>

</html>