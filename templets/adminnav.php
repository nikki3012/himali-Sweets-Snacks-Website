 <?php
  session_start();
 ?>
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
      <i class="bi bi-phone d-flex align-items-center "><span>9738223577 / 8145132159</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 7:30 AM - 8:30 PM</span></i>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-user"></i> 
        <?php 
		if (isset($_SESSION['logged_in'])){
		echo "Welcome ",$_SESSION["firstName"] ;
		}else{
			echo "SIGN UP TO ORDER";
			
		}
		?>
  
		    </div>
    </div>
  </div>
	



 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center ">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<div class="logo me-auto">
				<h1><a href="index.php">Admin Panel</a> </h1>

				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav id="navbar" class="navbar order-last order-lg-0 h-75">
				<div class=" h-50">
					<ul>
						<li><a class="nav-link scrollto active" href="admin.php">HOME</a></li>
						<li><a class="nav-link scrollto" href="con2.php">CHECK FEEDBACK</a></li>
						<li class="dropdown"><a href="#"><span>ACCOUNTS</span> <i class="bi bi-chevron-down"></i></a>
							<ul>
								
								<li><a href="Logout.php">Log-out</a></li>
							</ul>
						</li>
						</li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</div>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->