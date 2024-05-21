
<?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>



  <?php 
    
    include("./conn.php");
     


  $id = $_SESSION["id"];
  
  $products_sql = "SELECT * from inventory INNER JOIN checkout ON checkout.prod_id = inventory.id  ";
  $products_result = mysqli_query($conn,$products_sql);
  
  $products_data = mysqli_fetch_all($products_result,MYSQLI_ASSOC);



  
    
    
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HealthHub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.10.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  <body>
  <section></section>
  <div class="table-responsive col-lg-12 col-md-12 mt-12 ml-3 mt-md-0">
    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">Order id</th>
      <!-- <th scope="col">Product Name</th> -->
      <th scope="col">Price</th>
      <!-- <th scope="col">Shop Name</th> -->
      <th scope="col">Order Status</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
      <th scope="col"><?php if($products_data[0]["status"] == 3){
		  echo "Reason";
	  } ?></th>
    </tr>
  </thead>
  <tbody>


    <?php foreach($products_data as $prod){ ?>
      <tr>
      <th scope="row"><a href="order_tracking.php?id=<?php echo $prod["id"] ?>" style="display:block;"><?php echo $prod["id"] ?></a></th>
      <td><?php echo $prod["price"] ?></td>
      <td><?php echo $prod["status"] == 1 ? "Accepted" : ($prod["status"] == 2 ? "On Delivery" : ($prod["status"] == 3 ? "cancelled" : "pending" ))?></td>
      <td><?php echo $prod["item_Name"] ?></td>
      <td><?php echo $prod["quantity"] ?></td>
	  <td><?php echo $prod["price"] * $prod["quantity"]; ?></td>
      <td><a href="#" onclick="showAlert()" >Cancel Order</a></td>
	   <td><?php if($prod["status"] == 3){
		  echo  $prod["reason"];
	  } ?></td>
    </tr>

    <?php } ?>


 
  
  </tbody>
</table>
</div>
<script>
function showAlert() {
  alert("Please cancel at delivery");
}
</script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=" assets/css2/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" assets/css2/off-canvas.js"></script>
    <script src=" assets/css2/hoverable-collapse.js"></script>
    <script src=" assets/css2/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>