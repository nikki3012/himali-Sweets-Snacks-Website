<?php


include("conn.php");

$id = $_GET["id"];

$products_sql = "SELECT * from inventory WHERE id = '".$id."' ";
$products_result = mysqli_query($conn,$products_sql);

$products_data = mysqli_fetch_all($products_result,MYSQLI_ASSOC);




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HealthHub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.10.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<?php include("templets/nav.php"); ?>
    <section></section>
    <?php if(isset( $_SESSION["logged_in"])){ ?>
    <div class="page-holder bg-light">
        
      <!--  Modal -->
      <section class="py-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0">
                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                  <div class="swiper product-slider-thumbs">
             
                  </div>
                </div>
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                      
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" target="_blank" href="<?php echo $products_data[0]["image"] ?>" data-gallery="gallery2" data-glightbox="Product item 1"><img class="img-fluid" src="<?php echo $products_data[0]["image"] ?>" alt="..."></a></div>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
            
              <h1> <?php echo $products_data[0]["item_Name"] ?></h1>
              <p class="text-muted lead">₹<?php echo $products_data[0]["price"] ?>   <?php echo $products_data[0]["price_for"] ?></p>

              <?php 
if($products_data[0]["quantity"]>0): ?>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity: </span>
                    &nbsp &nbsp <div class="quantity">
                      <input id="quantity_input" class="form-control border-0 shadow-0 p-0" type="text" value="1">
                    </div>
                  </div>
                </div>
                <input type="hidden" name="hidden_price" id="amount" value="<?php echo $products_data[0]["price"] ?>" >
                <input type="hidden" name="hidden_id" value="<?php echo $products_data[0]["id"]; ?>" >
						<div class="col-sm-3 pl-sm-0"><div class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" id="add_btn">Add to cart</div></div>
              </div>
              
<?php else : ?>
<p><b>Out of Stock!</b></p>
<?php endif; ?>


            </div>
          </div>

		  <script>
			const prod_id = <?php echo $_GET["id"] ?>;
			const quantityInput = document.getElementById("quantity_input");
  			let quantity = quantityInput.value;

  quantityInput.addEventListener("input", () => {
    quantity = parseInt(quantityInput.value);
	
  });
		  
const add_btn = document.getElementById("add_btn");

var total_amount = document.getElementById("amount").value;
const amount = total_amount;




add_btn.addEventListener("click",() => {
	const url = `${window.location.origin}/${window.location.pathname.split("/")[1]}/add_cart?prod_id=${prod_id}&quantity=${quantity}&amount=${amount}`;
  fetch(url)
    .then((res) => res.text())
    .then((data)=>{
      alert("Item added to Cart. ");

      window.location.href="menu.php";
    })
    .catch((error) => {
      console.error(error);
    });
});



		  </script>
      

          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
            
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <p class="text-sm mb-4"> - <?php echo $products_data[0]["description"] ?></p>
                <p>Disclaimer : Images are for reference purpose only and Ram Prasad's Himali reserved the rights for product packaging/size/name change without prior notice </p>
                <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAb1JREFUWEftl4ExBTEQhr9XAR2gAlSACtABFaACVIAKUAEqQAV0gA6ogPlNcrOXd7kkbybnZtzO3Lx3d9nNf//+2WxmjMxmI8PDBCiVkYmhUoaWgQtgD9D/Re0d2AdeSwOEKbsHdkuDRMafAJelsUJA36UBesafA2el8f4VoCdAl7dP4Dmlq5oMxbK12QfqLwCJqTVAv3NWE5DSY1N2AKw4BLeA7gcFFK6ybeDRINgJAP++qslQ17K3dU5FU3pq2dCAVp2glxyKueI5NCDhULE8dYAkbLGkraZ6ynKLdEvgNRnKBdTS8gQoQltDzMRQKUNafr68e1/VChU0dZBquLYK1Jrj+2W70zBlmvDITPjg2ln/SK3tXSagXN/eZa+5bHm/Ao4NAFXat0xAOb4Co/jNzt91DNIufO0mVQrVKniTsw4Bsg9AAK1tAC8L+nZWaj20QXUv9F5DSpm3WAuh8X6vivmG7DVBYwfFnNNHrPOzLHZlVyLWRzf7lx0UA6QVpeZqPaKXQ+CmR0t2A7XDlGZJwjZurTCpo7QCK00Cpi9TID3LOQBKX2JClyxs+ju/JwWoh4Q6ryZAKV5Hx9APR8hiJZ3griIAAAAASUVORK5CYII="/>   Delivery within sonada</p>
                <p>(Free Delivery )</p>
              </div>
            </div>
           </div>
         </div>
      </section>

      <?php }else{ ?>


<script> 
  alert("Please Login");
  window.location.href="login.php";</script>

 
 
<?php }  ?>
     <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/front.js"></script>
     
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>


	<!-- ======= Footer ======= -->
  <?php include("templets/footer.php"); ?><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>