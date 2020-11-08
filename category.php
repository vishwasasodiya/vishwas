<?php
	include "include/header.php";
?>

		<!-- SECTION CATEGORY START ======================================================= -->
		<section class="category" id="category">
			<div class="container">
				<div class="path d-flex">
					<a href="index.php">HOME</a>/
					<a href="category.php" class="abc">CATEGORY</a> /
					<a href="subcategory.php" class="abc"> </a>
					<a href="sub_product.php" class="abc"> </a>
				</div>
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">CATEGORY</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<?php
						$qry = "select *from category";
						$result = mysqli_query($mysqli,$qry);
						while($row = mysqli_fetch_assoc($result))
						{
					?>
					
					<div class="col-lg-4 col-md-6 col-sm-12 text-center sub-box">
						<a href="subcategory.php?pid=<?php echo $row['cat_id']; ?>">
						<img src="admin/images/<?php echo $row['cat_image']; ?>" class="img-fluid" style="width:100px;">
						<span>
							<?php echo $row['cat_name']; ?>
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