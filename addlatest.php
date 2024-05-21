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
<?php
include("templets/nav.php");
?>
</br>
</br>
<div class="row d-flex justify-content-center">
 <div class="col-lg-5 align-items-stretch video-box" >
   <div class="col-lg-12 shawdow-sm" style="margin-top:100px;" >
        <div class="form-container">
	
              
           
        <div class="form-inner">
          
			
          <form id="AAcategory" >
         
             <div class="field ">
			   <li class="dropdown"><a href="#"><span></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
           
              
                
                  <li><a href="login.php">Login</a></li>
                  <li><a href="Sign Up.php">Sign-Up</a></li>
                  <li><a href="Logout.php">Log-out</a></li>
                
             
              
            </ul>
          </li>
             <select id="category" name="category"  placeholder="Choose">
                            
                            <option value="SWEETS">SWEETS</option>
                            <option value="NAMKEENS">NAMKEENS</option>
                            <option value="BAKERY">BAKERY</option>
                            <option value="RESTAURANT">RESTAURANT</option >
</select>
            </div>
			
            <div class="field">
              <input type="text" id="item_Name" name="item_Name"  placeholder=" Item Name" >
            </div>
            <div class="field">
              <input type="text" id="quantity" name="quantity"  placeholder=" Quantity" >
            </div>
            
			<div class="field">
              <input type="text" id="price" name="price"  placeholder="Price " >
    		</div>

			<div class="field">
			<input type="file" name="my_image" id="my_image">
			</div>
			<div class="holder">
                <img id="imgPreview" src="" alt="pic" />
            </div>
			
			
			<div class="field">
			<input type="text" name="description" id="description" placeholder="description">
    		</div>
    		</div>


			
			



			


<a href="" class="btn btn-outline-warning"id="AAadditem" name="AAadditem" >ADD</a>
          
           
          
          </form>
          
        </div>

         </div>
		 </br>
		 <div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
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