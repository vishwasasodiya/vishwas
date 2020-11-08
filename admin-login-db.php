<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$qry 	  = "select *from admin_panel where username = '$username' && password = '$password'";
		
		$result = mysqli_query($mysqli,$qry);
		$row = mysqli_fetch_assoc($result);
		$total_row = mysqli_num_rows($result);
		
		if($total_row == 1)
		{
			$_SESSION['msg'] = "<span style='color:red'>Login Success</span>";
			header("location:admin/login.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "<span style='color:green'>Login Not success</span>";
			header("location:admin-login.php");
			exit();
		}
	}
?>