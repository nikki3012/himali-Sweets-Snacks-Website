<?php include("scripts/connect.php");
 ?>
		<?php
	$stmt = $db->prepare("SELECT `id`, `name`, `image`FROM `addcategory` ");
	try{
	$stmt->execute();
	$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$db = null;
	}
?>
<table class="table table-striped">
					
					<thead>

						<th style="display:none">id</th>
						<th>Item Name</th>
						<th>IMAGE</th>
                        <th>IMAGE pic</th>
					</thead>
					<tbody>
						<?php foreach($rows as $row):?>
						<tr>							
							<td >
								<?php echo $row['id']?>
							</td>

							<td>
								<?php echo $row['name']?>
							</td>

							<td>
								<img src="<?php echo $row['image']?>"width="100px">
                            </td>
                            <td>
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
                                                <img src="<?php echo $row1['image']?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                            </td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
                <script>
		$(document).ready(function () {
			$('.table').DataTable();

			$('.table tbody').on('click', 'tr', function () {
				var data = $('.table').DataTable().row(this).data();
				var id = data[0];
				window.location.href = "updatespl.php?message=" + id;
			});
		});
	</script>