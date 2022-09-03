<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Result Processing System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-6 p-4">
                                    <div class="mx-auto">
                                        <a href="index.html">
                                            <img src="assets/images/logo.png" alt="" />
                                        </a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-3">Create your account</h6><br>

                                    <form method="POST" action="{{ url('savelogin') }}" class="authentication-form">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="user"></i>
                                                </span>
                                                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                                <input type="password" class="form-control" name="confirm_password" placeholder="Re-Enter your password">
                                            </div>
                                        </div>
                                        <div class="mb-3 text-center d-grid">
                                            <button class="btn btn-primary" type="submit">Sign Up</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="auth-page-sidebar">
                                        <div class="overlay"></div>
                                        <div class="auth-user-testimonial">
                                            <p class="fs-24 fw-bold text-white mb-1">I simply love it!</p>
                                            <p class="lead">"It's a elegent templete. I love it very much!"</p>
                                            <p>- Admin User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="{{ url('/') }}" class="text-primary fw-bold ms-1">Login</a></p>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>