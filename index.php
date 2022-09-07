<?php
include 'menu-navbar.html';
require 'admin/root/connect.php';

?>


<section class="hero-wrap">
	<div class="home-slider owl-carousel js-fullheight">
		<div class="slider-item js-fullheight" style="background-image:url(images/banner.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate">
						<div class="text w-100 mt-5 text-center">
							<span class="subheading">Vinegar Food Restaurant</h2></span>
							<h1>Cooking Since</h1>
							<span class="subheading-2">1958</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate">
						<div class="text w-100 mt-5 text-center">
							<span class="subheading">Vinegar Food Restaurant</h2></span>
							<h1>Cooking Since</h1>
							<span class="subheading-2">1958</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate">
						<div class="text w-100 mt-5 text-center">
							<span class="subheading">Vinegar Food Restaurant</h2></span>
							<h1>Best Quality</h1>
							<span class="subheading-2 sub">Food</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
				<form method="post" action="admin/booking/process_booking.php" class="appointment-form"  enctype="multipart/form-data">
					<h3 class="mb-3">Book your Table</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input name="name" type="name" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input name="phone" type="text" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-calendar"></span></div>
									<input name="check_in" type="text" class="form-control book_date" placeholder="Check-In">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-clock-o"></span></div>
									<input name="time" type="text" class="form-control book_time" placeholder="Time">
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
				<div class="row pb-5 pb-md-0">
					<div class="col-md-12 col-lg-7">
						<div class="heading-section mt-5 mb-4">
							<div class="pl-lg-3 ml-md-5">
								<span class="subheading">About</span>
								<h2 class="mb-4">Welcome to Vinegar Food</h2>
							</div>
						</div>
						<div class="pl-lg-3 ml-md-5">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique illo voluptatum molestiae, natus aperiam deserunt suscipit tenetur! Asperiores velit eius doloribus tempora, repudiandae voluptatum dolor blanditiis ipsam ullam quam consectetur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<span>Now Booking</span>
				<h2>Private Dinners &amp; Happy Hours</h2>
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
					ORDER BY RAND ( )  
					LIMIT 3
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
							<p><span><?php echo $each['description'] ?></span></p>
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

<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-2">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Testimony</span>
				<h2 class="mb-4">Happy Customer</h2>
			</div>
		</div>
		<div class="row ftco-animate justify-content-center">
			<div class="col-md-7">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<div class="item">
						<div class="testimony-wrap text-center">
							<div class="text p-3">
								<p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga esse ipsum id sed quasi commodi? Aperiam, omnis repudiandae, sed tenetur placeat velit ipsa ab pariatur et quas facere provident atque.</p>
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<p class="name">John Gustavo</p>
								<span class="position">Customer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center">
							<div class="text p-3">
								<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius minima, ipsa rem accusantium quod, quisquam sed natus iusto laborum ea sequi deleniti vero eveniet ad? In vel mollitia aut omnis.</p>
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<p class="name">John Gustavo</p>
								<span class="position">Customer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center">
							<div class="text p-3">
								<p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia laboriosam commodi dignissimos, odio reiciendis quisquam dolorem quos, autem ipsa odit, in nesciunt. A, eligendi quo voluptatem nihil numquam quidem. Odit!</p>
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<p class="name">John Gustavo</p>
								<span class="position">Customer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center">
							<div class="text p-3">
								<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, pariatur, alias excepturi magnam earum placeat doloremque iure impedit exercitationem necessitatibus tempore ipsum quidem animi, veritatis modi eveniet numquam fuga cum!</p>
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<p class="name">John Gustavo</p>
								<span class="position">Customer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap text-center">
							<div class="text p-3">
								<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, laudantium temporibus, mollitia sit praesentium rem, quos molestiae numquam minus fugit eligendi iste nesciunt voluptatem unde cumque id ab pariatur voluptates.</p>
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<p class="name">John Gustavo</p>
								<span class="position">Customer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Chef</span>
				<h2 class="mb-4">Our Master Chef</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$sql = "select 
			*
			from chef
			
			";
			$result = mysqli_query($conn, $sql);
			foreach ($result as  $each) {
			?>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img" style="background-image: url(admin/chef/photos/<?php echo $each['photo']; ?>);"></div>
					<div class="text px-4 pt-2">
						<h3><?php echo $each['name']; ?></h3>
						<span class="position mb-2"><?php echo $each['role']; ?></span>
						<div class="faded">
							<p><?php echo $each['description']; ?></p>
							<ul class="ftco-social d-flex">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex">
				<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
				<div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
			</div>
			<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
				<div class="heading-section ftco-animate mb-5">
					<span class="subheading">This is our secrets</span>
					<h2 class="mb-4">Perfect Ingredients</h2>
					<p>Deserunt fugiat aliquip reprehenderit pariatur. Enim reprehenderit duis mollit officia nulla exercitation laboris ipsum id. Officia dolor et magna culpa laboris do aliqua eiusmod commodo culpa qui cillum.
					</p>
					<p><a href="#" class="btn btn-primary">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Blog</span>
				<h2 class="mb-4">Recent Blog</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text px-4 pt-3 pb-4">
						<div class="meta">
							<div><a href="#">August 3, 2020</a></div>
							<div><a href="#">Admin</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
								blind texts</a></h3>
						<p class="clearfix">
							<a href="#" class="float-left read btn btn-primary">Read more</a>
							<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text px-4 pt-3 pb-4">
						<div class="meta">
							<div><a href="#">August 3, 2020</a></div>
							<div><a href="#">Admin</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
								blind texts</a></h3>
						<p class="clearfix">
							<a href="#" class="float-left read btn btn-primary">Read more</a>
							<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text px-4 pt-3 pb-4">
						<div class="meta">
							<div><a href="#">August 3, 2020</a></div>
							<div><a href="#">Admin</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
								blind texts</a></h3>
						<p class="clearfix">
							<a href="#" class="float-left read btn btn-primary">Read more</a>
							<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
	<div class="container py-5">
		<div class="row py-2">
			<div class="col-md-12 text-center">
				<h2>We Make Delicious &amp; Nutritious Food</h2>
				<a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
			</div>
		</div>
	</div>
</section>

<?php
include 'footer.php';
?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>


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