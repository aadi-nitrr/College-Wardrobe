<?php
	include("config.php");
	$con=connectDb();
	$query="SELECT * FROM `pagelinks` WHERE `status`=1";
	$res=mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>College Wardrobe</title>
		<!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<link rel="stylesheet" href="assets/css/index.css">
		<link rel="icon" href="assets/img/favicon.ico" type="favicon.ico">
		<script src="https://kit.fontawesome.com/b6268b25c7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	</head>

	<body>

		<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-transparent py-0">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="assets/img/c_logo.jpg" class="me-3" />NITRR Wardrobe</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse me-auto" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Clubs
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
									if($res!=false && mysqli_num_rows($res)!=0)
									{
										while($row=mysqli_fetch_assoc($res))
										{
								?>
								<li><a class="dropdown-item" href="<?= $row['url'] ?>"><?= $row['name'] ?></a></li>
								<?php }} ?>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- banner-area -->
		<div class="banner-area">
			<div class="content-area">
				<div class="content">
					<h1>NITRR Wardrobe</h1>
					<p>We Will Serve,We will Grow</p>
				</div>
			</div>
		</div>
		<!-- banner-area -->


		<!-- login begin-->
		<section id="login">
			<div class="container mt-5" id="container">
				<div class="form-container sign-up-container mt-2">
					<form action="#">
						<h1 class="font-weight-bold">Create Account</h1>
						<div class="social-container">
							<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<input type="text" placeholder="Name" />
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<button class="btn btn-info btn-rounded">Sign up</button>
					</form>
				</div>

				<div class="form-container sign-in-container">
					<form action="#">
						<h1 class="font-weight-bold">Sign in</h1>
						<div class="social-container">
							<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<span>or use your account</span>
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<button class="btn btn-info btn-rounded ">Sign In</button>
					</form>
				</div>

				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1 class="font-weight-bold">Good to see you!</h1>
							<p>You already have an account? <br>Sign in!</p>
							<button class="but" id="signIn">Sign In</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1 class="font-weight-bold">Welcome to Wardrobe of NITRR</h1>
							<p>You don't have account yet? Don't worry! You still can join us</p>
							<button class="but" id="signUp">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--login end-->

		<!-- Birthday -->
		<section class="" id="birthday">
			<div class="birthday container-fluid px-5 py-4">
				<h1>Happy Birthday🎂 Guys</h1>
				<p>May all your dreams and wishes comes true😊</p>
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="assets/img/pic.jpg" alt="">
						<p class="fw-bolder">Shekhu</p>
					</div>
					<div class="item">
						<img src="assets/img/pic1.jpg" alt="">
						<p class="fw-bolder">Aadi</p>
					</div>
					<div class="item">
						<img src="assets/img/pic2.jpg" alt="">
						<p class="fw-bolder">Gill</p>
					</div>
					<div class="item">
						<img src="assets/img/pic3.jpg" alt="">
						<p class="fw-bolder">David</p>
					</div>
					<div class="item">
						<img src="assets/img/pic4.jpg" alt="">
						<p class="fw-bolder">Potter</p>
					</div>
					<div class="item">
						<img src="assets/img/pic5.jpg" alt="">
						<p class="fw-bolder">Shibu</p>
					</div>
					<div class="item">
						<img src="assets/img/pic6.jpg" alt="">
						<p class="fw-bolder">Shanu</p>
					</div>
					<div class="item">
						<img src="assets/img/pic7.jpeg" alt="">
						<p class="fw-bolder">Anki</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Birthday -->

		<!-- <section class="wrapper1" id="contact">
			<div class="connect">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-md-9">
						<div class="contact-us text-center">
							<h1>Contact Us</h1>
							<p class="mb-5">We will serve!We will grow! </p>
							<div class="row">
								<div class="col-md-6">
									<div class="mt-5 text-center px-3">
										<div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
											<div class="address text-left"> <span>facebook</span>
												<p>nitrr_wardrobe</p>
											</div>
										</div>
										<div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
											<div class="address text-left"> <span>Instagram</span>
												<p>nitrr_wardrobe</p>
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
											<div class="address text-left"> <span>email</span>
												<p>nitrr_wardrobe@gmail.com</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="text-center px-1">
										<div class="forms p-4 py-5 bg-white">
											<h5>Send Message</h5>
											<div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
												<div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section id="contact2">
			<div class="container py-5">
				<div class="text-center w-100 text-white fw-bolder">
					<h1>Contact Us</h1>
					<span>We Serve, We Grow</span>
				</div>
				<div class="row mt-5">
					<div class="col-sm-6">
						<div class="my-5 text-center px-3">
							<div class="d-flex flex-row"> <span class="icons"><i class="fa fa-facebook-f"></i></span>
								<div class="address text-left"> 
									<span>Facebook</span>
									<p><a href="#">nitrr_wardrobe</a></p>
								</div>
							</div>
							<div class="d-flex flex-row mt-3"> <span class="icons"><i class="fa fa-instagram"></i></span>
								<div class="address text-left"> 
									<span>Instagram</span>
									<p><a href="#">nitrr_wardrobe</a></p>
								</div>
							</div>
							<div class="d-flex flex-row mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
								<div class="address text-left"> 
									<span>email</span>
									<p><a href="#">nitrr_wardrobe@gmail.com</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="text-center px-1">
							<div class="forms p-4 py-5 bg-white">
								<h5>Send Message</h5>
								<div class="mt-4 inputs"> 
									<input type="text" class="form-control" placeholder="Name" /> 
									<input type="email" class="form-control" placeholder="Email" /> 
									<input type="tel" class="form-control" placeholder="Phone No." /> 
									<textarea class="form-control" placeholder="Type your message"></textarea> 
								</div>
								<div class="button mt-4 text-left"> 
									<button class="btn btn-dark">Send</button> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    	<!--Contact us end-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>
