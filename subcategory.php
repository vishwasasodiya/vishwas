<?php
	include "include/header.php";

	if(isset($_GET['pid']))
	{
		$id = $_GET['pid'];
		$qry = "select *from category where cat_id = '$id'";
		$result = mysqli_query($mysqli,$qry);
		$row = mysqli_fetch_assoc($result);
	}
?>

		<!-- SECTION CATEGORY START ======================================================= -->
		<section class="category" id="category">
			<div class="container">
				<div class="path d-flex">
					<a href="index.php">HOME</a>/
					<a href="category.php" class="abc">CATEGORY</a> /
					<a href="subcategory.php" class="abc">SUB CATEGORY</a> /
					<a href="" class="abc"> </a>
				</div>
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">SUB CATEGORY</a><span class="headline"></span></h2>
				</header>
				<div class="row">
						<?php
								$qry = "select *from subcategory where cat_id = '$id'";
								
								$result = mysqli_query($mysqli,$qry);
								while($row = mysqli_fetch_assoc($result))
								{
						?>				
					<div class="col-lg-4 col-md-6 col-sm-12 text-center sub-box">
						<a href="sub_product.php?sid=<?php echo $row['subcategory_id']; ?>&pid=<?php echo $_GET['pid'] ?>"><img src="admin/images/<?php echo $row['image']; ?>" class="img-fluid" style="width:100px;">
						<span>
							<?php echo $row['subcategory_name']; ?>
						</span></a>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		<!-- SECTION CATEGORY END ========================================================================= -->

<?php
	include "include/footer.php";
?>