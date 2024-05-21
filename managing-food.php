<?php 

    include('config/constants.php'); 
  

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>

        <br /><br />

                <!-- Button to Add Admin -->
               
					<a href="<?php echo SITEURL; ?>addproduct.php" class="btn-primary">Add Food</a>
                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
						<th>Category</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                       
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the Food
                        $sql = "SELECT * FROM inventory";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have foods or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have food in Database
                            //Get the Foods from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
								$id = $row['id'];
						
							$category= $_POST['category'];
							$item_Name= $_POST['item_Name'];
							$quantity= $_POST['quantity'];
							$price= $_POST['price'];
							$description= $_POST['description'];
								
                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
									 <td><?php echo $category; ?>. </td>
                                    <td><?php echo $item_Name; ?></td>
									 <td><?php echo $quantity; ?></td>
                                    <td>$<?php echo $price; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($image=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
									 <td><?php echo $description; ?></td>
                                 
                                 
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Food not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

<?php include('templets/footer.php'); ?>