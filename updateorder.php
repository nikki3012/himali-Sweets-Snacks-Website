<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
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

  <link rel="stylesheet" href="assets/css/invoice.css">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php
include("templets/adminnav.php");
?>
 <div class="col-lg-12 shawdow-sm" style="margin-top:120px;" >
		 </div>
    <?php


    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    
    
    
     ?>
      <?php if(isset( $_SESSION["logged_in"])){ ?>
      	<?php
		$pid = $_GET["pid"];
	 include("scripts/connect.php");
include("conn.php");
$id = $_SESSION["id"];
$products_sql = "SELECT * from inventory INNER JOIN checkout ON checkout.prod_id = inventory.id WHERE pid = '".$pid."'"; 
$products_result = mysqli_query($conn,$products_sql);

$rows = mysqli_fetch_all($products_result,MYSQLI_ASSOC);


if(isset($_POST['add']))
{
	print_r($_POST['id']);
} 
	
?>

    <section>
        <h3 class="text-center">MANAGE ORDER</h3>
        <br><br>

         <form action="updateorderphp.php?pid=<?php echo $_GET["pid"]; ?>" method="POST" >
         
            <table class="tbl-30">
                <tr>
                    <td>Food Name</td>
                    <td><b> <?php echo $rows[0]['item_Name']?> </b></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td>
                        <b> ₹ <?php echo $rows[0]['price']?></b>
                    </td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td>
                        <?php echo $rows[0]['quantity']?>
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select id="status" name="status">
                            <option <?php if( $rows[0]['status']=="0"){echo "selected";} ?> value="0">Ordered</option>
                            <option <?php if(  $rows[0]['status']=="1"){echo "selected";} ?>  value="1">On Delivery</option>
                            <option <?php if( $rows[0]['status']=="2"){echo "selected";} ?> value="2">Delivered</option>
                            
							
                        </select>
						<br>
						
                    </td>
                </tr>
					
                <tr>
                    <td>Customer Name: </td>
                    <td>
                        <?php echo  $rows[0]['UserName']?>
                    </td>
                </tr>

                <tr>
                    <td>Customer Contact: </td>
                    <td>
                        <?php echo  $rows[0]['phone_no']?>
                    </td>
                </tr>

                <tr>
                    <td>Customer Email: </td>
                    <td>
                        <?php echo  $rows[0]['email']?>
                    </td>
                </tr>

                <tr>
                    <td>Customer Address: </td>
                    <td>
                       <?php echo  $rows[0]['home']?>
                       <?php echo  $rows[0]['town_city']?>
                       <?php echo  $rows[0]['pincode']?>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">

                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </table>
       
        </form>


    </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('select').change(function() {
        if ($('select option:selected').text() == "Cancelled") {
          $('label').show();
        } else {
          $('label').hide();
        }
      });
    });
  </script>
        </body>
        <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>
 <div class="col-lg-12 shawdow-sm" style="margin-bottom:120px;" >
		 </div>
 <?php
		 include("templets/footer.php");
		 ?>
</html>
