<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="manage.css">
  <style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

nav {
  background-color: #333;
  color: #fff;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
}

header {
  background-color: #fff;
  padding: 20px;
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  border: 1px solid #ccc;
  padding: 10px;
}

table th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: left;
}

table td {
  text-align: center;
}

table button {
  padding: 5px;
  border: none;
  background-color: #eeb087;
 
</style>
</head>
<body>


<?php


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}



 ?>

<?php if(isset( $_SESSION["logged_in"]) && isset( $_SESSION["role"])){ ?>




  <?php 
    
    include("conn.php");
     


  $id = $_SESSION["id"];
  
  $products_sql = "SELECT checkout.id,checkout.cid,checkout.UserName,checkout.home,checkout.status,checkout.fName FROM checkout ";
 

 $products_result = mysqli_query($conn,$products_sql);
  
  $products_data = mysqli_fetch_all($products_result,MYSQLI_ASSOC);



  
    
    
    
    ?>

 <table class="table table-hover">
                      <thead>
					
                        <tr>
                          <th>Order id</th>
                          
                          <th>Product id</th>
                          <th>Customer Name</th>
                          <th>Customer Address</th>
                          <th>Food Name</th>
                          <th>Order Status</th>
                          <th>Edit Order</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
						$products_data = array_reverse($products_data);
						foreach($products_data as $prod){ ?>
						
						
                          <tr>
                            <td><?php echo $prod["id"] ?></td>
                            <td><?php echo $prod["cid"] ?></td>
                            <td><?php echo $prod["UserName"] ?></td>
                            <td><?php echo $prod["home"] ?></td>
                            <td><?php echo $prod["fName"] ?></td>
                          
                          
                            <td><label class="badge badge-danger"><?php echo $prod["status"] == 1 ? "Accepted" : ($prod["status"] == 3 ? "Cancelled" : "Pending" )?></label></td>
                            <td><a href="<?php echo $prod["status"] == 1 ? "update_status.php?reffer=manage-orders.php&status=3&id=" . $prod["id"] : ($prod["status"] == 3 ? "#" :"update_status.php?reffer=manage-orders.php&status=1&id=" . $prod["id"]) ?>"><?php echo $prod["status"] == 1 ? "Cancel" : "Accept" ?></a></td>
                          
                          </tr>



                        <?php } ?>

</table>
</body>



<?php }else{ ?>
    <?php header("Location: ../login.php") ?>
 
   
  <?php }?>
</html>

