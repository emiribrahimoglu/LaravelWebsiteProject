<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Ecommerce Video Game | Cart</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">

		<!--[if lt IE 9]>
		<script src="{{asset('js/ie-support/html5.js')}}"></script>
		<script src="{{asset('js/ie-support/respond.js')}}"></script>
		<![endif]-->

	</head>


	<body class="slider-collapse">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
    @elseif(session('failed'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('failed') }}
        </div>
    @endif

		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
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
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			<div class="home-slider">
				<ul class="slides">
					<li data-bg-image="{{asset('sliderArts/cyberpunk_2077_slide_art_ultrawide.jpg')}}">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Cyberpunk 2077</h2>
								<small class="slide-subtitle"></small>

								<p class="paragraph">Cyberpunk 2077 güç, gösteriş ve vücut modifikasyonu çılgınlığına kapılmış Night City kümekentinde geçen bir açık dünya aksiyon macera hikâyesidir. Kanun kaçağı paralı asker V olarak oyna ve ölümsüzlüğün anahtarı olan eşsiz bir implantın peşine düş.</p>


							</div>
                            <!-- <img src="{{asset('sliderArts/cyberpunk_2077_slide_art_ultrawide.jpg')}}" class="slide-image"> -->
                            <!-- <img src="{{asset('coverArts/Cyberpunk_2077_cover_art.jpg')}}" class="slide-image"> -->
                        </div>
                    </li>
                    <li data-bg-image="{{asset('sliderArts/Returnal_slider_art.jpg')}}">
                        <div class="container">
                            <div class="slide-content">
                                <h2 class="slide-title">Returnal</h2>
                                <small class="slide-subtitle"></small>

                                <p class="paragraph">Bu şekil değiştiren dünyaya zorunlu iniş yapan Selene, kaçışı için antik bir medeniyetin kıraç topraklarını aramak zorundadır. Tekrar tekrar yenilir, öldüğü her sefer yolculuğuna yeniden başlamak zorunda kalır. Bu roguelike nişancı oyununda hem gezegen hem de ekipmanınız her döngüde değişiyor, sizi oyun tarzınıza uyarlamaya ve gelişen zorlukların üstesinden gelmeye zorluyor.</p>


                            </div>

                            <!-- <img src="{{asset('coverArts/returnal_cover_art.jpg')}}" class="slide-image"> -->
                        </div>
                    </li>
                    <li data-bg-image="{{asset('sliderArts/Demons_Souls_slider_art.jpg')}}">
                        <div class="container">
                            <div class="slide-content">
                                <h2 class="slide-title">Demon's Souls</h2>
                                <small class="slide-subtitle"></small>

                                <p class="paragraph"> PlayStation Studios ve Bluepoint Games'ten, bir PlayStation klasiği olan Demon's Souls'un yeniden yapımı geliyor. Tepeden tırnağa yenilenen ve ustalıkla geliştirilen bu yeniden yapım, sisin kapladığı karanlık ve fantastik bir diyarı günümüzün oyuncu nesliyle tanıştırıyor. Bu dünyanın zorluk ve çileleriyle yüzleşmiş olanlar, baş döndüren görsel kalite ve inanılmaz performansla bir kez daha karanlığa meydan okuyacak.</p>


                            </div>

                            <!-- <img src="{{asset('coverArts/Demons_Souls_cover_art.jpg')}}" class="slide-image"> -->
                        </div>
                    </li>
                </ul> <!-- .slides -->
			</div> <!-- .home-slider -->

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">Yeni Oyunlar</h2>
								<a href="/products" class="all">Show All</a>
							</header>

							<div class="product-list">
                                @foreach ($products as $item)
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="{{$item->urun_gorsel_dir}}" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#">{{$item->urun_isim}}</a></h3>
										<small class="price">{{$item->urun_fiyat}} <span>&#8378;</span></small>
										<p class="productParagraph">{{$item->urun_aciklamasi}}</p>
                                        <form action="/add_to_cart" method="POST">
                                            <div class="action">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$item->urun_id}}">
                                                <input type="hidden" name="priceTag" value="{{$item->urun_fiyat}}">
                                                    <button type='submit' class="button" type="button">Add To Cart</button>

                                            </div>
                                        </form>

										<!--<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>-->
									</div>
								</div> <!-- .product -->
                                @endforeach

							</div> <!-- .product-list -->

						</section>

						<section>
							<header>
								<h2 class="section-title">Fırsatlar</h2>
								<a href="#" class="all">Show All</a>
							</header>

							<div class="product-list">

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
                                            <a href="single.html"><img src="{{asset('coverArts/watch_dogs_legion_cover_art.jpg')}}" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#">Watch Dogs Legion</a></h3>
										<small class="price">$19.00</small>
										<p class="productParagraph">Watch Dogs Legion'da, yakın gelecekteyiz. Çöküşün eşiğindeki Londra'yı kurtarmak için bir direniş örgütlemek zorundasın.</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->


								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
                                            <a href="single.html"><img src="{{asset('coverArts/the-witcher-3-wild-hunt-goty-cover.jpg')}}" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="#">The Witcher III: Wild Hunt - Game of the Year Edition </a></h3>
										<small class="price">$19.00</small>
										<p class="productParagraph">Prefesyonel bir canavar avcısı ol ve destansı seviyede bir maceraya yelken aç! The Witcher 3: Wild Hunt çıktığından bu yana 250'den fazla Game of the Year ödülü alarak klasiklerin arasına girmeyi başardı. Artık sen de fazladan 50 saat oynanış süresine eş değer hikaye eklentileriyle birlikte bu devasa, 100 saatten uzun, açık dünya macerasının tadını çıkar.</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->


								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
                                            <a href="single.html"><img src="{{asset('coverArts/mgs_v_the_phantom_pain_cover_art.jpg')}}" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="#">Metal Gear Solid V: The Phantom Pain</a></h3>
										<small class="price">$19.00</small>
										<p class="productParagraph">Fox Engine tarafından desteklenen en son teknolojiye sahip METAL GEAR üyeliğinde yeni bir çağ açan METAL GEAR SOLID V: The Phantom Pain, kendilerine açık dünya görevlerini gerçekleştirmek üzere taktiksel özgürlük verildiği için oyunculara üstün bir oyun oynama deneyimi sağlar.</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->


								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
                                            <a href="single.html"><img src="{{asset('coverArts/fifa_21_cover_art.jpg')}}" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="#">FIFA 21</a></h3>
										<small class="price">$19.00</small>
										<p class="productParagraph">Sokakta veya stadyumda arkadaşlarınızla takım kurup daha da büyük zaferlere ulaşmanız için daha fazla yol sunan EA SPORTS™ FIFA 21 ile birlikte futbol geri döndü.</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

							</div> <!-- .product-list -->

						</section>
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
									<li><a href="#">Contact</a></li>
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
						<div class="copy">Copyright 2021. All rights reserved.</div>
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
					<form method="post" action="/login">
                        @csrf
						<input type="text" placeholder="Username..." name="username">
						<input type="password" placeholder="Password..." name="password">
						<input type="submit" value="Login">
					</form>
				</div> <!-- .column -->

			</div> <!-- .row -->
		</div> <!-- .auth-popup -->

        <div class="overlayV2"></div>

        <div class="auth-popupV2 popupV2">
            <a href="#" class="close"><i class="fa fa-times"></i></a>

            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Create an account</h2>
                    <form method="post" action="/register">
                        @csrf
                        <input name="firstName" type="text" placeholder="First Name...">
                        <input name="lastName" type="text" placeholder="Last Name...">
                        <input name="username" type="text" placeholder="Username...">
                        <input name="email" type="text" placeholder="Email address...">
                        <input name="fullAddress" type="text" placeholder="Full Address...">
                        <input name="phoneNumber" type="text" placeholder="Phone Number...">
                        <input name="password" type="text" placeholder="Password...">
                        <input required name="password-confirmation" type="text" placeholder="Confirm Password...">
                        <input type="submit" value="Register">
                    </form>
                </div> <!-- .column -->
            </div>
        </div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
