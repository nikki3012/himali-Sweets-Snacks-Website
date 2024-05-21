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
	 include("scripts/connect.php");
include("conn.php");
$id = $_SESSION["id"];
$products_sql = "SELECT * from inventory INNER JOIN checkout ON checkout.prod_id = inventory.id"; 
$products_result = mysqli_query($conn,$products_sql);

$rows = mysqli_fetch_all($products_result,MYSQLI_ASSOC);


if(isset($_POST['add']))
{
	print_r($_POST['id']);
} 
	
?>
    <section>
        <h1 class="text-center">Manage Order</h1>
        <br><br>

            <table class="table table-bordered">
                        <tr>
                        
                            <th >FOOD</th>
                            <th>QUANTITY </th>
                            <th>PRICE</th>
                            <th>ORDER DATE</th>
                            <th>Order Time</th>
                            <th>CUSTOMER NAME</th>
                            <th>CONTACT</th>
                            <th>ADDRESS</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                            <th>REASON FOR CANCELLATION</th>

                        
                        </tr>
                        <?php foreach($rows as $row):?>
                        <tr>
                            <td><?php echo $row['item_Name']?></td>
                            <td><?php echo $row['quantity']?></td>
                            <td><?php echo $row['price']?></td>
                            <td><?php echo $row['o_date']?></td>
                            <td><?php echo $row['time']?></td>
                           
                            <td><?php echo $row['UserName']?></td>
                            <td><?php echo $row['phone_no']?></td>
                            <td><?php echo $row['home']?></td>
                            <td><?php if($row['status'] == 0){
								echo "Pending";
								}elseif($row['status'] == 1){
									echo "On Delivery";
									}elseif($row['status'] == 2){
									echo "Delivered";
									}elseif($row['status'] == 3){
									echo "Cancelled";
									}?></td>
							<td><a href="updateorder.php?pid=<?php echo $row['pid']?>">Update Order </a></td>
                            <td><?php echo $row['reason']?></td>
                          
                        </tr>
                        
                
                        <?php endforeach; ?> 	

            </table>
    </section>
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
