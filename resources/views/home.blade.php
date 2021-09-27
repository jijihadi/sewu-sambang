<!DOCTYPE html>
<html lang="en">

<head>
	<title>SEWU SAMBANG</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/bootstrap4/bootstrap.min.css">
	<link href="{{ url('/') }}/travelix/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/responsive.css">
</head>

<body>

	<div class="super_container">
		<!-- Header -->
		<header class="header">
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="phone">+45 345 3324 56789</div>
							<div class="social">
								<ul class="social_list">
									<li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
									<!-- <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li> -->
									<!-- <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
								</ul>
							</div>
							<div class="user_box ml-auto">
								@guest
								<div class="user_box_login user_box_link"><a href="{{ route('login') }}">login</a></div>
								<div class="user_box_register user_box_link"><a href="{{ route('register') }}">register</a></div>
								@else
								<div class="user_box_login user_box_link"><a href="#">{{ Auth::user()->name }}</a></div>
								<div class="user_box_register user_box_link"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a></div>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
								@endguest
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col my-3 d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="#">SEWU SAMBANG</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="/home">Home</a></li>
									<li class="main_nav_item"><a href="/pemesanan_tiket">Tiket dan Fasilitas</a></li>
									<li class="main_nav_item"><a href="/galeri">Galeri</a></li>
									<li class="main_nav_item"><a href="/contact">contact</a></li>
								</ul>
							</div>
							<div class="content_search ml-lg-0 ml-auto">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
											</g>
										</g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z" />
											</g>
										</g>
									</g>
								</svg>
							</div>

							<div class="hamburger">
								<i class="fa fa-bars trans_200"></i>
							</div>
						</div>
					</div>
				</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="#"><img src="{{ url('/') }}/travelix/images/logo.png" alt=""></a></div>
				<ul>
					<li class="main_nav_item"><a href="/home">Home</a></li>
					<li class="main_nav_item"><a href="/pemesanan_tiket">Tiket dan Fasilitas</a></li>
					<li class="main_nav_item"><a href="/galeri">Galeri</a></li>
					<li class="main_nav_item"><a href="/contact">contact</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->

			<div class="home_slider_container">

				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<!-- Image by https://unsplash.com/@anikindimitry -->
						<div class="home_slider_background" style="background-image:url({{ url('/') }}/travelix/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>SEWU</h1>
								<h1>sambang</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="/pemesanan_tiket">Pesan Tiket<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url({{ url('/') }}/travelix/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>SEWU</h1>
								<h1>sambang</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">Pesan Tiket<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url({{ url('/') }}/travelix/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>SEWU</h1>
								<h1>sambang</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">Pesan Tiket<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Nav - Prev -->
				<div class="home_slider_nav home_slider_prev">
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_prev'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
					</svg>
				</div>

				<!-- Home Slider Nav - Next -->
				<div class="home_slider_nav home_slider_next">
					<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_next'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
					</svg>
				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
						<li class="home_slider_custom_dot active">
							<div></div>{{ date('d') }}
						</li>
						<li class="home_slider_custom_dot">
							<div></div>{{ date('m') }}
						</li>
						<li class="home_slider_custom_dot">
							<div></div>{{ date('Y') }}
						</li>
					</ul>
				</div>

			</div>

		</div>

		<!-- Search -->

		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->

						<div class="search_tabs_container">
							<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/suitcase.png" alt=""><span>Fasilitas</span></div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/bus.png" alt="">Transportasi</div>
								<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/departure.png" alt="">flights</div> -->
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/island.png" alt="">Wisata</div>
								<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/cruise.png" alt="">cruises</div> -->
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ url('/') }}/travelix/images/diving.png" alt="">Outbound</div>
							</div>
						</div>

						<!-- Search Panel -->

						<div class="search_panel active">
							<div class="home_slider_content text-center">
								<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
									<h1 style="font-size: 40pt;">SEWU</h1>
									<h1>sambang</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="intro_title text-center">Wisata Terbaik</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="intro_text text-center">
							<p>Pilihan Wisata Yang Tepat Bagi Anda</p>
						</div>
					</div>
				</div>
				<div class="row intro_items">

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@dnevozhai -->
							<div class="intro_item_background" style="background-image:url({{ url('/') }}/travelix/images/intro_1.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">Pemesanan Tiket</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="/tiket_wisata">BELI<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>TIKET WISATA</h1>
									<div class="intro_price">Rp. 10.000</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@hellolightbulb -->
							<div class="intro_item_background" style="background-image:url({{ url('/') }}/travelix/images/intro_2.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">Pemesanan Tiket</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="/tiket_camping">BELI<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>TIKET CAMPING</h1>
									<div class="intro_price">Rp. 20.000</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@willianjusten -->
							<div class="intro_item_background" style="background-image:url({{ url('/') }}/travelix/images/intro_3.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">FASILITAS</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="/pemesanan_tiket">SEWA<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>FASILITAS</h1>
									<div class="intro_price">Rp. 100.000</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- CTA -->

		<div class="cta">
			<!-- Image by https://unsplash.com/@thanni -->
			<div class="cta_background" style="background-image:url({{ url('/') }}/travelix/images/cta.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col">

						<!-- CTA Slider -->

						<div class="cta_slider_container">
							<div class="owl-carousel owl-theme cta_slider">

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item text-center">
									<div class="cta_title">WISATA SEWU SAMBANG</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">Wisata Banyuwangi yang mempesona. Pilihan wisata yang tepat untuk anda yang ingin liburan dan menikmati suasana yang indah.Apalagi bersama keluarga menikmati keindahan wisata banyuwangi yang satu ini.</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="/pemesanan_tiket">Beli Sekarang<span></span><span></span><span></span></a>
									</div>
								</div>

							</div>

							<!-- CTA Slider Nav - Prev -->
							<div class="cta_slider_nav cta_slider_prev">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- CTA Slider Nav - Next -->
							<div class="cta_slider_nav cta_slider_next">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>

		<div class="about mt-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">

						<!-- About - Image -->

						<div class="about_image">
							<img src="{{ url('/') }}/travelix/images/man.png" alt="">
						</div>

					</div>

					<div class="col-lg-6">

						<!-- About - Content -->

						<div class="about_content" style="margin-top: 10%;">
							<div class="logo_container about_logo">
								<div class="logo"><a href="#"><img src="{{ url('/') }}/travelix/images/logo.png" alt=""><span style="font-size: 30pt; color: #8e44ad;">SEWU SAMBANG</span></a></div>
							</div>
							<p class="about_text"><b>Senin - Minggu</b><br>Wisata ini dibuka mulai pukul 17.00 - 17.00</p>
							<p class="about_text"><b>Kamis</b><br>Khusus melakukan camping sementara tidak diperbolehkan</p>
							<p class="about_text"></p><br>
							<p class="about_text"><b>Pada saat camping laki-laki dan perempuan harus di tenda terpisah.</b></p><br>
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- Testimonials -->

		<div id="galeri" class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Galeri Kami</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/backpack.png" alt=""></div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/island_t.png" alt=""></div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/kayak.png" alt=""></div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_2.jpg" alt=""></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/island_t.png" alt=""></div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_1.jpg" alt=""></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/backpack.png" alt=""></div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="{{ url('/') }}/travelix/images/test_3.jpg" alt=""></div>
										<div class="test_icon"><img src="{{ url('/') }}/travelix/images/kayak.png" alt=""></div>
									</div>
								</div>

							</div>

							<!-- Testimonials Slider Nav - Prev -->
							<div class="test_slider_nav test_slider_prev">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- Testimonials Slider Nav - Next -->
							<div class="test_slider_nav test_slider_next">
								<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#8d4fff' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-md-4 footer_column">
						<div class="footer_col">
							<div class="footer_content footer_about">
								<div class="logo_container footer_logo">
									<div class="logo"><a href="#"><img src="{{ url('/') }}/travelix/images/logo.png" alt="">SEWU SAMBANG</a></div>
								</div>
								<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl.</p>
								<ul class="footer_social_list">
									<!-- <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
									<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<!-- <li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-3"></div>

					<!-- Footer Column -->
					<div class="col-md-5 footer_column">
						<div class="footer_col">
							<div class="footer_title">Galeri</div>
							<div class="footer_content footer_blog">
								<div class="row">
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov">
									</div>
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie">
									</div>
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87">
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov">
									</div>
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie">
									</div>
									<div class="col-md-4">
										<img src="{{ url('/') }}/travelix/images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87">
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 order-lg-1 order-2  ">
						<div class="copyright_content d-flex flex-row align-items-center">
							<div>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Aros</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
					<div class="col-lg-9 order-lg-2 order-1">
						<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
							<div class="footer_nav">
								<ul class="footer_nav_list">
									<li class="footer_nav_item"><a href="/home">Home</a></li>
									<li class="footer_nav_item"><a href="/pemesanan_tiket">Tiket dan Fasilitas</a></li>
									<li class="footer_nav_item"><a href="/home">Galeri</a></li>
									<li class="footer_nav_item"><a href="">contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="{{ url('/') }}/travelix/js/jquery-3.2.1.min.js"></script>
	<script src="{{ url('/') }}/travelix/styles/bootstrap4/popper.js"></script>
	<script src="{{ url('/') }}/travelix/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="{{ url('/') }}/travelix/plugins/easing/easing.js"></script>
	<script src="{{ url('/') }}/travelix/js/custom.js"></script>

</body>

</html>