<?php
	include "include/header.php";
	include "view_orders-db.php";
	
	
?>

<html>
	<head>
		<style>
			table {
				margin-top: 30px;
				margin-bottom: 30px;
			}
			
			th{
				border-right: 1px solid silver;
			}

			td{
				border-right: 1px solid silver;
			}
			
			.first {
				border-bottom: 1px solid #DB4437;
			}
			
			td{
				border-bottom: 1px solid #DB4437;
			}
			
		</style>
	</head>
	<body>
		<center>
		<?php getmsg(); ?>
		<table cellpadding="7px" cellspacing="5px">
			<tr class="first">
				<th class="text-center">Order Id</th>
				<th class="text-center">User Id</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">Product Image</th>
				<th class="text-center">Product Price</th>
				<th class="text-center">Product Quantity</th>
				<th class="text-center" colspan="2">Delivery</th>
				<th class="text-center">Payment</th>
				<th class="text-center">Replace Time</th>
				<th class="text-center">Cancel Order</th>
			</tr>
				<?php
					if(isset($_GET['vid']))
					{
						$id = $_GET['vid'];
						$qry = "select *from manage_order_details where order_id = '$id'";
						$result = mysqli_query($mysqli,$qry);
						while($row = mysqli_fetch_assoc($result))
						{
				?>
			<tr>
				<td class="text-center"><?php echo $row['order_id']; ?></td>
				<td class="text-center"><?php echo $row['user_id']; ?></td>
				<td class="text-center"><?php echo $row['product_name']; ?></td>
				<td class="text-center"><img src="admin/images/<?php echo $row['product_image']; ?>" style="height:80px;" /> </td>
				<td class="text-center"><?php echo $row['product_price']; ?></td>
				<td class="text-center"><?php echo $row['product_quantity']; ?></td>
				<td class="text-center"> 29 Oct. 2020 </td>
				<td class="text-center"> Thurseday </td>
				<td class="text-center"><li>Cash On Delivery</li></td>
				<td class="text-center">10 Days</td>
				<!--- Delete specific orders using specific order id ---->
				<td class="text-center">
					<a href="view_orders.php?did=<?php echo $row['order_details_id']; ?>&product_image=<?php echo $row['product_image']; ?>" onclick="javascript: return confirm('Are u Sure Delete This Order');">
						<button class="btn btn-outline-danger">Delete</button>
					</a>
				</td>
			</tr>
				<?php
						}
					}
				?>
		</table>
		</center>
	</body>
</html>

<?php
	include "include/footer.php";
?>