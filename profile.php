<?php
	include "include/header.php";
?>

<html>
	<head>
		<style>
			table {
				margin-top: 20px;
				margin-bottom: 20px;
			}
			
			img {
				border-radius: 50%;
			}
		</style>
	</head>
	
	<body>
		<center>
		<table>
			<?php
				$user_id	=	$_SESSION['customer'];
				$qry	= "select *from user_table where user_id = '$user_id'";
				$result = mysqli_query($mysqli,$qry);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td id="image"><center><img src="images/<?php echo $row['user_image']; ?>" /></center></td>
			</tr>
			<tr>
				<td class="name"><center><?php echo $row['user_name']; ?></center></td>
			</tr>
			<tr>
				<td class="email"><center><?php echo $row['user_email']; ?></center></td>
			</tr>
			<tr>
				<td class="password"><center><?php echo $row['user_password']; ?></center></td>
			</tr>
		</table>
		</center>
	</body>
</html>

<?php
	include "include/footer.php";
?>