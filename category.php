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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>

 <?php include("templets/nav.php");?>
 <?php include ("script/connect.php"); ?>
  
 <?php
    
    //selecting table
    $stmt = $db->prepare("SELECT * FROM inventory ORDER BY id");
    try{
    $stmt->execute();
    $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
      echo $e->getMessage();
      $db = null;
    }
    ?>
  
 

  <main id="main">

  
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>information</span> below</h2>
          <p>info below.</p>
        </div>
      </div>

     

      <div class="container mt-5">

          

        <table id="retri">
          
            <thead>

                <th>id</th>
                <th>Category</th>
                <th>Item_Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image_url</th>
                <th>Description</th>
              </thead>    

                   
                     
                        <tbody>
                        <?php foreach($rows as $row):?>
                        <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['Category']?></td>
                          <td><?php echo $row['Quantity']?></td>
                          <td><?php echo $row['Price']?></td>
                          <td><?php echo $row['Image_url']?></td>
                          <td><?php echo $row['Description']?></td>
                  
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                           
                              
                                

                            
                     
                    
               
                
                
           
    </table>

      </div>
    </section>
    <!-- End Contact Section -->

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
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
   <script>
        $(document).ready(function() {
            $('#retri').DataTable();
 
            $('#retri tbody').on('click', 'tr', function() {
                var data = $('.table').DataTable().row(this).data();
				var id=data[0];
				window.location.href = "index.php?message="+id;
            });
        });
    </script>
   

</body>

</html>