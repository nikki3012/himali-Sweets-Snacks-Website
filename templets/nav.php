 <?php
  session_start();
 ?>

 <!-- ======= Top Bar ======= -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body>
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
	  <a href="user.php "><i class="bi bi-person"> My Profile</i></a> &nbsp&nbsp&nbsp&nbsp
      <i class="bi bi-phone d-flex align-items-center "><span>9738223577 / 8145132159</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 7:30 AM - 8:30 PM</span></i>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-user"></i> 
        <?php 
		if (isset($_SESSION['logged_in'])){
		echo "Hello ",$_SESSION["firstName"] ;
		}else{
			echo "LOGIN TO ORDER";
			
		}
		?>
  
		    </div>
    </div>
  </div>
	



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.php">Ram Prasad's Himali</a>  </h1>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0 h-75" >
       
        <ul>
          <li><a class="nav-link scrollto active" href="index.php"href="#specials">Home</a></li>
          <li><a class="nav-link scrollto " href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="special.php">Specials</a></li><li></li>
          <li><a class="nav-link scrollto" href="Contact.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="cart.php">Cart</a></li>
          <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
           
              
                
                  <li><a href="login.php">
                  <?php 
		if (isset($_SESSION['logged_in'])){
		}else{
			echo "Login";
			
		}
		?>


                  </a></li>
                  <li><a href="Sign Up.php">Sign-Up</a></li>
                  <li><a href="Logout.php">
    <?php 
		if (isset($_SESSION['logged_in'])){
		echo "<a href='logout.php'>Logout</a>";
		}else{
			echo " ";
			
		}
		?>
                  </a></li>
                
             
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> </div>
      </nav><!-- .navbar -->

    

    </div>
    
  </header><!-- End Header -->

  

 </body>
 </html>

 