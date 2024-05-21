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
  <link href="assets/css/loginpg.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<?php
include("templets/nav.php");
?>
</br>
</br>
<div class="row d-flex justify-content-center">
    <div class="col-lg-5 align-items-stretch video-box" >
	<div class="col-lg-12 shawdow-sm" style="margin-top:150px;" >
	
	    <div class="form-container">
		    
				  <form  id="form_login" class="login">
					<div class="field">
					<label>Enter Email:</label>
					  <input type="text" id="email" name="email"  placeholder="email " required>
					</div>
					<div></div>
					</br>
					<div class="field">
					<label>Enter Password:</label>
					  <input type="Password" id="Password" name="Password" placeholder="Password" required>
					</div>
					</br>
					
					<div class="pass-link"><a href="#">Forgot Password?</a></div>
					<div class="field btn">
					  <div class="btn-layer"></div>
					  <input type="submit" id="login_role"class="btn btn-warning" name="login_role" value="Login">
					</div>
					<div class="signup-link">Not a member? <a href="sign up.php">Signup now</a></div>
				  </form>
          
			
           
     
			</div>
		
		</div>
    </div>

</div>
		 </br>
		 <div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
		 <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script>
			$(document).ready(function() {
  				$('#email').focus();
				$('#login_role').click(function() {
					var email=$("#email").val();
					var password=$("#Password").val();
					if (!email) {
						alert("Enter Valid Email");
					} else if (!password) {
						alert("Enter Password");
					} else {
						if($.trim(email).length>0 && $.trim(password).length>0) {
							$.ajax({
								type: "POST",
								url: "include/relate.php",
								data: $('#form_login').serialize(),
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==1) {
										alert("successful");
										window.location.href="admin.php";
									} else if(data==2) {
										alert("successfully logged-in");
										window.location.href="index.php";
									}else {
										alert(data);
										window.location.href="login.php";										
									}
								}
							});
						}
					}
					return false;
				});
			});
		</script>
		 <?php
		 include("templets/footer.php");
		 ?>

</body>
</html>