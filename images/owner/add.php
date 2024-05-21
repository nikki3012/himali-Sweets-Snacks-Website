<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if (isset($_POST['AAadditem']) && isset($_FILES['my_image'])) {
	include "script/connect.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO inventory(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location:");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
?>
    <!-- Add CAtegory Form Starts -->
 <form id="AAcategory"  >

<table class="tbl-30">
    <tr>
        <td>Category : </td>
        <td>
<select name="category" id="category">
  <option value="Sweets">Sweets</option>
  <option value="Namkeens">Namkeens</option>
  <option value="Bakery">Bakery</option>
  <option value="Restaurant">Restaurant</option>
</select>
    </tr>

  

    <tr>
        <td>Item_Name: </td>
        <td>
            <input type="text" id="item_Name" name="item_Name" placeholder="item name" >
           
        </td>
    </tr>

    <tr>
        <td>Quantity: </td>
        <td>
            <input type="text" name="quantity" id="quantity">  
            
        </td>
    </tr>

    <tr>
        <td>Price: </td>
        <td>
            <input type="text" name="price" id="price"> 
        </td>
    </tr>

   <tr>
        <td>Select Image: </td>
        <td>
            <input type="file" name="image" id="image">
        </td>
    </tr> 

    <tr>
        <td>Description: </td>
        <td>
            <input type="text" name="description" id="description"> 
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="submit" name="AAadditem"id="AAadditem"  value="Add Category" class="btn-secondary">
        </td>
    </tr>

</table>

</form>
<!-- Add CAtegory Form Ends -->
<script src="js/jquery-3.3.1.min.js"></script>
  <script>
				$(document).ready(function() {
					$('#category').focus();
					$('#AAadditem').click(function() 
                    

                    {
					  var category=$("#category").val();
					  var item_Name=$("#item_Name").val();
					  var quantity=$("#quantity").val();
					  var price=$("#price").val();
					  var description=$("#description").val();
						if (!category) {
							alert("Enter category");
						
						 }
                         else if (!item_Name) {
							alert("item name please.");
						}else if (!quantity) {
							alert("Enter quantity");
						}else if (!price) {
							alert("enter price");
						}else if (!description) {
							alert("enter description");
						} else {
							
							$.ajax({
								type: "POST",
								url: "include/relate.php",
								data: $('#AAcategory').serialize(),
								cache: false,
								beforeSend: function(){},
								success: function(data){
									if(data==1) {
										alert("successful");
										window.location.href="category.php";
									} else {
										alert(data);
										window.location.href="about.php";
									}
									}
								});
							
						}
						return false;
					});
				});

  
		</script>



</div>
</div>
</body>
</html>
