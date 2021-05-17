<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Ecommerce Video Game | Cart</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="../css/style.css">

		<!--[if lt IE 9]>
		<script src="{{asset('js/ie-support/html5.js')}}"></script>
		<script src="{{asset('js/ie-support/respond.js')}}"></script>
		<![endif]-->

	</head>


	<body>

		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="/" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Instabeat Gaming</h1>
							<small class="site-description">Place to buy games easier and quicker</small>
						</div>
					</a> <!-- #branding -->

                    @if(!Session::has('user'))
                        <div class="right-section pull-right">
                            <a href="cart" class="cart"><i class="icon-cart"></i> 0 items in cart</a>
                            <a href="#" class="login-button">Login</a>
                            <a href="#" class="register-button">Register</a>
                        </div> <!-- .right-section -->
                    @else
                        <div class="right-section pull-right">
                            <a href="cart" class="cart"><i class="icon-cart"></i> 0 items in cart</a>
                            <a href="#">{{Session::get('user')['kullanici_isim']}}</a>
                            <a href="/logout">Logout</a>
                        </div> <!-- .right-section -->
                    @endif

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="/"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="/products">Mağaza</a></li>
							<li class="menu-item"><a href="/products">Fırsatlar</a></li>
							<li class="menu-item"><a href="/products">PC</a></li>
							<li class="menu-item"><a href="/products">Playstation</a></li>
							<li class="menu-item"><a href="/products">Xbox</a></li>
							<li class="menu-item"><a href="/products">Nintendo</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->

					<div class="breadcrumbs">
						<div class="container">
							<a href="/">Home</a>
							<span>Cart</span>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			<main class="main-content">
				<div class="container">
					<div class="page">

						<table class="cart">
							<thead>
								<tr>
									<th class="product-name">Product Name</th>
									<th class="product-price">Price</th>
									<th class="product-qty">Quantity</th>
									<th class="product-total">Total</th>
									<th class="action"></th>
								</tr>
							</thead>
							<tbody>
                            @foreach ($products as $item)
								<tr>
									<td class="product-name">
										<div class="product-thumbnail">
											<img src="{{$item->urun_gorsel_dir}}" alt="">
										</div>
										<div class="product-detail">
											<h3 class="product-title">{{$item->urun_adi}}</h3>
											<p>{{$item->urun_aciklamasi}}</p>
										</div>
									</td>
									<td class="product-price">{{$item->urun_fiyat}} <span>&#8378;</span></td>
									<td class="product-qty">
                                        <a>1</a>
									</td>
									<td class="product-total">$150.00</td>
                                    <input type="hidden" name="productId" value="{{$item->urun_id}}">
									<td class="action"><a href="/remove/{{$item->cart_id}}"><i class="fa fa-times"></i></a></td>
								</tr>
                            @endforeach
							</tbody>
						</table> <!-- .cart -->

						<div class="cart-total">
							<p><strong>Subtotal:</strong> $650.00</p>
							<p><strong>Shipment:</strong> $15.00</p>
							<p class="total"><strong>Total</strong><span class="num">$665.00</span></p>
							<p>
								<a href="#" class="button muted">Continue Shopping</a>
								<a href="#" class="button">Finalize and pay</a>
							</p>
						</div> <!-- .cart-total -->

					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<div class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Information</h3>
								<ul class="no-bullet">
									<li><a href="#">Site map</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Consumer Service</h3>
								<ul class="no-bullet">
									<li><a href="#">Secure</a></li>
									<li><a href="#">Shipping &amp; Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Orders &amp; Returns</a></li>
									<li><a href="#">Group Sales</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">My Account</h3>
								<ul class="no-bullet">
									<li><a href="#">Login/Register</a></li>
									<li><a href="#">Settings</a></li>
									<li><a href="#">Cart</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Join our newsletter</h3>
								<form action="#" class="newsletter-form">
									<input type="text" placeholder="Enter your email...">
									<input type="submit" value="Subsribe">
								</form>
							</div> <!-- .widget -->
						</div> <!-- column -->
					</div><!-- .row -->

					<div class="colophon">
						<div class="copy">Copyright 2014 Company name. Designed by Themezy. All rights reserved.</div>
						<div class="social-links square">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div> <!-- .social-links -->
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>

		<div class="overlay"></div>

		<div class="auth-popup popup">
			<a href="#" class="close"><i class="fa fa-times"></i></a>
			<div class="row">
				<div class="col-md-6">
					<h2 class="section-title">Login</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="password" placeholder="Password...">
						<input type="submit" value="Login">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Create an account</h2>
					<form action="#">
						<input type="text" placeholder="Username...">
						<input type="text" placeholder="Email address...">
						<input type="submit" value="register">
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
