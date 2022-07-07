<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- =============== FOOTER SECTION HTML CODE START ================== -->
<!-- <div class="container-fluid bg-secondary">
	<div class="main_footer_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="">
						<h2 class="text-center">About Us</h2>
						<ul>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<div class="">
						<h2 class="text-center">About Us</h2>
						<ul>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<div class="">
						<h2 class="text-center">About Us</h2>
						<ul>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<div class="">
						<h2 class="text-center">About Us</h2>
						<ul>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
							<li class="nav-links">Home</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="container-fluid main_footer_section">
	<div class="container text-white ">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class=" footer_links">
					<h1>IMPORTANTS LINKS</h1>
					<div class="text-center">
						<a class="text-white nav-link" href="">ABOUT </a>
						<a class="text-white nav-link" href="">CONTACT </a>
						<a class="text-white nav-link" href="">PRIVACY POLICIES </a>
						<a class="text-white nav-link" href="">TERMS & CONDITIONS </a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="row mb-4">
					<div class="col-lg-2 col-md-2 col-2">
						<div class="location">
							<i class="fas fa-map-marker-alt"></i>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-10">
						<p>Kailabad , Gazole , Malda</p>

					</div>
				</div>
				<div class="row mb-4">
					<div class="col-lg-2 col-md-2 col-2">
						<div class="location">
							<i class="fa fa-phone"></i>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-10">
						<p>+91 8167874215</p>
					</div>
				</div>
				<div class="row mb-4">
					<div class="col-lg-2 col-md-2 col-2">
						<div class="location">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-10">
						<p>pijush.gazole369@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="footer_about">
					<h1>SPM CREATIVE</h1>
					<p>Some quick example text to build on the card title card's content</p>
					<div class="social_media text-center">
						<a href="" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
						<a href="" target="_blank"><i class="fa fa-2x fa-youtube"></i></a>
						<a href="" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
						<a href="" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mt-5">
		<p class="text-center text-white">&#169; SPM CREATIVE All Right Reserved . Design And Develope By Pijush Kanti Mandal.</p>
	</div>
</div>
<!-- =============== FOOTER SECTION HTML CODE END ================== -->

<script src="<?php echo URL; ?>assets/js/jquery/jquery.min.js"></script>
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