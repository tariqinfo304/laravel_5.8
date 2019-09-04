<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title','Home')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

@section("info")

	<div class="py-1 bg-primary">
		<div class="container">
		    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
		        <div class="col-lg-12 d-block">
		            <div class="row d-flex">
		                <div class="col-md pr-4 d-flex topper align-items-center">
		                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
		                    <span class="text">+ @yield("phone_no","default_value")</span>
		                </div>
		                <div class="col-md pr-4 d-flex topper align-items-center">
		                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
		                    <span class="text">@yield("email","default@gmail.com")</span>
		                </div>
		                <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
		                    <span class="text">@yield("address","default_address")</span>
		                </div>
		            </div>
		        </div>
		    </div>
		  </div>
	</div>
@show

<body class="goto-here">
  	
  	@section("nav-bar")

	  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">

		    	@if(!session("username"))
		    	
		    		<li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
		    	
		    	@else
		    	




		      <a class="navbar-brand" href="index.php">Vegefoods</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto">
		          	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
		          	<li class="nav-item active dropdown">
			              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
			              <div class="dropdown-menu" aria-labelledby="dropdown04">
			              	<a class="dropdown-item" href="shop.php">Shop</a>
			              	<a class="dropdown-item" href="wishlist.php">Wishlist</a>
			                <a class="dropdown-item" href="product-single.php">Single Product</a>
			                <a class="dropdown-item" href="cart.php">Cart</a>
			                <a class="dropdown-item" href="checkout.php">Checkout</a>
			              </div>
	        		</li>
		          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
		          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
		          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
		           <li class="nav-item"><a href="{{ url('register_user') }}" class="nav-link">Register USer</a></li>
		           <li class="nav-item"><a href="{{ url('user_list') }}" class="nav-link">User List</a></li>
		           
		           <li class="nav-item"><a href="{{ url('add_shop') }}" class="nav-link">Shop Add</a></li>
		           <li class="nav-item"><a href="{{ url('shop_list') }}" class="nav-link">Shop List</a></li>
		           <li class="nav-item"><a href="{{ url('user_add_form') }}" class="nav-link">Middleware</a></li>
  					<li class="nav-item"><a href="{{ url('logout') }}" class="nav-link">Logout</a></li>

		          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
		        </ul>
		      </div>
		  
		       @endif
		    </div>
		</nav>
  	@show


  	@section('slider')

	  	<section id="home-section" class="hero">
			  <div class="home-slider owl-carousel">
		      <div class="slider-item" style="background-image: asset('images/bg_1.jpg');">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		            <div class="col-md-12 ftco-animate text-center">
		              <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
		              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
		              <p><a href="#" class="btn btn-primary">View Details</a></p>
		            </div>

		          </div>
		        </div>
		      </div>

		      <div class="slider-item" style="background-image: asset('images/bg_2.jpg');">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		            <div class="col-sm-12 ftco-animate text-center">
		              <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
		              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
		              <p><a href="#" class="btn btn-primary">View Details</a></p>
		            </div>

		          </div>
		        </div>
		      </div>
		    </div>
	    </section>
  	@show

  	{{-- Here every view will write code here --}}
  	@yield("body-content")


  	@section("footer")

  		<footer class="ftco-footer ftco-section">
		    
		    <div class="container">
		      	<div class="row">
		      		<div class="mouse">
								<a href="#" class="mouse-icon">
									<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
								</a>
							</div>
		      	</div>
		        <div class="row mb-5">
		          <div class="col-md">
		            <div class="ftco-footer-widget mb-4">
		              <h2 class="ftco-heading-2">Vegefoods</h2>
		              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
		            </div>
		          </div>
		          <div class="col-md">
		            <div class="ftco-footer-widget mb-4 ml-md-5">
		              <h2 class="ftco-heading-2">Menu</h2>
		              <ul class="list-unstyled">
		                <li><a href="#" class="py-2 d-block">Shop</a></li>
		                <li><a href="#" class="py-2 d-block">About</a></li>
		                <li><a href="#" class="py-2 d-block">Journal</a></li>
		                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
		              </ul>
		            </div>
		          </div>
		          <div class="col-md-4">
		             <div class="ftco-footer-widget mb-4">
		              <h2 class="ftco-heading-2">Help</h2>
		              <div class="d-flex">
			              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
			                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
			                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
			                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
			                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
			              </ul>
			              <ul class="list-unstyled">
			                <li><a href="#" class="py-2 d-block">FAQs</a></li>
			                <li><a href="#" class="py-2 d-block">Contact</a></li>
			              </ul>
			            </div>
		            </div>
		          </div>
		          <div class="col-md">
		            <div class="ftco-footer-widget mb-4">
		            	<h2 class="ftco-heading-2">Have a Questions?</h2>
		            	<div class="block-23 mb-3">
			              <ul>
			                <li><span class="icon icon-map-marker"></span><span class="text">@yield('address','default_address') </span></li>
			                <li><a href="#"><span class="icon icon-phone"></span><span class="text">@yield('phone_no','default_phone')</span></a></li>
			                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">@yield('email','default_email')</span></a></li>
			              </ul>
			            </div>
		            </div>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-md-12 text-center">

		            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
		          </div>
		        </div>
		    </div>
    	</footer>
  		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  		<script src="{{ asset('js/jquery.min.js') }} "></script>
	  	<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	  	<script src="{{ asset('js/popper.min.js') }}"></script>
	  	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	    <script src="{{ asset('js/aos.js') }}"></script>
	    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	    <script src="{{ asset('js/scrollax.min.js') }}"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	    <script src="{{ asset('js/google-map.js') }}"></script>
	    <script src="{{ asset('js/main.js') }}"></script>
  	@show
    
 </body>
</html>