<?php
	include "include/header.php";

	if(isset($_GET['sid']))
	{
		$id      = $_GET['sid'];
		$qry     = "select *from products where subcategory_id = '$id'";
		$result  = mysqli_query($mysqli,$qry);
		$row     = mysqli_fetch_assoc($result);
	}
?>

		<!-- SECTION CATEGORY START ======================================================= -->
		<section class="category" id="category">
			<div class="container">
				<div class="path d-flex">
					<a href="index.php">HOME</a>/
					<a href="category.php" class="abc">CATEGORY</a> /
					<a href="subcategory.php?pid=<?php echo $_GET['pid'] ?>" class="abc">SUB CATEGORY</a> /
                    <a href="" class="abc"> PRODUCTS </a>
				</div>
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">PRODUCTS</a><span class="headline"></span></h2>
				</header>
				<div class="row">
                        <?php
								$qry = "select *from products where subcategory_id = '$id'";
								
								$result = mysqli_query($mysqli,$qry);
								while($row = mysqli_fetch_assoc($result))
								{
						?>		
					<div class="col-lg-4 col-md-6 col-sm-12 text-center sub-box">
						<a href="product.php?pid=<?php echo $row['product_id']; ?>"><img src="admin/images/<?php echo $row['product_image'] ?>" class="img-fluid" style="width:100px;">
						<span>
							<?php echo $row['product_name']; ?>
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