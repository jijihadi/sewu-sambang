<!DOCTYPE html>
<html lang="en">
<head>
<title>Detail Pemesanan</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/bootstrap4/bootstrap.min.css">
<link href="{{ url('/') }}/travelix/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{ url('/') }}/travelix/styles/contact_responsive.css">
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
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Sewu Sambang</a></div>
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
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
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
			<div class="menu_close_container"><div class="menu_close"></div></div>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ url('/') }}/travelix/images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title text-center">Detail Pemesanan</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">
                <?php
                function tgl_indo($tanggal){
                    $bulan = array (
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
                    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                }
                ?>
					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">DETAIL PEMESANAN</div>
						<table class="table table-bordered text-light">
                            <thead>
                                <tr class="text-center">
                                <th scope="col">No</th>
								<th scope="col">Tiket</th>
								<th scope="col">Kode</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($pesanan as $p)
                                <tr class="text-center">
                                    <th scope="row"><?= $i ?></th>
                                    <td>
                                        <?php if($p->tiket_id == 1): ?>
                                            <span class="badge badge-pill badge-success">Tiket Wisata</span>
                                        <?php endif ?>
                                        <?php if($p->tiket_id == 2): ?>
                                            <span class="badge badge-pill badge-primary">Tiket Camping</span>
                                        <?php endif ?>
									</td>
									<td>{{ $p->kode_pembayaran }}</td>
                                    <td>{{ tgl_indo(date('Y-m-d', strtotime($p->tanggal_pemesanan))) }}</td>
                                    <td>{{ $p->nama_customer }}</td>
                                    <td>{{ $p->jumlah_tiket }}</td>
                                    <td>{{ $p->total_harga }}</td>
                                    <td>
                                        <?php if($p->status == 0): ?>
                                            <span class="badge badge-pill badge-warning">Belum Bayar</span>
                                        <?php endif ?>
                                        <?php if($p->status == 1): ?>
                                            <span class="badge badge-pill badge-primary">Selesai</span>
                                        <?php endif ?>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach
                                
                            </tbody>
                            </table>
                            @foreach($pesanan as $p)
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/batalkan_tiket/{{ $p->id_pemesanan }}" class="form_submit_button button trans_200">Batalkan</a>
									<?php if($p->status == 1): ?>
									<a href="/cetak_tiket/{{ $p->id_pemesanan }}" class="form_submit_button button trans_200">Cetak</a>
									<?php endif ?>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="/bayar_tiket/{{ $p->id_pemesanan }}" class="form_submit_button button trans_200">Bayar<span></span><span></span><span></span></a>
                                </div>
                            </div>
                            @endforeach
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
<script src="{{ url('/') }}/travelix/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ url('/') }}/travelix/js/contact_custom.js"></script>

</body>

</html>