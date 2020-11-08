<?php
	$page_title	=	"Home";
	include "include/header.php";
	
?>
<?php getmsg(); ?>
		<!-- SECTION BANNER START ======================================================= -->
		<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<section class="banner" id="banner">
			<div class="owl-carousel owl-theme">
				<?php
					$qry = "select *from home_slide_show";
					$result = mysqli_query($mysqli,$qry);
					while($row = mysqli_fetch_assoc($result))
					{
				?>
				<div class="item">
					<img src="admin/images/<?php echo $row['home_image']; ?>" class="img-fluid">
				</div>
				<?php
					}
				?>
			</div>
		</section>
		<!-- SECTION BANNER END ========================================================================= -->

		<!-- SECTION WELCOME START ======================================================= -->
		<section class="welcome push" id="welcome">
			<div class="container text-center">
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">WELCOME TO CAREER INFOWAY</a><span class="headline"></span></h2>
				</header>
				<p class="mt-4">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 1960s with the release of Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
		</section>
		<!-- SECTION WELCOME END ========================================================================= -->

		<!-- SECTION PRODUCT START ======================================================= -->
		<section class="product push" id="product">
			<div class="container">
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">OUR PRODUCT</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<div class="owl-carousel owl-theme">
					<?php
						$qry = "select *from products";
						$result = mysqli_query($mysqli,$qry);
						while($row = mysqli_fetch_assoc($result))
						{
					?>
						<div class="item text-center">
							<a href="product.php?pid=<?php echo $row['product_id']; ?>">
							<img src="admin/images/<?php echo $row['product_image']; ?>" class="img-fluid" style="width:auto;">
							<span><?php echo $row['product_name']; ?></span></a>
						</div>
					<?php
						}
					?>
					</div>
				</div>
			</div>
		</section>
		<!-- SECTION PRODUCT END ========================================================================= -->

		<!-- SECTION TESTIMONIAL START ======================================================= -->
		<section class="testimonial push" id="testimonial">
			<div class="container">
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">TESTIMONIAL</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<div class="owl-carousel owl-theme">

						<?php
							$qry1 = "select *from testimonial";
							$result1 = mysqli_query($mysqli,$qry1);
							while($rows = mysqli_fetch_assoc($result1))
							{
								if($rows['isactive'] == 1)
								{
						?>

						<div class="item text-center">
							<img src="admin/images/<?php echo $rows['testimonial_image']; ?>" class="img-fluid">
							
							<div class="person">
								<h4><a href="#">
								<?php 
									echo $rows['testimonial_name']; 
								?>
								</a></h4>
								
								<p><i class="fa fa-quote-left"></i>
								<?php
						
									echo $rows['testimonial_message']; 
								?>
								
								<span>
								- <?php
										echo $rows['testimonial_name']; 
								?>
									</span><i class="fa fa-quote-right"></i></p>
							
							</div>
						</div>
						<?php
								}
							}
						?>
					</div>
				</div>
				<form method="post">
					<input type="submit" name="like" value="Like" />
				</form>
			</div>
		</section>
		<!-- SECTION TESTIMONIAL END 
<?php
	include "include/footer.php";
?>