<?php 

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
  }
  
  
  
  
  include("conn.php");
  
  $id = $_SESSION["id"];


$user_sql = "SELECT * FROM members WHERE id = '".$id."'";

$user_result = mysqli_query($conn,$user_sql);

$user_data = mysqli_fetch_all($user_result,MYSQLI_ASSOC);


$c_user = $user_data[0];


?>



<?php if(isset( $_SESSION["logged_in"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>bs5 edit profile account details - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>
</head>
<body>

<div class="container-xl px-4 mt-4">

<nav class="nav nav-borders">
<a class="nav-link active ms-0">Profile</a>
<a class="nav-link" href="index.php" target="__blank">Home</a>

</nav>
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">


</div>
<div class="col-xl-12">

<div class="card mb-4">
<div class="card-header">Details</div>
<div class="card-body">
<form>

<div class="mb-3">
<label class="small mb-1" for="inputUsername">Id </label>
<p><?php echo $c_user["id"] ?></p>
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputFirstName">First name</label>
<p><?php echo $c_user["firstName"] ?></p>
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLastName">Last Name</label>
<p><?php echo $c_user["lastName"] ?></p>
</div>
</div>

<div class="row gx-3 mb-3">


<div class="col-md-6">
<label class="small mb-1" for="inputLocation">Email Id</label>
<p><?php echo $c_user["email"] ?><br></p>
</div>
</div>

<div class="mb-3">
<label class="small mb-1" for="inputEmailAddress">Gender</label>
<p><?php echo $c_user["gender"] ?></p>
</div>

<div class="row gx-3 mb-3">

<!-- <div class="col-md-6">
<label class="small mb-1" for="inputPhone">Phone number</label>
<p></p>
</div> -->

</div>

<button class="btn btn-primary" type="button"><a href="prof-edit.php" style="color:white">Edit Profile</a></button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
  <?php }else{ ?>


<?php echo "not login" ?> 

<?php header("Location: login.php") ?>
 
   
   
 <?php }  ?>
</html>