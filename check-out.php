<?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>
<?php if(isset( $_SESSION["logged_in"])){ ?>
<?php
include("conn.php");

$id = $_SESSION["id"];

$products_sql = "SELECT inventory.image, inventory.quantity, inventory.item_Name, inventory.price, cart.cart_quantity, cart.id, cart.prod_id FROM inventory INNER JOIN cart ON cart.prod_id = inventory.id WHERE user_id = '".$id."'";
$products_result = mysqli_query($conn, $products_sql);

$products_data = mysqli_fetch_all($products_result, MYSQLI_ASSOC);

$unit = $products_data[0]['quantity'] - $products_data[0]['cart_quantity'];

if (isset($_POST['add'])) {
    print_r($_POST['id']);
}

$pid = $_GET['pid'];
?>

<html>

<head>
<title>payment</title>
<link rel="stylesheet"href="assets/css/payment.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
	  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <hr>
	  	<?php foreach($products_data as $prod){ ?>
		
		<table border="2px">
				<tr>
					<td style="display:none;" ><?php echo $prod["item_Name"] ?></td>
					<td style="display:none;"><img src="<?php echo $prod["image"] ?>" height="150px"width="150px"></td>
					<td style="display:none;"><input class="form-control form-control-sm border-0 shadow-0 p-0 quantity_input" type="number" min="1" data-cart="<?php echo $prod["id"] ?>" value="<?php echo $prod["cart_quantity"] ?>"/></td>
					<td class="prod_price"style="display:none;">₹<?php echo $prod["price"] ?></td>
					<td class="total_price"style="display:none;"></td>
					
				</tr>
				</table>
				 <?php } ?>
      <p>Total <span id="tot" class="price"  style="color:black" name="tot"><b></b></span></p>
    </div>
  </div>
      <form>

        <div class="row">
    

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label>Name on Card</label>
            <input type="text" id="Name_Card" name="Name_Card" placeholder="John More Doe">
            <label >Credit card number</label>
            <input type="number" id="card_number" name="card_number"  placeholder="1111-2222-3333-4444">
            <label>Exp Month</label>
            <input type="text" id="Exp_Month" name="Exp_Month" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" id="Exp_Year" name="Exp_Year" placeholder="2018">
              </div>
              <div class="col-50">
                <label>CVV</label>
                <input type="text" id="CVV" name="CVV" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" id="checkoutpay" name="checkoutpay" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>


</div>
  <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
   <script>
			$(document).ready(function() {
  				$('#Name_Card').focus();
				$('#checkoutpay').click(function() {
					  var Name_Card=$("#Name_Card").val();
					  var card_number=$("#card_number").val();
					  var Exp_Month=$("#Exp_Month").val();
					  var Exp_Year=$("#Exp_Year").val();
					  var CVV=$("#CVV").val();
					  var cid="<?php echo $id; ?>";
					  var pid="<?php echo $pid; ?>";
					  var did="<?php echo $id; ?>";
					  var unit="<?php echo $unit; ?>";
					  var prod_id="<?php echo $products_data[0]["prod_id"] ?>";
					   var data= "Name_Card="+Name_Card+"&card_number="+card_number+"&Exp_Month="+Exp_Month+"&Exp_Year="+Exp_Year+"&CVV="+CVV+"&tot="+tot+"&cid="+cid+"&did="+did+"&pid="+pid+"&unit="+unit+"&prod_id="+prod_id;	
					if (!Name_Card) {
						alert("Enter Card Name");
					} else if (!card_number) {
						alert("Enter card number");
					}  else if (!Exp_Month) {
						alert("Enter Exp_Month");
					}  else if (!Exp_Year) {
						alert("Enter Exp_Year");
					} else if (!CVV){
						alert("Enter CVV");
					} else {
							$.ajax({
								type: "POST",
								url: "include/checkpy?tot="+total,
								data: data,
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==1) {
										alert("Payment Successful");
										window.location.href="invoice.php?pid=<?php echo $pid; ?>";
									} else {
										alert(data);
										window.location.href="check-out.php";										
									}
								}
							});
						
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
</body>
</html>