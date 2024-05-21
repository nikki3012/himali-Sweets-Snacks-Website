<head>
		<title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<link href="assets/css/style.css" rel="stylesheet">

		<!-- Vendor CSS Files -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	</head>

	<body>		
	<?php include("templets/nav.php");?>
	<?php include("scripts/connect.php");?>
<?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>


<?php if(isset( $_SESSION["logged_in"])){ ?>

<?php 
  
 
  include("conn.php");

$id = $_SESSION["id"];

$products_sql = "SELECT inventory.image,inventory.item_Name,inventory.price,cart.cart_quantity,cart.id from inventory INNER JOIN cart ON cart.prod_id = inventory.id  WHERE user_id = '".$id."' and flag = 1";
$products_result = mysqli_query($conn,$products_sql);

if ($products_result === false) {
    echo "Error executing query: " . mysqli_error($conn);
    exit;
}

$products_data = mysqli_fetch_all($products_result,MYSQLI_ASSOC);


if(isset($_POST['add']))
{
	print_r($_POST['id']);
}



  
  
  ?>

			
			<section></section>
			 <div class="container">
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
			
		
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="40%">Product</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php foreach($products_data as $prod){ ?>
				<tr>
					<td><?php echo $prod["item_Name"] ?></td>
					<td><img src="<?php echo $prod["image"] ?>" height="150px"width="150px"></td>
					<td><input  class="form-control form-control-sm border-0 shadow-0 p-0 quantity_input" type="number" min="1" data-cart="<?php echo $prod["id"] ?>" value="<?php echo $prod["cart_quantity"] ?>"/></td>
					<td class="prod_price">₹<?php echo $prod["price"] ?></td>
					<td class="total_price"></td>
					<td><span class="text-danger"><a href="deleteCart.php?id=<?php echo $prod["id"] ?>">Remove</a></span></a></td>
				</tr>
				 <?php } ?>
				<tr>
					<td colspan="3" align="right">Sub-Total</td>
					<td align="right"><span id="subTot"></span></td>
					
				
				</tr>
				<tr>
				
					<td colspan="3" align="right">Total</td>
					<td align="right"><span id="tot"></span></td>
				
				</tr>

			</table>
			
			<th>
				
					
					<a href="index.php"class="btn btn-warning">Continue Shopping</a>
					
					<a href="order-food.php" class="btn btn-success">Checkout</a>
					
				</th>
				
			</div>
		
</div>

  <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>

  <script>
                      const prod_price = Array.from(document.querySelectorAll(".prod_price"))
                      const total_price = Array.from(document.querySelectorAll(".total_price"))
                      const quantity = Array.from(document.querySelectorAll(".quantity_input"))
                      const subTot = document.getElementById("subTot")
                      const tot = document.getElementById("tot")
                      let total = 0;
					  


                      quantity.forEach((ele)=>{

                        ele.addEventListener("change",(e)=>{


                          fetch(window.location.origin+"/"+window.location.pathname.split("/")[1]+"/update_qt?qt="+e.target.value+"&cart_id="+ele.dataset.cart)
                          .then((res) => res.text())
                          .then((data)=>{
                            total = 0

                      prod_price.forEach((ele,i)=>{
                      console.log(ele.textContent);
                      total_price[i].textContent = parseFloat(ele.textContent.replaceAll("₹","")) * parseInt(quantity[i].value)
                      total += parseFloat(ele.textContent.replaceAll("₹","")) * parseInt(quantity[i].value)
                      })

                      subTot.textContent = total
                      tot.textContent = total
                                      })

                        })

                      })

                
                      prod_price.forEach((ele,i)=>{
                        console.log(ele.textContent);
                        total_price[i].textContent = parseFloat(ele.textContent.replaceAll("₹","")) * parseInt(quantity[i].value)
                        total += parseFloat(ele.textContent.replaceAll("₹","")) * parseInt(quantity[i].value)
                      })

                      subTot.textContent = total
                      tot.textContent = total
					 


                    </script>
</body>
<br>
<br>
<br>
<br>
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