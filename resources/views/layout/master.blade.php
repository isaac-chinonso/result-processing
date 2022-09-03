<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- plugins -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                {{ Auth::user()->username }} <i class="uil uil-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                            <a href="{{ url('logout') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                            </a>

                        </div>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i data-feather="menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/') }}" id="topnav-layout" role="button">
                                    <i data-feather="home"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/departments') }}" id="topnav-layout" role="button">
                                    <i class="uil-layer-group"></i> Departments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/programs') }}" id="topnav-layout" role="button">
                                    <i class="uil-layers"></i> Programs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/courses') }}" id="topnav-layout" role="button">
                                    <i class="uil-books"></i> Courses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('admin/students') }}" id="topnav-layout" role="button">
                                    <i class="uil-users-alt"></i> Students
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="uil-invoice"></i> Result <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                    <a href="{{ url('admin/compute-result') }}" class="dropdown-item">Compute Result</a>
                                    <a href="{{ url('admin/result') }}" class="dropdown-item">Check Result</a>
                                </div>
                            </li>
                        </ul>
                        <!-- end navbar-->
                    </div>
                    <!-- end .collapsed-->
                </nav>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end topnav-->
        @yield('content')

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- page js -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>