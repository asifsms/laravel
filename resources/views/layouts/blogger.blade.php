<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hikester-Blog</title>
	{{--  <link rel="icon" href="img/Fevicon.png" type="image/png">  --}}
  <link rel="stylesheet" href="{{ asset('css/bloggs/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bloggs/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bloggs/vendors/themify-icons/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bloggs/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bloggs/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bloggs/vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bloggs/css/style.css') }}">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a href="{{ route('home.index') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Hikester" style="height: 40px;margin-right: 5px">
          </a>
          <h4>Hikester Community</h4>
          {{--  <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('images/bloggs/img/logo.png') }}" alt=""></a>  --}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="{{ route('blogger') }}">Home</a></li>
              
              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item active"><a class="nav-link" href="blog.html">Blog Single</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                 
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            
          </div>
          
          <div>
            <ul class="nav-shop ml-auto mr-auto">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-bell"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item dropdown submenu"><a class="button button-header dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{ $aaa->name }}</a>
                <ul class="dropdown-menu">
                  <li class="nav-item" style="padding-left: 39px"><a class="dropdown-item" href="register.html">Profile</a></li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('blogger.logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>

                 <form id="logout-form" action="{{ route('blogger.logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form></li>
                  
                  
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->


  {{--  <!-- ================ start banner area ================= -->	
  <section class="blog-banner-area" id="blog">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center">
          <h1>Our Blog</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ end banner area ================= -->  --}}


  <!--================Blog Categorie Area =================-->
  
  


  @yield('bloggs')

  <!--================Instagram Area =================-->
  <section class="instagram_area">
    <div class="container box_1620">
      <div class="insta_btn">
        <a class="btn theme_btn" href="https://www.instagram.com/hikester___/">Follow us on instagram</a>
      </div>
      <div class="instagram_image row m0">
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-1.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-2.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-3.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-4.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-5.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ asset('images/bloggs/img/instagram/ins-6.jpg') }}" alt=""></a>
      </div>
    </div>
  </section>
  <!--================End Instagram Area =================-->
  

  <!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area" style="padding-bottom: 20px">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<img src="{{ asset('images/logo.jpg') }}" alt="Hikester" style="height: 150px;margin-top: 30px">
							
						</div>
					</div>
          <div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
              <h4 class="footer_title">Gallery</h4>
              <a href=""><ul class="list instafeed d-flex flex-wrap">
								<li><img src="{{ asset('images/bloggs/img/gallery/r1.jpg') }}" alt=""></li>
								<li><img src="{{ asset('images/bloggs/img/gallery/r2.jpg') }}" alt=""></li>
								<li><img src="{{ asset('images/bloggs/img/gallery/r3.jpg') }}" alt=""></li>
								<li><img src="{{ asset('images/bloggs/img/gallery/r5.jpg') }}" alt=""></li>
								{{--  <li><img src="{{ asset('images/bloggs/img/gallery/r7.jpg') }}" alt=""></li>
								<li><img src="{{ asset('images/bloggs/img/gallery/r8.jpg') }}" alt=""></li>  --}}
							</ul></a>
							
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>Calicut, Kerala, India</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+91 9645 4424 46 <br>
									
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									hikesterlife@gmail.com <br>
									
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



  <script src="{{ asset('css/bloggs/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/skrollr.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('css/bloggs/vendors/mail-script.js') }}"></script>
  <script src="{{ asset('js/bloggs/js/main.js') }}"></script>
</body>
</html>