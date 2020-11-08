<?php
	if(isset($_POST['submit']))
	{
		$user_id			=	$_SESSION['customer'];
		$old_password		=	$_POST['old_password'];
		$new_password		=	$_POST['new_password'];
		$con_password		=	$_POST['con_password'];
		
		$change_pwd			=	"select *from user_table where user_id = '$user_id'";
		/*echo $change_pwd;
		die;*/
		$result				=	mysqli_query($mysqli,$change_pwd);
		$change_pwd1		=	mysqli_fetch_assoc($result);
		
		$data_pwd			=	$change_pwd1['user_password'];
		
		if($data_pwd == $old_password)
		{
			if($new_password == $con_password)
			{
				$update_pwd	=	"update user_table set user_password = '$new_password' where user_id = '$user_id'";
				$result1	=	mysqli_query($mysqli,$update_pwd);
				$_SESSION['msg']	=	"<span style='color:green'>U r password successfully changed.</span>";
			}
			else
			{
				$_SESSION['msg']	=	"<span style='color:red;'>U r new password and confirm password does not match</span>";
			}
		}
		else
		{
			$_SESSION['msg']	=	"<span style='color:red'>U r old password is wrong!</span>";
		}
	}
?>