<?php
	include "include/header.php";
?>

		<!-- SECTION ABOUT START ======================================================= -->
		<section class="about" id="about">
			<div class="container">
				<div class="path d-flex">
					<a href="index.php">HOME</a>/
					<a href="about.php" class="abc">ABOUT US</a>
				</div>
				<header class="text-center mb-4 pb-3">
					<h2><a href="about.php">ABOUT US</a><span class="headline"></span></h2>
				</header>
				<div>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with ake a type specimen book. It has survived not only five centuries, but also the leap.</p>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remai sheets containing 1960s with the release of Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoof type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remai containing 1960s with the release of Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</section>
		<!-- SECTION ABOUT END ========================================================================= -->

		<!-- SECTION TESTIMONIAL START ======================================================= -->
		<section class="testimonial push" id="testimonial">
			<div class="container">
				<header class="text-center mb-4 pb-3">
					<h2><a href="#">TESTIMONIAL</a><span class="headline"></span></h2>
				</header>
				<div class="row">
					<div class="owl-carousel owl-theme">
							<?php
								$qry = "select *from testimonial";
								$result = mysqli_query($mysqli,$qry);
								while($row = mysqli_fetch_assoc($result))
								{
							?>
						<div class="item text-center">
							<img src="admin/images/<?php echo $row['testimonial_image'] ?>" class="img-fluid">	
							<div class="person">
								<h4><a href="product.php"><?php echo $row['testimonial_name']; ?></a></h4>
								<p><i class="fa fa-quote-left"></i>
									<?php echo $row['testimonial_message']; ?>
								<span><?php echo $row['testimonial_name']; ?></span><i class="fa fa-quote-right"></i></p>
							</div>
						</div>
							<?php
								}
							?>
					</div>
				</div>
			</div>
		</section>
		<!-- SECTION TESTIMONIAL END ========================================================================= -->

<?php
	include "include/footer.php";
?>