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
  <link href="assets/css/sign_up.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <?php include("templets/nav.php");?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          

          <!-- Slide 2 -->
<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
  <div class="carousel-container">
              <div class="carousel-content">
              <div class="wrapper">
      <div class="title-text">
       
       
      </div>
      <div class="form-container">
	
              
           
        <div class="form-inner">
			
          <form id="signform" >
		    <div class="field">
              <h3>Add Product</h3>
            </div>
            <div class="field">
              <input type="text" id="item_set" name="item_set"  placeholder=" Item set" >
            </div>
            <div class="field">
              <input type="text" id="quanity" name="quanity"  placeholder=" quanity" >
            </div>
            
			<div class="field">
              <input type="text" id="prize" name="prize"  placeholder="prize " >
    </div>

			<div class="field">
              <input type="text" id="discription" name="discription" placeholder="discription" >
            </div>
            <select id="catageory" name="catageory" class="form-control" placeholder="Choose">
                            <option selected>Category</option>
                                    <option value="SWEETS">SWEETS</option>
                                    <option value="NAMKEENS">NAMKEENS</option>
                                    <option value="BAKERY">BAKERY</option>
                                    <option value="RESTAURANT">RESTAURANT</option>
</select>
  <input type="file" id="myFile" name="filename">
  <input type="submit">


</div>
			


          
          
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" id="AAsignup" name="AAsignup" value="Add ">
            </div>
          
          </form>
          
        </div>
      </div>
    </div>
             
              </div>
  </div>
</div>

          
          
          <!-- Slide 3 -->
       

        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  
  <main id="main"></main>
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
					$('#firstName').focus();
					$('#AAsignup').click(function() {
					  var firstName=$("#firstName").val();
					  var lastName=$("#lastName").val();
					  var email=$("#email").val();
					  var password=$("#password").val();
					  var confirmpassword=$("#confirmpassword").val();
					  var date=$("#date").val();
					  var gender=$("#gender").val();
						if (!firstName) {
							alert("Enter First Name");
						} else if (!lastName) {
							alert("Enter Last Name");
						}else if (!email) {
							alert("Enter valid email or phone.no.");
						}else if (!password) {
							alert("Enter Password");
						}else if (!confirmpassword) {
							alert("Enter confirmpassword");
						}else if (password!=confirmpassword) {
							alert("password does not match");
						}else if (!date) {
							alert("enter date");
						}else if (!gender) {
							alert("enter gender");
						} else {
							if($.trim(email).length>0 && $.trim(password).length>0) {
							$.ajax({
								type: "POST",
								url: "include/entry.php",
								data: $('#signform').serialize(),
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==0) {
										alert("successful");
										window.location.href="login.php";
									} else {
										alert(data);
										window.location.href="about.php";
									}
									}
								});
							}
						}
						return false;
					});
				});
		</script>

</body>

</html>