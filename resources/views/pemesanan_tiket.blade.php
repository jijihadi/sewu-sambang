<!DOCTYPE html>
<html lang="en">
<?php
	function tgl_indo($tanggal)
	{
		$bulan = array(
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
	
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
	
		return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
	} ?>

<head>
    <title>SEWU SAMBANG</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/travelix/styles/bootstrap4/bootstrap.min.css">
    <link href="{{ url('/') }}/travelix/plugins/font-awesome-4.7.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/about_styles.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/travelix/styles/about_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/main_styles.css">
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
                                    <li class="social_list_item"><a href="#"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-whatsapp"
                                                aria-hidden="true"></i></a></li>
                                    <!-- <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li> -->
                                    <!-- <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                                @guest
                                    <div class="user_box_login user_box_link"><a
                                            href="{{ route('login') }}">login</a></div>
                                    <div class="user_box_register user_box_link"><a
                                            href="{{ route('register') }}">register</a></div>
                                @else
                                    <div class="user_box_login user_box_link"><a
                                            href="#">{{ Auth::user()->name }}</a></div>
                                    <div class="user_box_register user_box_link"><a
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none">
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
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px"
                                    height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                    xml:space="preserve">
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
                <div class="logo menu_logo"><a href="#"><img
                            src="{{ url('/') }}/travelix/images/logo.png" alt=""></a></div>
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="/home">Home</a></li>
                    <li class="main_nav_item"><a href="/pemesanan_tiket">Tiket dan Fasilitas</a></li>
                    <li class="main_nav_item"><a href="/galeri">Galeri</a></li>
                    <li class="main_nav_item"><a href="/contact">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="{{ url('/') }}/travelix/images/about_background.jpg"></div>
            <div class="home_content text-center">
                <div class="home_title">PEMESANAN TIKET</div>
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
                            <div class="intro_item_background"
                                style="background-image:url({{ url('/') }}/travelix/images/intro_1.jpg)">
                            </div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">Pemesanan Tiket</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a
                                        href="/tiket_wisata">BELI<span></span><span></span><span></span></a>
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
                            <div class="intro_item_background"
                                style="background-image:url({{ url('/') }}/travelix/images/intro_2.jpg)">
                            </div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">Pemesanan Tiket</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a
                                        href="/tiket_camping">BELI<span></span><span></span><span></span></a>
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
                            <div class="intro_item_background"
                                style="background-image:url({{ url('/') }}/travelix/images/intro_3.jpg)">
                            </div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">FASILITAS</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a
                                        href="/fasilitas">SEWA<span></span><span></span><span></span></a>
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


        <!-- Stats -->

        <div class="stats">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">Data pemesanan {{ Auth::user()->name }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <p class="stats_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis
                            vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu
                            vehicula pretium. Donec bibendum tristique condimentum. Aenean in lacus ligula. </p>
                    </div>
                </div>
                <div>
                    <table class="table table-stipped">
                        <thead>
                            <tr class="text-center">
                                <th scope="col"><b>No</b></th>
                                <!-- <th scope="col"><b>Kode</b></th> -->
                                <th scope="col"><b>Customer</b></th>
                                <th scope="col"><b>Tanggal Pesan</b></th>
                                <th scope="col"><b>Tiket</b></th>
                                <th scope="col"><b>Fasilitas</b></th>
                                <th scope="col"><b>Total Bayar</b></th>
                                <th scope="col"><b>Status</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($pemesanan as $p)
                                <tr class="text-center">
                                    <th scope="row">{{ $i }}</th>
                                    <!-- <td><b>{{ $p->kode_pembayaran }}</b></td> -->
                                    <td>{{ $p->nama_customer }}</td>
                                    <td>{{ tgl_indo(date('Y-m-d', strtotime($p->tanggal_pemesanan))) }}
                                    </td>
                                    <td>{{ $p->nama_tiket }}</td>
                                    <td>{{ $p->nama_fasilitas }}</td>
                                    <td>Rp.
                                        {{ number_format($p->total_harga, 0, '.','.') }}
                                    </td>
                                    <td>
                                        @if($p->kode_pembayaran == null)
                                            <div class="text-danger">Belum dibayar &nbsp;<a
                                                    href="/bayar_tiket/{{ $p->id_pemesanan }}"
                                                    class="btn btn-info btn-sm">
                                                    Bayar <i class="fa fa-money"></i></a></div>

                                        @else
                                            <div class="text-success">Sudah dibayar &nbsp; <a
                                                href="/cetak_tiket/{{ $p->id_pemesanan }}"
                                                class="btn btn-success btn-sm">
                                                Cetak<i class="fa fa-print"></i></a></div>

                                        @endif
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add -->

        {{-- <div class="add">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="add_container">
							<div class="add_background" style="background-image:url({{ url('/') }}/travelix/images/add.jpg)">
    </div>
    <div class="add_content">
        <h1 class="add_title">thailand</h1>
        <div class="add_subtitle">From <span>$999</span></div>
        <div class="button add_button">
            <div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img
                                src="{{ url('/') }}/travelix/images/milestone_1.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="255">0</div>
                        <div class="milestone_text">Clients</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img
                                src="{{ url('/') }}/travelix/images/milestone_2.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="1176">0</div>
                        <div class="milestone_text">Projects</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img
                                src="{{ url('/') }}/travelix/images/milestone_3.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="39">0</div>
                        <div class="milestone_text">Countries</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img
                                src="{{ url('/') }}/travelix/images/milestone_4.png" alt=""></div>
                        <div class="milestone_counter" data-end-value="127">0</div>
                        <div class="milestone_text">Coffees</div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-md-4 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img
                                            src="{{ url('/') }}/travelix/images/logo.png"
                                            alt="">SEWU SAMBANG</a></div>
                            </div>
                            <p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus quis vu lputate eros, iaculis consequat nisl.</p>
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
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_1.jpg"
                                        alt="https://unsplash.com/@avidenov">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_2.jpg"
                                        alt="https://unsplash.com/@deannaritchie">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_3.jpg"
                                        alt="https://unsplash.com/@bergeryap87">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_1.jpg"
                                        alt="https://unsplash.com/@avidenov">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_2.jpg"
                                        alt="https://unsplash.com/@deannaritchie">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('/') }}/travelix/images/footer_blog_3.jpg"
                                        alt="https://unsplash.com/@bergeryap87">
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

                            </script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"
                                target="_blank">Aros</a>
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
    <script src="{{ url('/') }}/travelix/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/easing/easing.js"></script>
    <script src="{{ url('/') }}/travelix/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{ url('/') }}/travelix/js/about_custom.js"></script>

</body>

</html>
