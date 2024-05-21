
  <div class="row">

    <div class="row d-flex justify-content-start">
      <div class="col-lg-4 align-items-stretch video-box">
        <div class="form-container">
          <div class="col-lg-12 shawdow-sm" style="margin-top:120px;">

            <div class="form-inner">
              <!-- <form id="AAcategory" method="POST">
                <div class="field">
                  <h3>Update Product</h3>
                </div>
                <label>category:</label>
                <select id="category" name="category" class="form-control" placeholder="Choose">

                  <option value="SWEETS">SWEETS</option>
                  <option value="NAMKEENS">NAMKEENS</option>
                  <option value="BAKERY">BAKERY</option>
                  <option value="RESTAURANT">RESTAURANT</option>
                </select>

                <label>ID:</label>
                <div class="field">
                  <input type="text" id="id" name="id" placeholder=" id" value="<?php echo $rows['id'] ?>">
                </div>

                <label>Item Name:</label>
                <div class="field">
                  <input type="text" id="item_Name" name="item_Name" placeholder=" Item Name" value="<?php echo $rows['item_Name'] ?>">
                </div>
                <label>Quantity:</label>
                <div class="field">
                  <input type="text" id="quantity" name="quantity" placeholder=" Quantity" value="<?php echo $rows['quantity'] ?>">
                </div>
                <label>Price:</label>
                <div class="field">
                  <input type="text" id="price" name="price" placeholder="Price " value="<?php echo $rows['price'] ?>">
                </div>

                <label>Description:</label>
                <div class="field">
                  <input type="text" id="description" name="description" placeholder="Description" value="<?php echo $rows['description'] ?>">
                </div>



            </div>



            <a href="" class="btn btn-outline-warning" id="AAupdate" name="AAupdate">UPDATE</a>
            <a href="" class="btn btn-outline-warning" id="AAadditem" name="AAadditem">DELETE</a>



            </form> -->




            <form id="AAcategory" method="POST" action="AAcategory.php">
  <div class="field">
    <h3>Update Product</h3>
  </div>
  <label>category:</label>
  <select id="category" name="category" class="form-control" placeholder="Choose">
    <option value="SWEETS">SWEETS</option>
    <option value="NAMKEENS">NAMKEENS</option>
    <option value="BAKERY">BAKERY</option>
    <option value="RESTAURANT">RESTAURANT</option>
  </select>

  <label>ID:</label>
  <div class="field">
    <input type="text" id="id" name="id" placeholder=" id" value="<?php echo $rows['id'] ?>">
  </div>

  <label>Item Name:</label>
  <div class="field">
    <input type="text" id="item_Name" name="item_Name" placeholder=" Item Name" value="<?php echo $rows['item_Name'] ?>">
  </div>

  <label>Quantity:</label>
  <div class="field">
    <input type="text" id="quantity" name="quantity" placeholder=" Quantity" value="<?php echo $rows['quantity'] ?>">
  </div>

  <label>Price:</label>
  <div class="field">
    <input type="text" id="price" name="price" placeholder="Price " value="<?php echo $rows['price'] ?>">
  </div>

  <label>Description:</label>
  <div class="field">
    <input type="text" id="description" name="description" placeholder="Description" value="<?php echo $rows['description'] ?>">
  </div>

  <div>
    <button type="submit" class="btn btn-outline-warning" name="AAupdate">UPDATE</button>
    <button type="submit" class="btn btn-outline-warning" name="AAdelete">DELETE</button>
  </div>
</form>






          </div>
        </div>
      </div>

    </div>

    <div class="row d-flex justify-content-end" style="margin-bottom:200px;">
      <div class="col-lg-4 align-items-stretch video-box">
        <label>Image Url:</label>
        <div class="field">
          <input type="file" name="my_image" id="my_image">
        </div>
        <label>Image :</label>
        <div class="holder">
          <img id="imgPreview" src="<?php echo $rows['image'] ?>" alt="pic" />
        </div>
      </div>
    </div>
  </div>



  <!-- Slide 3 -->


  </div>


  </div>
  </div>
  </section><!-- End Hero -->

</body>

</html>
</main><!-- End #main -->




<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function() {
    $('#category').focus();
    $('#AAadditem').click(function() {
      var fd = new FormData();
      var files = $('#my_image')[0].files;
      var category = $("#category").val();
      var item_Name = $("#item_Name").val();
      var quantity = $("#quantity").val();
      var price = $("#price").val();
      var description = $("#description").val();
      if (!category) {
        alert("Enter category");

      } else if (!item_Name) {
        alert("item name please.");
      } else if (!quantity) {
        alert("Enter quantity");
      } else if (!price) {
        alert("enter price");
      } else if (!my_image) {
        alert("enter image");
      } else if (!description) {
        alert("enter description");
      } else if (files.length > 0) {
        fd.append('my_image', files[0]);
        fd.append('category', category);
        fd.append('item_Name', item_Name);
        fd.append('quantity', quantity);
        fd.append('price', price);
        fd.append('description', description);
        $.ajax({
          url: 'image-resize-demo.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(data) {
            if (data == 1) {
              alert("Item Added Successfully'");
              window.location.href = "addpro2.php";


            } else {
              alert(data);
              window.location.href = "addproduct.php";
            }
          }
        });


      } else {
        alert("Please select a file.");

      }
      return false;
    });
  });
  // $(document).ready(function() {
  // 	$('#AAupdate').click(function() {
  //  var category=$("#category").val();
  // 		  var item_Name=$("#item_Name").val();
  // 		  var quantity=$("#quantity").val();
  // 		  var price=$("#price").val();
  // 		  var description=$("#description").val();
  //  var category=$("#category").val();
  // 		  var item_Name=$("#item_Name").val();
  // 		  var quantity=$("#quantity").val();
  // 		  var price=$("#price").val();
  // 		  var description=$("#description").val();
  // 		  var data ="id="+id + "&category"+ category+"&quantity"+quantity+"&price"+price+"&description"+description;
  // 		  $.ajax({
  // 			  url: 'AAcategory',
  // 			  type: 'post',
  // 			  data: fd,
  // 			  contentType: false,
  // 			  processData: false,
  // 			  success: function(data){
  // 					if(data==1) {
  // 					alert("Items Updated Successfully'");
  //           window.location.href="addpro2.php";


  // 					} else {
  // 						alert(data);
  //             alert("Failed to update");
  //             window.location.href="addproduct.php";
  // 					}
  // 				}
  // 		   });
  // 		   return false;
  //  });

  // });


  



  $(document).ready(function() {
  $('#AAcategory').submit(function(event) {
    event.preventDefault();
    var category = $("#category").val();
    var id = $("#id").val();
    var item_Name = $("#item_Name").val();
    var quantity = $("#quantity").val();
    var price = $("#price").val();
    var description = $("#description").val();

    var data = {
      category: category,
      id: id,
      item_Name: item_Name,
      quantity: quantity,
      price: price,
      description: description
    };

    $.ajax({
      url: 'AAcategory.php',
      type: 'POST',
      data: data,
      success: function(data) {
        if (data == 1) {
          alert("Items Updated Successfully");
          window.location.href = "addpro2.php";
        } else {
          alert(data);
          alert("Failed to update");
        }
      },
      error: function() {
        alert("Error: Unable to update items");
      }
    });
  });
}); 





</script>
<script>
  $(document).ready(() => {
    $('#my_image').change(function() {
      const file = this.files[0];
      console.log(file);
      if (file) {
        let reader = new FileReader();
        reader.onload = function(event) {
          console.log(event.target.result);
          $('#imgPreview').attr('src', event.target.result);
        }
        reader.readAsDataURL(file);
      }
    });
  });
</script>



/*


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class=cont1>
		<form action="" method="POST">
		<label>category:</label>
		<select id="category" name="category" class="form-control" placeholder="Choose">
			<option value="SWEETS">SWEETS</option>
			<option value="NAMKEENS">NAMKEENS</option>
			<option value="BAKERY">BAKERY</option>
			<option value="RESTAURANT">RESTAURANT</option>
		</select>
		<br>
		<label>ID:</label>
			<input type="text" id="id" name="id" placeholder=" id"><br>

		<label>Item Name:</label>
			<input type="text" id="item_Name" name="item_Name" placeholder=" Item Name"><br>

		<label>Quantity:</label>
			<input type="text" id="quantity" name="quantity" placeholder=" Quantity"><br>

		<label>Price:</label>
		<div class="field">
			<input type="text" id="price" name="price" placeholder="Price "><br>

		<label>Description:</label>
			<input type="text" id="description" name="description" placeholder="Description"><br>

		
		<input type="submit" name="update_btn" value="Update">
		</form>
	</div>



<?php
	$host = "localhost"; // Or use IP address: 127.0.0.1
	$username = "root"; // Default username for XAMPP MySQL is "root"
	$password = ""; // Default password for XAMPP MySQL is blank
	$dbname = "himali"; // Replace with your database name
	
	// Establish database connection using PDO (PHP Data Objects) extension
	try {
		$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];
		$pdo = new PDO($dsn, $username, $password, $options);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		exit;
	}

	$sql = "UPDATE inventory SET item_Name = :name WHERE id = :id";

// Prepare the query statement
$stmt = $pdo->prepare($sql);

// Bind the values to the placeholders
$name = "AAe"; // Replace with the new name value
$id = 54; // Replace with the actual ID of the row to update
$stmt->bindParam(":name", $name);
$stmt->bindParam(":id", $id);

// Execute the query
if ($stmt->execute()) {
    echo "Update successful!";
} else {
    echo "Update failed: " . $stmt->errorInfo()[2];
}

?>

</body>
</html>

*/









/* 

<?php
	// Define database connection variables
	$db_host = "localhost";
	$db_name = "himali";
	$db_user = "root";
	$db_pass = "";
	
	// Establish a connection to the database
	try {
		$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	echo "next";
	echo "<br>";
	//echo "$_POST";
	

	if (isset($_POST['update_btn'])) {
		$id = $_POST['id'];
		$category = $_POST['category'];
		$item_Name = $_POST['item_Name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$description = $_POST['description'];

		echo "<br>";
	print_r($_POST);
	echo "<br>start";

		$query = "UPDATE inventory SET category = '$category', item_Name = '$item_Name', quantity = '$quantity', price = '$price', description = '$description' WHERE id = '$id'";
		$result = mysqli_query($pdo, $query);
		echo "$result see<br>hi";
		print_r($result);
		if ($result) {
			echo "1";
			?>
			<script>
				alert("Updated");
			</script>
			<?php
		} else {
			echo "Unable to update items: " . mysqli_error($pdo);
			print_r("$_POST");
		}
		echi 
	} else {
		echo "Error: category parameter not set";
		print_r("$_POST");
	}
	echo "end";
	?>


    */