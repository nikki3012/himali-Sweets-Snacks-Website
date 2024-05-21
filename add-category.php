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
  <link href="assets/css/admin101.css" rel="stylesheet">
  <style>
	form#AAcategory {
  border: thick solid red;
  padding: 40px 200px;
}
	</style>

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<?php
include("templets/adminnav.php");
?>
</br>
</br>
<div class="row d-flex justify-content-center">
 <div class="col-lg-5 align-items-stretch video-box" >
   <div class="col-lg-12 shawdow-sm" style="margin-top:100px;" >
        <div class="form-container">
	
              
           
        <div class="form-inner">
          
			
          <form id="AAcategory" >
		  <center><h1>Add Category</h1></center>
         
            <div class="field">
			<lable>Category Name:</lable>
			<br>
              <input type="text" id="name" name="name"  placeholder=" Category Name" >
            </div>
			</br>
         <div class="field">
			<lable>Tagline:</lable>
			<br>
              <input type="text" id="tagline" name="tagline"  placeholder="tagline" >
            </div>
			</br>
			<br>
			<div class="holder">
			<lable>IMAGE:</lable>
			<img src="assets/img/indian-sweetsnew.jpg" alt="Image"  id="imgPreview">
			 </div>
			 <br>
			 <br>
			 <input type="file" name="my_image" id="my_image">
			 <br>
			 <br>
			<a href="" class="btn btn-outline-warning btn-sm"id="AAadditem" name="AAadditem" >ADD</a>
          
           
          
          </form>
		 
		  </div>
          
        </div>

         </div>
		 </div>
		 </div>
		 </br>
	
		    <script src="assets/js/jquery-3.3.1.min.js">
			</script>
				
			
			
			 <script>
			$(document).ready(function() {
  				$('#name').focus();
				$('#AAadditem').click(function() {
            var fd = new FormData();
            var files = $('#my_image')[0].files;
            var name=$("#name").val();
			  var tagline=$("#tagline").val();
            if (!name) {
							alert("Enter category name");
						
						 }else if (!tagline) {
							alert("tagline please.");
						}else if (!my_image) {
							alert("Enter image");
						
						} else if (files.length >0){
						fd.append('my_image',files[0]);
						fd.append('name',name);
						fd.append('tagline',tagline);
						$.ajax({
						  url: 'image-resize-demo3.php',
						  type: 'post',
						  data: fd,
						  contentType: false,
						  processData: false,
						  success: function(data){
								if(data==1) {
								alert("Category Added Successfully");
                window.location.href="addcat.php";
								
										
								} else {
									alert(data);
                  window.location.href="add-category.php";
								}
							}
					   });
				
						
					} else {
						alert("Please select a file.");
						
					}
					return false;
				});
			});
			</script>
			
			
			
			
  			<script>
			
$(document).ready(()=>{
      $('#my_image').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
	</script>
		<div class="col-lg-12 shawdow-sm" style="margin-bottom:100px;" >
		 </div>
		
<!-- category item display -->

    <main id="main">	

    </div>
	
    <?php include("scripts/connect.php");
 ?>
		<?php
	$stmt = $db->prepare("SELECT `id`, `name`, `image`FROM `addcategory` ");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
?>






		<br>
		</br>

		<!-- ======= Contact Section ======= -->
		<!-- End Contact Section -->

	</main><!-- End #main -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.table').DataTable();

			$('.table tbody').on('click', 'tr', function () {
				var data = $('.table').DataTable().row(this).data();
				var id = data[0];
				window.location.href = "update-cat.php?message=" + id;
			});
		});
	</script>
   <?php
		 include("templets/footer.php");
		 ?>
</body>
</html>