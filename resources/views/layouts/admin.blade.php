<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan Tiket</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('/') }}/admin-assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="/admin/dashboard" class="sidebar-brand">
                    Pesan<span>Tiket</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="/admin/dashboard" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/data_pemesanan">
                            <i class="link-icon" data-feather="layers"></i>
                            <span class="link-title">Data Pemesanan Tiket</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/data_pembelian">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Data Pembelian Tiket</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/data_fasilitas" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Data Fasilitas</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/data_galeri" class="nav-link">
                            <i class="link-icon" data-feather="image"></i>
                            <span class="link-title">Data Galeri</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Users</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/data_customer">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Data Customer</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/data_admin">
                            <i class="link-icon" data-feather="anchor"></i>
                            <span class="link-title">Data Admin</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Laporan</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/laporan">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Laporan Penyewaan</span>
                            <i class="link-arrow" data-feather="chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>New customer registered</p>
                                            <p class="sub-text text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>New Order Recieved</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Server Limit Reached!</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Apps are ready for update</p>
                                            <p class="sub-text text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Download completed</p>
                                            <p class="sub-text text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://via.placeholder.com/30x30" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                @yield('content')
            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://aros-id.com/" target="_blank">Aros Id</a>. All rights reserved</p>
                <!-- <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p> -->
            </footer>
            <!-- partial -->

        </div>
    </div>
    <!-- core:js -->
    <script src="{{ url('/') }}/admin-assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ url('/') }}/admin-assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="{{ url('/') }}/admin-assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="{{ url('/') }}/admin-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('/') }}/admin-assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ url('/') }}/admin-assets/js/dashboard.js"></script>
    <script src="{{ url('/') }}/admin-assets/js/datepicker.js"></script>
    <!-- end custom js for this page -->
</body>

</html>