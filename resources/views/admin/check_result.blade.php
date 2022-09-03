@extends('layout.master1')
@section('title')
Check Result || Result Processing System
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
                <div class="col-5">
                    <div class="page-title-box">
                        <h4 class="page-title">Result</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New Course <i class="uil-plus-circle"></i></button>
                </div>
            </div>
            <!-- end page title -->
                <div class="col-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-1">All Result</h4><br>

                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Matric No</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($student as $stut)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $stut->matric_no }}</td>
                                        <td>{{ $stut->department->title }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><a href="{{ route('studentresult', $stut->id) }}" class="text-white">See Result</a></button>
                                        </td>
                                    </tr>

                                    <?php $number++; ?>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

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


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@endsection