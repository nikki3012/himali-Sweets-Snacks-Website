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
  <link href="assets/css/admindas.css" rel="stylesheet">


</head>
<body>

<?php include('templets/adminnav.php'); ?>

 <div class="col-lg-12 shawdow-sm" style="margin-top:120px;" >
	 <!-- Main Content Section Starts -->
	<center> <h2>DASHBOARD</h2></center>
     <div class="main-content">
   
            <div class="wrapper">
           
                <br><br>
                
                <br><br>
				
                <div class="wrapper">

                    <?php 
					include('scripts/connection.php');
                        //Sql Query 
                        $sql = "SELECT * FROM inventory";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    </br></br>
					
                    Food Items(inventory)

                </div>
</br>
</br>
                <div class="wrapper">

                    <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM addcategory";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    </br></br>
                    Category(addcategory):

                </div>
</br>
</br>
                <div class="wrapper">
                    
                    <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM checkout";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                     </br></br>
                    Total Orders
                </div>
                </br>
                <div class="wrapper">

                    <?php
                    $sql2 = "SELECT SUM(price) AS total_price FROM checkout";
                    $res2 = mysqli_query($conn, $sql2);
                    $row = mysqli_fetch_assoc($res2);
                    $total_price = $row['total_price'];
                    ?>

                    <h1><?php echo $total_price; ?></h1>
                    </br></br>
                    Total Sales

                </div>
                </br>

                
                    
                   
                </div>

                

            </div>
        </div>
        <!-- Main Content Setion Ends -->
<?php include('templets/footer.php'); ?> 

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script> 
</body>
</html>
