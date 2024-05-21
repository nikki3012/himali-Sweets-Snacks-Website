<?php
include("scripts/connect.php"); 

	$stmt = $db->prepare("SELECT `id`,`name` FROM `addcategory` GROUP BY `name`");	
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
 
  <link href="assets/css/signup.css" rel="stylesheet">

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
<section id="addproduct">
	<div class="row d-flex justify-content-center">
		 <div class="col-lg-5 align-items-stretch video-box" >
		   <div class="col-lg-12 shawdow-sm" style="margin-top:100px;" >
				<div class="form-container"> 
						<div class="form-inner">
					  
						
							<form id="AAcategory" class="border border-warning border-3 rounded p-4" >
								 <h2 class="text-center">ADD PRODUCT</h2>
								 
								  <div class="field ">
									 <lable>Select Category:</lable>
									 <div class="form-group col-lg-6 col-md-6 mt-md-2">
									  <select class="form-control" id="category" name="category">
											 <option value="-1">Select Category</option>
											 <?php foreach($rows as $row):?>
												<option value="<?php echo $row['id']?>"name="<?php echo $row['name']?>"  > <?php echo $row['name']?></option>
											 <?php endforeach; ?>	
										</select> 
									</div>
									</div>
									</br>
									
									<div class="field">
									<lable>Item Name:</lable>
									  <input type="text" id="item_Name" name="item_Name"  placeholder=" Item Name" >
									</div>
									</br>
									<div class="field">
									<lable>Quantity :</lable>
									  <input type="number" id="quantity" name="quantity"  placeholder=" Quantity" >
									</div>
									</br>
									<div class="field">
									<lable>Price:</lable>
									  <input type="number" id="price" name="price"  placeholder="Price " >
									</div>
									</br>
									<div class="field">
									<lable>Price per:</lable>
									  <input type="text" id="price_for" name="price_for"  placeholder="Eg.:per piece " >
									</div>
									</br>
									
									<input type="file" name="my_image" id="my_image">
								
									<div class="holder">
									<img src="assets/img/indian-sweetsnew.jpg" alt="Image"  id="imgPreview">
									</div>
									<div class="field">
									<lable>Description:</lable>
									<input type="text" name="description" id="description" placeholder="description">
									</div>
									
									<br>
									<div class="field">
										<br>
									<lable>Specials:</lable>
													<select name="specials" class="dropdown" id="specials"value="role">
													  <option value="1">Yes</option>
													  <option value="0">No</option>
													 
													</select>
									</div> 
									<br>
									<div class="text-center">
									<a href="" class="btn btn-warning "id="AAadditem" name="AAadditem" >ADD</a>
									</div>
								  
								   
								  
						    </form>
						</div>	  
				  </div>
			</div>
				  
		</div>

	</div>
		 </br>
</section>
		    <script src="assets/js/jquery-3.3.1.min.js">
			</script>
			 <script>
			$(document).ready(function() {
  				$('#category').focus();
				$('#AAadditem').click(function() {
            var fd = new FormData();
            var files = $('#my_image')[0].files;
            var category=$("#category").val();
			
			  var item_Name=$("#item_Name").val();
			  var quantity=$("#quantity").val();
			  var price=$("#price").val();
			  var price_for=$("#price_for").val();
			  var description=$("#description").val();
			  var specials=$("#specials").val();
            if (!category) {
							alert("Enter category");
						
						 }else if (!item_Name) {
							alert("item name please.");
						}else if (!quantity) {
							alert("Enter quantity");
						}else if (!price) {
							alert("enter price");
						}else if (!price_for) {
							alert("enter price for");
						}else if (!my_image) {
							alert("enter image");
						}else if (!description) {
							alert("enter description");
						}else if (!specials) {
							alert("select is it specials");
						} else if (files.length >0){
						fd.append('my_image',files[0]);
						fd.append('category',category);
						fd.append('item_Name',item_Name);
						fd.append('quantity',quantity);
						fd.append('price',price);
						fd.append('price_for',price_for);
						fd.append('description',description);	
						fd.append('specials',specials);	
						$.ajax({
						  url: 'image-resize-demo.php',
						  type: 'post',
						  data: fd,
						  contentType: false,
						  processData: false,
						  success: function(data){
								if(data==1) {
								alert("Items Added Successfully");
                window.location.href="addpro4.php";
								
										
								} else {
									alert(data);
                  window.location.href="addproduct2.php";
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
		 <?php
		 include("templets/footer.php");
		 ?>
 <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>