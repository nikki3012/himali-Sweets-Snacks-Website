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
	<link href="assets/css/Admin.css" rel="stylesheet">

	<style>
		.container {
			--bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-right: auto;
    margin-left: auto;
		}
	</style>


	<!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
</head>
<body>
  <?php
 include("scripts/connect.php");
include("templets/nav.php");
?>

	
	
 


<br>
</br>

	
<!-- ======= Contact Section ======= -->


<br>
</br><br>
</br>
<main>
	<div class="container">
        <div class="section-title">
		<h2><?php echo $cat;?></h2>
		</div>
	</div>
		
			
<section id="menu" class="menu">
    <div class="container row">

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
	
<!-- Card---->
<?php foreach($rows as $row):?>
			
			<div class="col-sm-4 py-3 py-sm-0">
				
				<div class="img-size">
					<div class="card shadow p-3 mb-5 bg-white rounded menu-item filter-salads">
						<img class="card-img-top"  width="100" height="190"  alt="Card image cap" src="<?php echo $row['image']?>">
						<div class="card-body">
							<h5 class="card-title">Item Name: <?php echo $row['item_Name']?></h5>
							<p class="card-text"> Price: RS.<?php echo $row['price']?></p>
							<a href="product.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning">View Item</a>
						</div>
					</div>
				</div>
					
					
			
			
				
                
			</div>
		<!-- Card---->
            <?php endforeach;?>
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

</body>

</html>