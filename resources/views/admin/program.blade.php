@extends('layout.master1')
@section('title')
Program || Result Processing System
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
                        <h4 class="page-title">Programs</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New Program <i class="uil-plus-circle"></i></button>
                </div>
            </div>
            <!-- end page title -->
            <!--  Modal content for the above example -->
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Add New Program</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-program') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Program Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="National Diploma">
                                </div><br>
                                <div class="form-group">
                                    <label>Duration:</label>
                                    <input type="text" class="form-control" name="duration" placeholder="2 Years">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Program</button>
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

                            <h4 class="header-title mt-0 mb-1">All Programs</h4><br>

                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Program Name</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($program as $prog)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $prog->name }}</td>
                                        <td>{{ $prog->duration }}</td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg3{{ $prog->id }}"><i class="uil-pen" title="Edit Department"></i></a> &nbsp; &nbsp; &nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg2{{ $prog->id }}"><i class="uil-trash-alt" title="Delete Department"></i></a>
                                        </td>
                                    </tr>
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg2{{ $prog->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Delete Program</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete {{ $prog->name }} Program</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('deleteprogram', $prog->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Program</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg3{{ $prog->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Program</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('updateprogram', $prog->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Program Name:</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $prog->name }}">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label>program Duration:</label>
                                                            <input type="text" class="form-control" name="duration" value="{{ $prog->duration }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Update Program</button>
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