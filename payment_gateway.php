<?php
	//print_r($_REQUEST);
	include "include/connection.php";

	if(isset($_REQUEST['payment_id']) && isset($_REQUEST['payment_request_id']) && isset($_REQUEST['payment_status']))
	{
		$user_id				= $_SESSION['customer'];
		$payment_id 			= $_REQUEST['payment_id'];
		$payment_request_id		= $_REQUEST['payment_request_id'];
		$payment_status			= $_REQUEST['payment_status'];

		$qry = "insert into manage_order set user_id	= '$user_id',
									payment_id 			= '$payment_id',
									payment_request_id	= '$payment_request_id',
									payment_status		= '$payment_status'";

		$result 	= mysqli_query($mysqli,$qry);
		$order_id 	= mysqli_insert_id($mysqli);
		
		foreach($_SESSION['cart'] as $product_id => $product_data)
		{
			$product_name	 = $product_data['product_name'];
			$product_image	 = $product_data['product_image'];
			$product_price	 = $product_data['product_price'];
			$product_quantity= $product_data['product_quantity'];

			$qry = "insert into manage_order_details set order_id	 = '$order_id',
													user_id			 = '$user_id',
													product_id	 	 = '$product_id',
													product_name     = '$product_name',
													product_image 	 = '$product_image',
													product_price	 = '$product_price',
													product_quantity = '$product_quantity'";

			mysqli_query($mysqli,$qry);
		}

		if($payment_status = "Credit")
		{
			unset($_SESSION['cart']);
			$_SESSION['msg'] = "<span>Your Payment Is Successfull.</span>";
			header("location:product.php");
			exit();
		}
		else
		{
			$_SESSION['msg2'] = "<span>Your Payment Is Cancelled.</span>";
			header("view_cart.php");
			exit();
		}

	}
?>