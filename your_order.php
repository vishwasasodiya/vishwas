<?php
	include "include/header.php";
?>

<html>
	<head>
		<style>
			table {
				margin-top: 30px;
				margin-bottom: 10px;
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
		<table cellpadding="7px" cellspacing="5px">
			<tr class="first">
				<th class="text-center">Order Id</th>
				<th class="text-center">User Id</th>
				<th class="text-center">Product Image</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">View Order</th>
			</tr>
				<?php
					$user_id	=	$_SESSION['customer'];
					$qry		=	"select *from manage_order where user_id = '$user_id'";
					$result		=	mysqli_query($mysqli,$qry);
					while($row		=	mysqli_fetch_assoc($result))
					{
				?>
				<?php
					$qry1 		=	"select *from manage_order_details where order_id = '".$row["order_id"]."'";
					$result1	=	mysqli_query($mysqli,$qry1);
					while($row1	=	mysqli_fetch_assoc($result1))
					{
				?>
			<tr>
				<td class="text-center"><?php echo $row['order_id']; ?></td>
				<td class="text-center"><?php echo $row['user_id']; ?></td>
				
				<td class="text-center"><img src="admin/images/<?php echo $row1['product_image']; ?>" style="height:80px;" /> </td>
				
				<td class="text-center"><?php echo $row1['product_name']; ?></td>
				<td class="text-center">
					<a href="view_orders.php?vid=<?php echo $row['order_id']; ?>">
						<button class="btn btn-outline-danger" style="margin-left:0px; margin-bottom:0px;">
							View Order &gt;&gt;
						</button> 	
					</a>
				</td>
			</tr>
				<?php
					}
				?>
				<?php
					}
				?>
		</table>
		</center>
			<a href="category.php">
				<button class="btn btn-outline-danger" style="margin-left:445px; margin-bottom:10px;">
					&lt;&lt; Continue Shopping
				</button>
			</a>
			
	</body>
</html>


<?php
	include "include/footer.php";
?>