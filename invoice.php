<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Vendor CSS Files -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Fabcart</title>
  <link rel="stylesheet" href="assets/css/invoice.css">
</head>
  <?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>
  <?php if(isset( $_SESSION["logged_in"])){ ?>
  	<?php
	 include("conn.php");
$pid = $_GET["pid"];
$id = $_SESSION["id"];
 
	//$stmt = $db->prepare("SELECT inventory.item_Name,cart.quantity,checkout.UserName,checkout.home FROM inventory INNER JOIN cart ON cart.user_id AND cart.prod_id=inventory.id INNER JOIN checkout ON cart.user_id AND cart.user_id=checkout.cid;");
	// try{
	// $stmt->execute();
	// $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	// }
	// catch(PDOException $e){
	// 	echo $e->getMessage();
	// 	$db = null;
	// }
	if(isset($_POST['add']))
{
	print_r($_POST['id']);
}

	
?>

<?php 
  
 
  include("conn.php");

$id = $_SESSION["id"];

$products_sql = "SELECT * FROM inventory 
                INNER JOIN checkout ON checkout.prod_id = inventory.id 
                INNER JOIN payment ON checkout.pid = payment.pid 
                WHERE checkout.pid = '".$pid."'";

$products_result = mysqli_query($conn,$products_sql);

$rows = mysqli_fetch_all($products_result,MYSQLI_ASSOC);


if(isset($_POST['add']))
{
	print_r($_POST['id']);
} 



  
  
  ?>
</head>
<body>
<?php include("templets/navss.php");?>
	<br>
  <br><br>
<section></section>
    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Himali </h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Sonada,TN road</p>
                        <p class="text-white"> Holy Cross School</p>
                        <p class="text-white">+91 9738223577</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="row">
           
                <div class="col-6">
                    <p class="sub-heading">Full Name:<?php echo $rows[0]['UserName']?> </p>
                    <p class="sub-heading">Address:<?php echo $rows[0]['home']?> </p>
                 
                </div>
            </div>
        </div>
        <input type="hidden" id="hidden_total" value="<?php echo $rows[0]['price']?>" >

	 		
        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="40%">Product</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
				
				</tr>
	<?php foreach($rows as $row):		 ?>
				<tr>
					<td><?php echo $row["item_Name"] ?></td>
					<td><img src="<?php echo $row["image"] ?>" height="150px"width="150px"></td>
					<td><?php echo $row["quantity"] ?></td>
					<td class="prod_price">₹<?php echo $row["price"] ?></td>
					<td class="total_price"></td>

				</tr>
				<?php endforeach; ?>
		
				<tr>
				
					<td colspan="3" align="right">Total</td>
					<td align="right"><?php echo $rows[0]["tot"] ?></td>
				
				</tr>

			</table>
            <br>
			<button class="btn  p-0 me-3 d-none d-lg-block btn-icon-text" onclick="window.print()"><i class="bi bi-download"></i> <span class="text">DOWNLOAD</span></button>
      <button class="btn  p-0 me-3 d-none d-lg-block btn-icon-text"  ><a href="index.php"><i class="bi bi-download"></i> <span class="text">HOME</span></a></button>
          
        </div>

           
    </div>      
  <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>
</body>

  <script>
  tot.textContent = document.getElementById("hidden_total").value;
  
  </script>
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
  <?php include("templets/footer.php");?><!-- End Footer -->
</html>
