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
			
          <form id="AAcategory" >

		    <div class="field">
              <h3>Add Product</h3>
            </div>
			<select id="category" name="category" class="form-control" placeholder="Choose">
                            
                                    <option value="SWEETS">SWEETS</option>
                                    <ption value="NAMKEENS">NAMKEENS</option>
                                    <option value="BAKERY">BAKERY</option>
                                    <option value="RESTAURANT">RESTAURANT</option>
</select>
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


			<div class="field">
              <input type="text" id="description" name="description" placeholder="Description" >
            </div>
 


</div>
			


<a href="" class="btn btn-outline-warning"id="AAadditem" name="AAadditem" >ADD</a>
          
           
          
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
  <script src="js/jquery-3.3.1.min.js"></script>
  <script>
				$(document).ready(function() {
					$('#category').focus();
					$('#AAadditem').click(function() 
                    {
           var files = $('#my_image')[0].files;
					  var category=$("#category").val();
					  var item_Name=$("#item_Name").val();
					  var quantity=$("#quantity").val();
					  var price=$("#price").val();
					  var description=$("#description").val();
						if (!category) {
							alert("Enter category");
						} else if (!item_Name) {
							alert("item name please.");
						}else if (!quantity) {
							alert("Enter quantity");
						}else if (!price) {
							alert("enter price");
						}else if (!description) {
							alert("enter description");
						} else if (files.length > 0 ) {
						fd.append('my_image',files[0]);
            fd.append('category',category);
						fd.append('item_Name',item_Name);
						fd.append('quantity',quantity);
						fd.append('price',price);
						fd.append('description',description);

							$.ajax({
								type: "POST",
								url: "image-resize-demo.php",
								data: $('#AAcategory').serialize(),
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==1) {
										alert("successful");
										window.location.href="category.php";
									} else {
										alert(data);
										window.location.href="add.php";
									}
									}
								});
							
						}
						return false;
					});
				});

  
		</script>

</body>

</html>