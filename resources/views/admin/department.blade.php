@extends('layout.master1')
@section('title')
Departments || Result Processing System
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
                        <h4 class="page-title">Departments</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New Department <i class="uil-plus-circle"></i></button>
                </div>
            </div>
            <!-- end page title -->
            <!--  Modal content for the above example -->
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Add New Department</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ url('/admin/save-department') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Department Name:</label>
                                    <input type="text" class="form-control" name="title" placeholder="Computer Science">
                                </div><br>
                                <div class="form-group">
                                    <label>Department Short Code:</label>
                                    <input type="text" class="form-control" name="shortcode" placeholder="CSC">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Department</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="row">
                <div class="col-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-1">All Departments</h4><br>

                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Short Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($department as $dept)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $dept->title }}</td>
                                        <td>{{ $dept->shortcode }}</td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg3{{ $dept->id }}"><i class="uil-pen" title="Edit Department"></i></a> &nbsp; &nbsp; &nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg2{{ $dept->id }}"><i class="uil-trash-alt" title="Delete Department"></i></a>
                                        </td>
                                    </tr>
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg2{{ $dept->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Delete Department</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete {{ $dept->title }} Department</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('deletedepartment', $dept->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Department</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg3{{ $dept->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Department</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('updatedepartment', $dept->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Department Name:</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $dept->title }}">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label>Department Short Code:</label>
                                                            <input type="text" class="form-control" name="shortcode" value="{{ $dept->shortcode }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Update Department</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
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