<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang quản trị Velonic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <!-- Plugins css-->
    <link href="{{ asset('public/admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/admin/assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App css -->

    <link href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
    <link href="{{ asset('public/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css"
        id="app-stylesheet">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('public/admin/assets/images/users/user.png') }}" alt="user-image"
                            class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('admin.index')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('public/admin/assets/images/logo-dark.png') }}" alt="" height="18">
                        <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">V</span> -->
                        <img src="{{ asset('public/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="{{route('admin.index')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('public/admin/assets/images/logo-light.png') }}" alt="" height="18">
                        <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">V</span> -->
                        <img src="{{ asset('public/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <!-- LOGO -->


            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-lg-block">
                    <form action="{{Route('admin.search')}}" class="app-search" method="GET">
                        <div class="app-search-box">
                            <div class="input-group">
                                <Select name="select">
                                    <option value="1">Sản phẩm</option>
                                    <option value="2">Đơn hàng</option>
                                </Select>
                                <input type="text" class="form-control" placeholder="Search..." name="key"
                                    style="width: 250px;" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Mục lục</li>
                        <li>
                            <a href="{{Route('admin.index')}}" class="waves-effect">
                                <i class="ion-md-speedometer"></i>
                                <span> Về trang chính </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="ion-ios-apps"></i>
                                <span> Quản lý sản phẩm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('admin.product.index') }}">Sản thẩm</a></li>
                                <li><a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="ion-ios-apps"></i>
                                <span> Quản lý danh mục </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="components-calendar.html">Danh mục</a></li>
                                <li><a href="components-range-sliders.html">Thêm danh mục</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="mdi mdi-cart-arrow-right"></i>
                                <span> Quản lý đơn hàng </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{Route('admin.cart.index')}}">Tất cả đơn hàng </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            @yield('content')
            <!-- end content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            Velonic theme<a href="">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    <script src="{{ asset('public/admin/assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('public/admin/assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/jquery-scrollto/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <!-- Chat app -->
    <script src="{{ asset('public/admin/assets/js/pages/jquery.chat.js') }}"></script>

    <!-- Todo app -->
    <script src="{{ asset('public/admin/assets/js/pages/jquery.todo.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('public/admin/assets/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/raphael/raphael.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('public/admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Dashboard init JS -->
    <script src="{{ asset('public/admin/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('public/admin/assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- alert ----->
    <script src="{{ asset('public/admin/assets\js\pages\sweet-alerts.init.js') }} "></script>
</body>

</html>