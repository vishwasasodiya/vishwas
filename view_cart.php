<?php
	include "include/header.php";
?>
<style>

	a:hover .remove{
		background-color: lightgreen;
	}

	a:hover .all_remove{
		background-color: lightgreen;
	}

</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="custom.css" />
<div class="container">
	<?php
		if(isset($_SESSION['cart']))
		{
			// echo "<pre>";
			// print_r($_SESSION);
			// echo "<pre>";
	?>
	<?php
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
	
	<table id="cart" class="table table-hover table-condensed" style="margin-top:30px; margin-bottom:30px;">
    				<thead>
						<tr>
							<th>Sr. No.</th>
							<th style="width:50%">Product Image</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:20%" class="text-center">Subtotal</th>
							<th style="width:3%;" class="text-center">My Cart <sup>(<?php if(isset($_SESSION['cart'])) { echo count($_SESSION['cart']); } ?>)</sup>
							</th>
						</tr>
					</thead>
						<?php
							$final_total = 0;
							$i = 1;
							
							foreach($_SESSION['cart'] as $product_id => $product_data) 
							{
								if(isset($_SESSION['cart']))
								$total = $product_data['product_price'] * $product_data['product_quantity'];
								$final_total += $total;
						?>
					<form method="post">
					<tbody>
						<tr>
							<td><?php echo $i; ?></td>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="admin/images/<?php echo $product_data['product_image']; ?>" style="height:80px;" class="img-responsive"/></div>
									<div class="col-sm-10"> <br> <br> <br> <br>
									<h6 class="nomargin"><?php echo $product_data['product_name']; ?></h6>
									</div>
								</div>
							</td>
												
							<td data-th="Price"><?php echo $product_data['product_price']; ?></td>
							<td data-th="Quantity">
								<input type="number" name="quantity" class="form-control text-center" value="<?php echo $product_data['product_quantity']; ?>">
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $total; ?> </td>

							<td>
								<a href="view_cart.php?did=<?php echo $product_id; ?>" class="btn btn-outline-danger"> Remove </a>
							</td>
							<?php
								if(isset($_GET['did']))
								{
									$id = $_GET['did'];
									unset($_SESSION['cart']["$id"]);
								}
							?>
						</tr>
					</tbody>
					</form>
					<?php
						$i++;
							}
					?>
					<tfoot>

						<tr>
							<td><a href="product.php" style="height:40px; width:200px;" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<form method="post" action="pay.php">
								<td class="hidden-xs text-center">
									<input type="hidden" name="amount" value="<?php echo $final_total; ?>"/>Total Rs.<?php echo $final_total; ?>/-
								</td>
								<td>
									<input type="submit" name="checkout" value="checkout" class="btn btn-success btn-block"/>
								</td>
							</form>
							<form method="post">
								<td>
									<input type="submit" name="update" value="update" class="btn btn-success btn-block" />
									
								</td>
								<td>
									<a href=""> 
										<input type="submit" class="all_remove" style="width:150px; color:red;" name="remove_all_item" value="Remove All Items"/>
									</a>
									<?php
										if(isset($_POST['remove_all_item']))
										{
											unset($_SESSION['cart']);
										}
									?>
								</td>
							</form>
						</tr>
					</tfoot>
				</table>
</div>
<?php
		}
		else
		{
?>
	<h3><span style="color:red;">Your cart is empty!</span></h3>
<?php
		}
	include "include/footer.php";
?>