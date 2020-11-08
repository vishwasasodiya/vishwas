<?php
	if(isset($_POST['add_cart']))
	{
		//print_r($_POST);
		$product_id				= $_POST['product_id'];
		$product_name			= $_POST['product_name'];
		$product_image		 	= $_POST['product_image'];
		$product_description1	= $_POST['product_description1'];
		$product_overview		= $_POST['product_overview'];
		$product_description2	= $_POST['product_description2'];
		$product_price 		 	= $_POST['product_price'];
		$product_quantity	 	= $_POST['product_quantity'];
	
		$_SESSION['cart']["$product_id"] = array (
											"product_name" 			=> $product_name,
											"product_image"			=> $product_image,
											"product_description1"	=> $product_description1,
											"product_overview"		=> $product_overview,
											"product_description2"	=> $product_description2,
											"product_price"			=> $product_price,
											"product_quantity"		=> $product_quantity,
		);
		//print_r($_SESSION['cart']);
		$_SESSION['msg'] = "<span style='color:green;'>Add Cart Successfully.</span>";
		header("location:view_cart.php");
		exit();
	}
?>