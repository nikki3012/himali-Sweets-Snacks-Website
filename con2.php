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
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<?php include("templets/adminnav.php");?>



	



	<main id="main">
	</main>



	<main id="main">

		</div>

		<?php include("scripts/connect.php"); ?>
		<?php
$stmt = $db->prepare("SELECT `id`, `Name`, `Email`,`Subject`, `Message` FROM `contact`");
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
		<br>
		</br>
		<div class="container" style="margin-top:10px;">
			<table class="table table-striped">
				<br>
</br>
				<h1>Feedback</h1>

				<thead>

					<th  style="display:none" >S.L. NO.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
				</thead>




				<tbody>
					<?php foreach($rows as $row):?>
					<tr>
						<td  style="display:none">
							<?php echo $row['id']?>
						</td>
						<td>
							<?php echo $row['Name']?>
						</td>
						<td>
							<?php echo $row['Email']?>
						</td>
						<td>
							<?php echo $row['Subject']?>
						</td>
						<td>
							<?php echo $row['Message']?>
						</td>
						

					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
		<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<br>
</br>
<br>
</br>
		<?php include("templets/footer.php");?>
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