<?php
	include "include/header.php";	
	include "product-db.php";

	if(isset($_GET['pid']))
	{
		$id = $_GET['pid'];
		$qry = "select *from products where product_id = '$id'";
		$result = mysqli_query($mysqli,$qry);
		$row = mysqli_fetch_assoc($result);
	}
	else
	{
		$qry = "select *from products";
		$result = mysqli_query($mysqli,$qry);
		$row = mysqli_fetch_assoc($result);
	}
?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<!-- SECTION PRODUCT START ======================================================= -->
		<form method="post">
			<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
		<section class="product-page" id="product-page">
			<div class="container">
				<div class="path d-flex">
					<a href="index.php">HOME</a>/
					<a href="about.php" class="abc">PRODUCT</a>
				</div>
				<header class="text-center mb-4 pb-3">
					<h2><a href="product.php">OUR PRODUCT</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 theme-cactus">
						<div class="ui-tabgroup left-side">
							<input class="ui-tab1" type="radio" id="tgroup_c2_tab1" name="tgroup_c2" checked />
							<input class="ui-tab2" type="radio" id="tgroup_c2_tab2" name="tgroup_c2" />
							<input class="ui-tab3" type="radio" id="tgroup_c2_tab3" name="tgroup_c2" />
							<input class="ui-tab4" type="radio" id="tgroup_c2_tab4" name="tgroup_c2" />
							<input class="ui-tab5" type="radio" id="tgroup_c2_tab5" name="tgroup_c2" />
							
							<div class="ui-tabs product-img">
								<label class="ui-tab1" for="tgroup_c2_tab1"><img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid d-block" alt=""></label>
								<label class="ui-tab2" for="tgroup_c2_tab2"><img src="admin/images/<?php echo $row['product_image2']; ?>" class="img-fluid d-block" alt=""></label>
								<label class="ui-tab3" for="tgroup_c2_tab3"><img src="admin/images/<?php echo $row['product_image3']; ?>" class="img-fluid d-block" alt=""></label>
								<label class="ui-tab4" for="tgroup_c2_tab4"><img src="admin/images/<?php echo $row['product_image4']; ?>" class="img-fluid d-block" alt=""></label>
								<label class="ui-tab5" for="tgroup_c2_tab5"><img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid d-block" alt=""></label>
							</div>
							
							<div class="ui-panels main-product">
								<div class="ui-tab1">
									<img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid d-block" name="product_image" alt="" style="width:auto;">
								</div>
								
								<div class="ui-tab2">
									<img src="admin/images/<?php echo $row['product_image2']; ?>" class="img-fluid d-block" alt="" style="width:auto;">
								</div>
								
								<div class="ui-tab3">
									<img src="admin/images/<?php echo $row['product_image3']; ?>" class="img-fluid d-block" alt="" style="width:auto;">
								</div>
								
								<div class="ui-tab4">
									<img src="admin/images/<?php echo $row['product_image4']; ?>" class="img-fluid d-block" alt="" style="width:auto;">
								</div>
								
								<div class="ui-tab5">
									<img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid d-block" alt="" style="width:auto;">
								</div>
								<?php echo $row['product_name']; ?>
							</div>
						</div>

					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="product-info">
							<header>
								<h2 class="fromLeft" name="product_name"><a href="#"><?php echo $row['product_name']; ?></a></h2>
							</header>
							<div class="d-flex">
								<ul>
									<li class="d-inline-block fa fa-star"></li>
									<li class="d-inline-block fa fa-star"></li>
									<li class="d-inline-block fa fa-star"></li>
									<li class="d-inline-block fa fa-star"></li>
									<li class="d-inline-block fa fa-star"></li>
								</ul>
								<span>(3) Review</span>
							</div>
							<p><span>Availability: <b>Out of stock</b></span></p>
							<p><?php echo $row['product_description1']; ?></p>
							<div class="overview">
								<header>
									<h4>QUICK OVERVIEW</h4>
								</header>
								<ol class="m-0 pl-3">
									<?php echo $row['product_overview']; ?>
								</ol>
							</div>
							<div class="price" name="product_price">
								<p><?php echo $row['product_price']; ?><span>(inc GST)</span></p>
								<span>$ 381.36 (+18% GST extra)</span>
							</div>
							<div class="d-flex mt-2">
								<div class="product-atc">
									<div class="quantity-down">-</div>
								    <input id="val" type="text" name="product_quantity" value="1">
								    <div class="quantity-up">+</div>      
								</div>
									
									<button type="submit" name="add_cart" class="btn cart">ADD TO CART</button>
									
									<a href="view_cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- SECTION PRODUCT END ========================================================================= -->

		<!-- SECTION DESCRIPTION START ======================================================= -->
		<section class="description push" id="description">
			<div class="container">
				<div>
					<p><?php echo $row['product_description2']; ?></p>
				</div>
			</div>
		</section>
		<div>
			<input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>" />
			<input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>" />
			<input type="hidden" name="product_description1" value="<?php echo $row['product_description1']; ?>" />
			<input type="hidden" name="product_overview" value="<?php echo $row['product_overview']; ?>" />
			<input type="hidden" name="product_description2" value="<?php echo $row['product_description2']; ?>" />
			<input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>" />
			<input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" />
		</div>
		<!-- SECTION DESCRIPTION END ========================================================================= -->

		<!-- SECTION PRODUCT START ======================================================= -->
		<section class="product push" id="product">
			<div class="container">
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">OUR PRODUCT</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<div class="owl-carousel owl-theme">
						<?php
							$qry1 = "select *from products";
							$result1 = mysqli_query($mysqli,$qry1);
							$rows = mysqli_fetch_assoc($result);
						?>
						<div class="item text-center">
							<a href="product.php"><img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid"><span>PRODUCT 1</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="admin/images/<?php echo $row['product_image2']; ?>" class="img-fluid"><span>PRODUCT 2</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="admin/images/<?php echo $row['product_image3']; ?>" class="img-fluid"><span>PRODUCT 3</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="admin/images/<?php echo $row['product_image4']; ?>" class="img-fluid"><span>PRODUCT 4</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/225" class="img-fluid"><span>PRODUCT 5</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/226" class="img-fluid"><span>PRODUCT 6</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/227" class="img-fluid"><span>PRODUCT 7</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/228" class="img-fluid"><span>PRODUCT 8</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/229" class="img-fluid"><span>PRODUCT 9</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/230" class="img-fluid"><span>PRODUCT 10</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/231" class="img-fluid"><span>PRODUCT 11</span></a>
						</div>
						<div class="item text-center">
							<a href="product.php"><img src="https://picsum.photos/277/232" class="img-fluid"><span>PRODUCT 12</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		</form>
		<!-- SECTION PRODUCT END ========================================================================= -->

<?php
	include "include/footer.php";
?>