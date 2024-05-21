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
<?php
include("templets/nav.php");
?>
 <div class="col-lg-12 shawdow-sm" style="margin-top:120px;" >
		 </div>
<div class="row">
<div class="row d-flex justify-content-center">
  <div class="col-lg-5 align-items-stretch video-box" >
		  
	    <div class="form-container">
				<form id="signform" >
						<center>
							<div class="field">
							  <h3>Sign UP</h3>
							</div>
						</center>
							<div class="field">
							<label>Enter First Name:</label>
							
							  <input type="name" id="firstName" name="firstName"  placeholder=" First name" >
							  
							</div>
							</br>
							<div class="field">
							<label>Enter Last Name:</label>
							  <input type="text" id="lastName" name="lastName"  placeholder=" LastName" >
							  </br>
							</div>
							</br>
							<div class="field">
							<label>Enter Email:</label>
							  <input type="email" id="email" name="email"  placeholder="phone no or email. " >
							 </div>
							 </br>
							<div class="field">
							<label>Enter Password:</label>  
							  <input type="password" id="password" name="password" placeholder="Password" >
							</div>
							</br>
							<div class="field">
							<label>Confirm Password:</label>
							
							  <input type="confirmpassword" id="confirmpassword" name="confirmpassword" placeholder="confirmpassword" >
							
							</div>
							  </br>
					  <div class="field">
					  <label>Enter Date:</label>
							  <input type="date" id="date" name="date" placeholder="date">
							  </br>
							</div>
							</br>
							<div class="field">
							<input type="hidden" name="role" class="dropdown" id=""value="role" value="0">
							
							</div> 
							
							
							
							<input type="radio" name="gender" id="gender" value="male"> Male
							<input type="radio" name="gender" id="gender" value="female"> Female

						  
						  
							<div class="field btn">
							  <div class="btn-layer"></div>
							  <input type="submit" class="btn btn-warning"id="AAsignup" name="AAsignup" value="Create Account">
							</div>
				  
				  </form>
          
   
        </div>
		
      </div>
          </div>

     </div>
		 </br>
		
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
									if(data==1) {
										alert("successful");
                    window.location.href="login.php"
               } else {
										alert("error");
                    window.location.href="sign up.php"
                  
									
									}
									}
								});
							}
						}
						return false;
					});
				});
		</script>
		 <div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
		 <?php
		 include("templets/footer.php");
		 ?>

</body>
</html>