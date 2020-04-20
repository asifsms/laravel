<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hikester</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Wanderer a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps -->

	<!-- Custom-Stylesheet-Links -->
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
	<!-- Flexslider-CSS -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all">
	<!-- Popup-Box-CSS -->
	<link rel="stylesheet" href="{{ asset('css/chocolat.css') }}" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->

	<!-- Web-Fonts -->
	<!-- Body-Font -->
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' type='text/css'>
	<!-- Logo-Font -->
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Sigmar+One' type='text/css'>
	<!-- Navbar-Links-Font -->
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway:400,500,600' type='text/css'>
	<!-- //Web-Fonts -->
</head>
<body>
    <!-- Header -->
	<div class="header" id="home">

		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home.index') }}">Hikester</a>


				</div>
				<div class="collapse navbar-collapse navbar-right" id="navbar">
					<div class="top-nav">

						<a href="#about" class="hover-effect scroll">
							<span>
								<span>ABOUT</span>
								<span>ABOUT</span>
								<span></span>
							</span>
						</a>

						<a href="#services" class="hover-effect scroll">
							<span>
								<span>SERVICES</span>
								<span>SERVICES</span>
								<span></span>
							</span>
						</a>



						<a href="#gallery" class="hover-effect scroll">
							<span>
								<span>GALLERY</span>
								<span>GALLERY</span>
								<span></span>
							</span>
						</a>
						
							
						<a class="hover-effect scroll" href="{{ route('blogger') }}">
							<span>
								<span>{{ __('LOGIN') }}</span>
								<span>{{ __('LOGIN') }}</span>
								<span></span>
							</span>
								
						</a>
						
					</div>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider1">
				<li>
					<img src="{{ asset('images/slide-1.jpg') }}" alt="Hikester">
					<div class="caption">
						<h3>Explore the unexplored territories</h3>
					</div>
				</li>
				<li>
					<img src="{{ asset('images/slide-2.jpg') }}" alt="Hikester">
					<div class="caption">
						<h3>Feel the love of the nature</h3>
					</div>
				</li>
				<li>
					<img src="{{ asset('images/slide3.jpg') }}" alt="Hikester">
					<div class="caption">
						<h3>Away from the concrete jungles</h3>
					</div>
				</li>
				<li>
					<img src="{{ asset('images/MG_3641.jpg') }}" alt="Hikester">
					<div class="caption">
						<h3>Achieve nirvana and inner peace</h3>
					</div>
				</li>
				<li>
					<img src="{{ asset('images/slide-5.jpg') }}" alt="Wanderer">
					<div class="caption">
						<h3>Get lost in the wonders of the nature</h3>
					</div>
				</li>
			</ul>
		</div>
		<!-- //Slider -->
	</div>
    <!-- //Header -->

    
    @yield('content')

    
    <!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="copyright">
				<p>hikester</a></p>
			</div>

		</div>
	</div>
	<!-- //Footer -->



	<!-- Custom-JavaScript-File-Links -->

	<!-- Supportive-JavaScript -->
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Necessary-JS-File-For-Bootstrap -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- Banner-Slider-JavaScript -->
	<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
	<script>
		$(function () {
			$("#slider1").responsiveSlides({
				auto: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Banner-Slider-JavaScript -->

	<!-- Popup-Box-JavaScript -->
	<script src="{{ asset('js/modernizr.custom.97074.js') }}"></script>
	<script src="{{ asset('js/jquery.chocolat.js') }}"></script>
	<script type="text/javascript">
		$(function () {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function () {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- FlexSlider-JavaScript -->
	<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(function () {
			SyntaxHighlighter.all();
		});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //FlexSlider-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

</body>
</html>