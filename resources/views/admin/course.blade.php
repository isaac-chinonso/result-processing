@extends('layout.master1')
@section('title')
Courses || Result Processing System
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
                        <h4 class="page-title">Courses</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New Course <i class="uil-plus-circle"></i></button>
                </div>
            </div>
            <!-- end page title -->
            <!--  Modal content for the above example -->
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Add New Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-course') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Course Title:</label>
                                            <input type="text" class="form-control" name="title" placeholder="Computer Networking">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Course Code:</label>
                                            <input type="text" class="form-control" name="course_code" placeholder="COM 224">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label>Department:</label>
                                    <select name="department_id" class="form-control">
                                        <option selected disabled>Select Department</option>
                                        @foreach($department as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Course</button>
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

                            <h4 class="header-title mt-0 mb-1">All courses</h4><br>

                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Course Code</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($course as $cour)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $cour->title }}</td>
                                        <td>{{ $cour->course_code }}</td>
                                        <td>{{ $cour->department->title }}</td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg3{{ $cour->id }}"><i class="uil-pen" title="Edit Department"></i></a> &nbsp; &nbsp; &nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg2{{ $cour->id }}"><i class="uil-trash-alt" title="Delete Department"></i></a>
                                        </td>
                                    </tr>
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg2{{ $cour->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Delete Course</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete {{ $cour->title }} Course</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('deletecourse', $cour->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Course</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg3{{ $cour->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Course</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('updatecourse', $cour->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Course Title:</label>
                                                                    <input type="text" class="form-control" name="title" value="{{ $cour->title }}">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Course Code:</label>
                                                                    <input type="text" class="form-control" name="course_code" value="{{ $cour->course_code }}">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label>Department:</label>
                                                            <select name="department_id" class="form-control">
                                                                <option selected value="{{ $cour->department->id }}">{{ $cour->department->title }}</option>
                                                                <option disabled>Select Another Department</option>
                                                                @foreach($department as $dept)
                                                                <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Update Course</button>
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