<?php include("scripts/connect.php"); 
	$stmt = $db->prepare("SELECT * FROM `addcategory` ");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
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
  <link href="assets/css/feedback.css" rel="stylesheet">


</head>

<body>
 <!-- ======= nav ======= -->

 <?php include("templets/nav.php");?>

 <!-- ======= end of nav ======= --> 
  
  <!-- ======= Hero Section ======= -->
  
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        

        <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content text-center">
              <img src="assets\img\RP LOGO.png" alt="logo" class="image">
              <h2 class="animate__animated animate__fadeInDown">Sweeets
                 & Snacks</h2>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/pexels-sarayu-p-14610769.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sweets</h2>
                <p class="animate__animated animate__fadeInUp">Time For a Delicious Moment</p>
                <div>
               <a href="items.php?cat=SWEETS" class="btn btn-outline-warning">View Items</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/chefs/nam3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Namkeens</h2>
                <p class="animate__animated animate__fadeInUp">Delight In Every Bite</p>
                <div>
                <a href="items.php?cat=NAMKEENS" class="btn btn-outline-warning">View Items</a>
                </div>
              </div>
            </div>
          </div>
           <!-- Slide 4 -->
           <div class="carousel-item" style="background-image: url(assets/img/slide/pexels-josh-sorenson-1546890.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Bakery</h2>
                <p class="animate__animated animate__fadeInUp">  Treats From The Oven </p>
                <div>
                <a href="items.php?cat=BAKERY" class="btn btn-outline-warning">View Items</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/rp.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown ">Shop</h2>
                <p class="animate__animated animate__fadeInUp ">Good time, Good taste</p>
                <div>
                  <a href="menu.php" class="btn btn-outline-warning">View Items</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  
  <main id="main"> 
    
  </main>

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <?php include("scripts/connect.php");
?>
	

<main id="main">

	<!-- =

<!-- ======= Menu Section ======= -->

	<section id="menu" class="menu">
	<div class="container">

			<div class="section-title">
				<br>
		</br>
				<h1>Experience <span>Flavours</span></h1>
			</div>

		
		
		
        <div class="container">
		
			<div class="row">
	<?php 
			$stmt1 = $db->prepare("SELECT `id`, `name`, `tagline`,`image` FROM `addcategory`");
			
			try{
			$stmt1->execute();
			$rows1 = $stmt1->fetchALL(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e){
				echo $e->getMessage();
				$db = null;
			}
	?>
				<!-- Card---->
				<?php foreach($rows1 as $row1):?>
				
        <div class="col-sm-4 py-3 py-sm-0">
          <div class="img-size">
            <div class="card shadow p-3 mb-5 bg-white rounded menu-item filter-salads">
            <img class="card-img-top" src="<?php echo $row1['image']?>"  width="130" height="270"  alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Category Name: <?php echo $row1['name']?></h5>
              <h5 class="card-title"> <?php echo $row1['tagline']?></h5>
             
              <a href="items.php?cat=<?php echo $row1['name']?>" class="btn btn-outline-warning">VIEW ITEMS</a>
            </div>
          </div>
          </div>
          
        </div>
      
        <!-- Card---->
				<?php endforeach; ?>
			</div>
					
		</div>
	
				
	</div>
	</section>
  
		<!-- End Me
		</main><!-- End #main -->
 <!-- ======= Testimonials Section ======= -->

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

<h1><center><span><b>FEEDBACK</b></span></center></h1>
	
	<?php foreach($rows as $row):?>
	  <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            
            
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="images/owner/default_profile.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong><?php echo $row['Name']?></strong>
                            
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p> <?php echo $row['Message']?></p>
                </div>
            </div>
            <!--BOX-2-------------->
            
        </div>
    </section>
	<?php endforeach; ?>
<!-- ======= Footer ======= -->
<?php include("templets/footer.php");?><!-- End Footer -->

</body>

</html>