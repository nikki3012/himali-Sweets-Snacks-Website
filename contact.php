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

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <?php include("templets/nav.php");?>
 

  <main id="main">

  
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container">
      <form id="contactform" >
        <div class="section-title">
          <br>
</br>
          <h2><span>Contact</span> Us</h2>
          <p>Leave your message.</p>
        </div>
      </div>

     

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Near Holy Cross high School<br>Sonada ,Darjeeling P.O.: 734209</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Sunday:<br>7:00 AM - 20:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>anuragthapa16@gmail.com<br>guptanikita345@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+91 8145132159<br>+ 91 7477744235</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="Email" id="Email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control " name="message" rows="5" id="message" placeholder="message" required></textarea>
          </div>
        
          <div class="text-center " id="AAcontact" name="AAcontact"><button type="submit" class="btn btn-warning">Send Message</button></div>
        </form>

      </div>
    </section>
    <!-- End Contact Stion -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("templets/footer.php");?><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
					$('#Name').focus();
					$('#AAcontact').click(function() {
					  var Name=$("#Name").val();
					  var Email=$("#Email").val();
					  var Subject=$("#Subject").val();
					  var message=$("#message").val();
						if (!Name) {
							alert("Enter  Name");
						}else if (!Email) {
							alert("Enter valid Email ");
						}else if (!Subject) {
							alert("Enter Subject");
						}else if (!message) {
							alert("Enter message");
						}else {
							if($.trim(Name).length>0 && $.trim(Email).length>0) {
							$.ajax({
								type: "POST",
								url: "contactr.php",
								data: $('#contactform').serialize(),
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==1) {
										alert("Message sent successfully.Thank You!");
                    window.location.href="contact.php"
               } else {
										alert(data);
                    window.location.href="contact.php"
                  
                  
									
									}
									}
								});
							}
						}
						return false;
					});
				});
		</script>
<?php include("templets/footer.php");?>
  
</body>

</html>