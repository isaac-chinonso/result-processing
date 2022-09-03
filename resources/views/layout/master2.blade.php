<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- third party css -->
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="../../assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../../assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                {{ Auth::user()->username }} <i class="uil uil-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

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
                            <img src="../../assets/images/logo-sm.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../../assets/images/logo.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="../../assets/images/logo-sm.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="a../../assets/images/logo.png" alt="" height="24">
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

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="../../assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">{{ Auth::user()->username }}</a>
                        <div class="dropdown-menu user-pro-dropdown">
                            <a href="{{ url('logout') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <!-- <li class="menu-title">Navigation</li> -->

                        <li>
                            <a href="{{ url('admin/') }}">
                                <i data-feather="home"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Extra</li>

                        <li>
                            <a href="{{ url('admin/departments') }}">
                                <i class="uil-layer-group"></i>
                                <span> Departments </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/programs') }}">
                                <i class="uil-layers"></i>
                                <span> Programs </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/courses') }}">
                                <i class="uil-books"></i>
                                <span> Courses </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/students') }}">
                                <i class="uil-users-alt"></i>
                                <span>Students </span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarLayouts" data-bs-toggle="collapse">
                                <i class="uil-invoice"></i>
                                <span> Result  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav-second-level">
                                    <li><a href="{{ url('admin/compute-result') }}">Compute Result </a></li>
                                    <li><a href="{{ url('admin/result') }}">Check Result</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @yield('content')


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../../assets/js/vendor.min.js"></script>

        <!-- third party js -->
        <script src="../../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="../../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="../../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../../assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="../../assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="../../assets/js/app.min.js"></script>

</body>

</html>