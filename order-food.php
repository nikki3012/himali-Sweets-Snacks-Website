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
  <link href="assets/css/food-style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>
<body>
<?php include("templets/nav.php");?>
	<?php include("scripts/connect.php");
?>
	
			
<?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>
<?php if(isset( $_SESSION["logged_in"])){ ?>

<?php 
  
 
  include("conn.php");

$id = $_SESSION["id"];

$products_sql = "SELECT inventory.image,inventory.item_Name,inventory.price,cart.cart_quantity,cart.prod_id,cart.id,cart.total from inventory INNER JOIN cart ON cart.prod_id = inventory.id  WHERE user_id = '".$id."' ";
$products_result = mysqli_query($conn,$products_sql);

$products_data = mysqli_fetch_all($products_result,MYSQLI_ASSOC);

if(isset($_POST['add']))
{
	print_r($_POST['id']);
}


$pid = uniqid();
  
  
  ?>
 <div class="col-lg-12 shawdow-sm" style="margin-top:130px;" >
		 </div>
		 <center>
		 
		 	
	</center>
			
<div class="row">
<div class="row d-flex justify-content-center">
  <div class="col-lg-5 align-items-stretch video-box" >
		  
	    <div class="form-container">
		
				<form id="orderdetail" >
						<center>
							<div class="field">
							  <h1 class="btn btn-warning">FILL TO ORDER</h1>
							</div>
				
							
						<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="40%">Product</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
				
				</tr>
				<?php foreach($products_data as $prod){ ?>
				<tr>
					<td><?php echo $prod["item_Name"] ?></td>
					<td><img src="<?php echo $prod["image"] ?>" height="150px"width="150px"></td>
					<td><input  class="form-control form-control-sm border-0 shadow-0 p-0 quantity_input" type="number" min="1" data-cart="<?php echo $prod["id"] ?>" value="<?php echo $prod["cart_quantity"] ?>"/></td>
					<td class="prod_price">₹<?php echo $prod["price"] ?></td>
					<td class="total_price"id="totalamt"name="totalamt"></td>
				</tr>
				 <?php } ?>
			

					<tr>
				
					<td colspan="3" align="right">Total Price:₹</td>
					<td align="right"><span id="tot"></span></td>
				
				</tr>
	</table>
						</center>
							<div class="field">
							<label>FULL NAME</label>
							
							  <input type="text" id="UserName" name="UserName"  placeholder=" Customer Name" >
							  
							</div>
							</br>
							<div class="field">
							<label>FLAT/HOUSE/OFFICE ADDRESS</label>
							  <input type="phone_no" id="home" name="home"  placeholder=" eg house no 2" >
							  </br>
							</div>
							</br>
							<div class="field">
							<label>TOWN/CITY NAME:</label>
							  <input type="text" id="town_city" name="town_city"  placeholder="eg sonada " >
							 </div>
							 </br>
							 <div class="field">
							<label>PHONE_NO:</label> </br>
							
                            <input type="text" name="phone_no"  id="phone_no" placeholder="9005054050">

							</div>
							<br>
							<div class="field">
							<label>EMAIL ADDRESS:</label> </br>
							
                            <input type="email" name="email"  id="email" placeholder="xyz@gmail.com">

							</div>
							<br>
							<div class="field">
							<label>PINCODE:</label> </br>
							
                            <input typ"text" name="pincode"  id="pincode">

							</div>
							
						  
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
							
							<center>
							  	<a input type="submit"href="index.php" class="btn btn-warning">HOME</a>
							  <input type="submit" class="btn btn-success"id="AAorder" name="AAorder" value="PROCCEED TO PAYMENT">
                            </center>
				  
				  </form>
          
   
        </div>
		
      </div>
          </div>
		  

 </div>
		 </br>
		
		    
		 <div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
  <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>
		 <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  
				
  <script>

			$(document).ready(function() {
  				$('#UserName').focus();
				 
				$('#AAorder').click(function() {
					var UserName=$("#UserName").val();
					var home=$("#home").val();
					var town_city=$("#town_city").val();
					var phone_no=$("#phone_no").val();
					var email=$("#email").val();
					var pincode=$("#pincode").val();
					var cid="<?php echo $id; ?>";
					var quantity="<?php echo $prod["cart_quantity"]; ?>";
					var price= "<?php echo $prod["total"] ?>";
					var data= "UserName="+UserName+"&home="+home+"&town_city="+town_city+"&phone_no="+phone_no+"&email="+email+"&pincode="+pincode+"&cid="+cid+"&quantity="+quantity+"&price="+price;					
					if (!UserName) {
						alert("Enter Name");
					} else if (!home) {
						alert("Enter lin 1");
					}else if (!town_city) {
						alert("Enter line 2");
					}else if (!email) {
						alert("Enter email address");
					}else if (!phone_no) {
						alert("Enter phone_no");
					}else if (!pincode) {
						alert("Enter pincode");
					} else {
						if($.trim(email).length>0 && $.trim(home).length>0) {
							$.ajax({
								type: "POST",
								url: "include/orderpy.php?pid=<?php echo $pid; ?>",
								data: data,
								cache: false,
								beforeSend: function(){},
								 
								success: function(data){
									if(data==1) {
										alert("Address Saved Successfully");
										window.location.href="check-out.php?pid=<?php echo $pid;?>&total="+total;
									} else {
										alert(data);
										window.location.href="index.php";										
									}
								}
							});
						}
					}
					return false;
				});
			});
			
				
		</script>
		
				
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

                    
                      tot.textContent = total


                    </script>

       <?php
		 include("templets/footer.php");
		 ?>

</body>
</html>