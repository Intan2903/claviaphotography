<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
	<link href="{{ asset('asset/csss/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/vegas.min.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/tooplate-barista.css') }}" rel="stylesheet">
</head>

<body>

	<main>
	
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand d-flex align-items-center" href="/">
					<img src="image/logoo.jpeg " class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
					Clavia Photography
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-lg-auto">
						<li class="nav-item">
							<a class="nav-link click-scroll" href="#section_1">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link click-scroll" href="#section_2">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

			<div class="container">
				<div class="row align-items-center">

					<div class="col-lg-6 col-12 mx-auto">
						<em class="small-text">welcome to </em>
						<h1>Clavia Photography</h1>
						<p class="text-white mb-4 pb-lg-2">your <em>favourite</em> coffee daily lives.</p>
						<a class="btn custom-btn smoothscroll me-2 mb-2"  href="{{ route('auth.login') }}"><strong>Login First</strong></a>
						{{-- <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="{{ route('auth.register') }}">Registrasi</a> --}}
					</div>

				</div>
			</div>

			<div class="hero-slides"></div>
		</section>


		<section class="about-section section-padding" id="section_2">
			<div class="section-overlay"></div>
			<div class="container">
				<div class="row align-items-center">

					<div class="col-lg-6 col-12">
						<div class="ratio ratio-1x1">
							<video autoplay="" loop="" muted="" class="custom-video" poster="">
								<source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

								Your browser does not support the video tag.
							</video>

							<div class="about-video-info d-flex flex-column">
								<h4 class="mt-auto">We Started Since 2009.</h4>

								<h4>Best Cafe in Klang.</h4>
							</div>
						</div>
					</div>

					<div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
						<em class="text-white">Barista.co</em>

						<h2 class="text-white mb-3">Cafe KL</h2>

						<p class="text-white">The café had been in the town for as long as anyone could remember, and it
							had become a beloved institution among the locals.</p>

						<p class="text-white">The café was run by a friendly and hospitable couple, Mr. and Mrs.
							Johnson. Barista Cafe is free Bootstrap 5 HTML layout provided by <a rel="nofollow"
								href="https://www.tooplate.com" target="_blank">Tooplate</a>.</p>

						<a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet
							Baristas</a>
					</div>

				</div>
			</div>
		</section>


		<footer class="site-footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-12 me-auto">
						<em class="text-white d-block mb-4">Where to find us?</em>

						<strong class="text-white">
							<i class="bi-geo-alt me-2"></i>
							Bandra West, Mumbai, Maharashtra 400050, India
						</strong>

						<ul class="social-icon mt-4">
							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-facebook">
								</a>
							</li>

							<li class="social-icon-item">
								<a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
								</a>
							</li>

							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-whatsapp">
								</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
						<em class="text-white d-block mb-4">Contact</em>

						<p class="d-flex mb-1">
							<strong class="me-2">Phone:</strong>
							<a href="tel: 305-240-9671" class="site-footer-link">
								(65)
								305 2409 671
							</a>
						</p>

						<p class="d-flex">
							<strong class="me-2">Email:</strong>

							<a href="mailto:info@yourgmail.com" class="site-footer-link">
								hello@barista.co
							</a>
						</p>
					</div>


					<div class="col-lg-5 col-12">
						<em class="text-white d-block mb-4">Opening Hours.</em>

						<ul class="opening-hours-list">
							<li class="d-flex">
								Monday - Friday
								<span class="underline"></span>

								<strong>9:00 - 18:00</strong>
							</li>

							<li class="d-flex">
								Saturday
								<span class="underline"></span>

								<strong>11:00 - 16:30</strong>
							</li>

							<li class="d-flex">
								Sunday
								<span class="underline"></span>

								<strong>Closed</strong>
							</li>
						</ul>
					</div>

					<div class="col-lg-8 col-12 mt-4">
						<p class="copyright-text mb-0">Copyright © Barista Cafe 2048
							- Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a>
						</p>
					</div>
				</div>
		</footer>
	</main>

	<!-- Include Bootstrap JavaScript (JQuery and Popper.js) -->
	<script src="{{ asset('asset/jss/jquery.min.js') }}"></script>
	<script src="{{ asset('asset/jss/bootstrap.min.js') }}"></script>
	<script src="{{ asset('asset/jss/jquery.sticky.js') }}"></script>
	<script src="{{ asset('asset/jss/click-scroll.js') }}"></script>
	<script src="{{ asset('asset/jss/vegas.min.js') }}"></script>
	<script src="{{ asset('asset/jss/custom.js') }}"></script>
</body>

</html>
