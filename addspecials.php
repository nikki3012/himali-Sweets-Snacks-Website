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
<div class="row d-flex justify-content-center">
 <div class="col-lg-5 align-items-stretch video-box" >
   <div class="col-lg-12 shawdow-sm" style="margin-top:100px;" >
        <div class="form-container">
		
              
           
        <div class="form-inner">
          

          <form id="AAcategory" >
         			<center>
		<h2>ADD SPECIALS</h2>
		</center>
            <div class="field">
			<lable>Item Name:</lable>
              <input type="text" id="item_Name" name="item_Name"  placeholder=" Item Name" >
            </div>
			</br>
            <div class="field">
				<lable>Quantity:</lable>
              <input type="text" id="quantity" name="quantity"  placeholder=" Quantity" >
            </div>
            </br>
			<div class="field">
				<lable>Price:</lable>
              <input type="text" id="price" name="price"  placeholder="Price " >
    		</div>
			</br>
			
				<lable>Choose image:</lable></br></br>
			<input type="file" name="my_image" id="my_image">
		
			</br>
			</br>
			<div class="holder">
                <img id="imgPreview" src="" alt="pic" />
            </div>
			
			
			<div class="field">
				<lable>Description:</lable>
			<input type="text" name="description" id="description" placeholder="description">
    		</div>
    		
			</br>
			</br>
			<center>
			<a href="" class="btn btn-outline-warning"id="AAadditem" name="AAadditem" >ADD</a>
			</center>  
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
	$('#item_Name').focus();
	$('#AAadditem').click(function() {
var fd = new FormData();
var files = $('#my_image')[0].files;
		  var item_Name=$("#item_Name").val();
		  var quantity=$("#quantity").val();
		  var price=$("#price").val();
		  var description=$("#description").val();
if (!item_Name) {
				alert("Enter item_Name");
			
			 }else if (!quantity) {
				alert("Enter quantity");
			}else if (!price) {
				alert("enter price");
			}else if (!my_image) {
				alert("enter image");
			}else if (!description) {
				alert("enter description");
			} else if (files.length >0){
fd.append('my_image',files[0]);
			fd.append('item_Name',item_Name);
			fd.append('quantity',quantity);
			fd.append('price',price);
			fd.append('description',description);	
			$.ajax({
			  url: 'image-resize-demo2.php',
			  type: 'post',
			  data: fd,
			  contentType: false,
			  processData: false,
			  success: function(data){
					if(data==1) {
					alert("Item Added Successfully'");
	window.location.href="addspl2.php";
					
							
					} else {
						alert(data);
	  window.location.href="addspecials.php";
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

</body>
</html>