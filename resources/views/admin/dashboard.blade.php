@extends('layout.master')
@section('title')
Dashboard || Result Processing
@endsection
@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Programmes</span>
                                    <h3 class="mb-0"><i class="uil-layers"></i></h3>
                                </div><br><br><br>
                                <div class="align-self-center flex-shrink-0">
                                    <h3 class="mb-0">{{ $program }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Departments</span>
                                    <h3 class="mb-0"><i class="uil-layer-group"></i></h3>
                                </div><br><br><br>
                                <div class="align-self-center flex-shrink-0">
                                    <h3 class="mb-0">{{ $department }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Courses</span>
                                    <h3 class="mb-0"><i class="uil-books"></i></h3>
                                </div><br><br><br>
                                <div class="align-self-center flex-shrink-0">
                                    <h3 class="mb-0">{{ $course }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Students</span>
                                    <h3 class="mb-0"><i class="uil-users-alt"></i></h3>
                                </div><br><br><br>
                                <div class="align-self-center flex-shrink-0">
                                    <h3 class="mb-0">{{ $student }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Student Result Processing by <a href="#">Dcode Arena</a>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


@endsection