<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- =============== FOOTER SECTION HTML CODE START ================== -->


<footer>
	<div class="footer_section ">
		<div class="container1 py-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="">
						<img src="<?php echo URL ?>uploads/home/digital_online1.jpg" class="img-fluid" alt="...">
						<p class="text-white my-4">A learning management system (LMS) is a software application or web-based technology used to plan, implement and assess a specific learning process.</p>
					</div>
					<div class="seconr_part">
						<h2 class="text-white">HEAD OFFICE</h2>
						<address class="text-white">
							<p class="address_line">125 Big fella St. Road, New York, Hi 5654775</p>
							<p class="address_line"> Phone: 326487652</p>
							<p class="address_line"> Email: example@mail.com</p>
							<p class="address_line"> Office Time: 9AM- 4PM</p>
						</address>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="">
						<h2 class="text-white">QUICK LINKS</h2>
						<div class="d-flex justify-content-between px-5">
							<div class="">
								<a class="nav-link text-white" href="">About us</a>
								<a class="nav-link text-white" href="">Our Services</a>
								<a class="nav-link text-white" href="">Case Studies</a>
								<a class="nav-link text-white" href="">Contact Us</a>
							</div>
							<div class="">
								<a class="nav-link text-white" href="">Testimonials</a>
								<a class="nav-link text-white" href="">Privacy Policy</a>
								<a class="nav-link text-white" href="">latest News</a>
							</div>
						</div>
					</div>
					<div class="second_part">
						<h2 class="text-white">NEWSLETTER</h2>
						<div class="footer_form_mess">
							<input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Email Address">
							<i class="fas fa-location-arrow"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="">
						<h2 class="text-white">RECENT POST</h2>
						<div class="d-flex justify-content-between mb-4">
							<div class="img_part  text-center">
								<img src="<?php echo URL ?>uploads/home/10026.jpg" class="img-fluid rounded-custome" alt="...">
							</div>
							<div class="img_part_description ">
								<a class="text-white blog_link_tag" href="">Revealed: How To Set Goals For You And Your Team</a>
								<span class="text-danger">Posted on: Jan 12, 2019</span>
							</div>
						</div>
						<div class="d-flex justify-content-between mb-4">
							<div class="img_part  text-center">
								<img src="<?php echo URL ?>uploads/home/10027.jpg" class="img-fluid rounded-custome" alt="...">
							</div>
							<div class="img_part_description ">
								<a class="text-white blog_link_tag" href="">Revealed: How To Set Goals For You And Your Team</a>
								<span class="text-danger">Posted on: Jan 12, 2019</span>
							</div>
						</div>
						<div class="d-flex justify-content-between mb-4">
							<div class="img_part  text-center">
								<img src="<?php echo URL ?>uploads/home/10028.jpg" class="img-fluid rounded-custome" alt="...">
							</div>
							<div class="img_part_description ">
								<a class="text-white blog_link_tag" href="">Revealed: How To Set Goals For You And Your Team</a>
								<span class="text-danger">Posted on: Jan 12, 2019</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="hr_style">
		<div class="container py-3">
			<div class="d-sm-block d-lg-flex  justify-content-between  pb-3">
				<div class="copyright_text ">Design And Developed By <i class="fas fa-heart"> </i> Pijush Kanti Mandal (SPM CREATIVE)</div>
				<div class="d-flex custome_link_style">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-instagram-square"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =============== FOOTER SECTION HTML CODE END ================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- slick carousel  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="<?php echo URL; ?>assets/js/jquery/jquery.min.js"></script> -->
<script src="https://kit.fontawesome.com/d7b43f4ee6.js" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
if (isset($this->js)) {
	foreach ($this->js as $js) {
		echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
	}
}
?>
</body>

</html>