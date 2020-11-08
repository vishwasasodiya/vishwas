<?php
	if(isset($_GET['did']))
	{
		$order_details_id		=	$_GET['did'];
		$product_image			=	$_GET['product_image'];
		
		$qry	=	"delete from manage_order_details where order_details_id = '$order_details_id'";
		//echo $qry;
		//die;
		$result	=	mysqli_query($mysqli,$qry);
		
		if($result)
		{
			unlink("admin/images/$product_image");
			setmsg("Your Order Successfully Deleted");
			redirect("view_orders.php");
			exit();
		}
		else
		{
			setmsg("Order Not Deleted");
			redirect("view_orders.php");
			exit();
		}
	}
?>