<?php
	include 'menu-navbar.html';
	require 'admin/root/connect.php';
?>
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Meal</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Meal <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Menu</h2>
				</div>
			</div>
			<div class="row">
			<?php
			$sql = "select 
			*
			from category
			
			";
			$result = mysqli_query($conn, $sql);
			foreach ($result as  $cat) {
			?>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3><?php echo $cat['name']; ?></h3>
						</div>
						<?php
					$name = $cat['name'];
					$sql = "select 
					meal.*,
					category.name as category_name
					from meal
					join category 
					on meal.category_id=category.id
					WHERE category.name = '$name'
					
					";
					
					$result = mysqli_query($conn, $sql);
					if (is_array($result) || is_object($result)){
					foreach ($result as $each)
					{
					?>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(admin/meal/photos/<?php echo $each['photo']; ?>);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $each['name']; ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $each['price']; ?></span>
									</div>
								</div>
								<p><span><?php echo $each['description']; ?></span></p>
							</div>
						</div>
						<?php
					}
					}
					?>
						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>
				<?php
			}
			?>
				
			</div>
		</div>

	</section>

	<section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form action="#" class="appointment-form">
						<h3 class="mb-3">Book your Table</h3>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<div class="form-group">
									<input type="name" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control book_date" placeholder="Check-In">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control book_time" placeholder="Time">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Guest</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>
												<option value="">4</option>
												<option value="">5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php
  include 'footer.php';
?>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	</html>