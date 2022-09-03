@extends('layout.master1')
@section('title')
Students || Result Processing System
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
                        <h4 class="page-title">Students</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New Student <i class="uil-plus-circle"></i></button>
                </div>
            </div>
            <!-- end page title -->
            <!--  Modal content for the above example -->
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Add New Student</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-student') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="fname" placeholder="Fatai">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="lname" placeholder="Balogun">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Other Name:</label>
                                            <input type="text" class="form-control" name="middlename" placeholder="Adekunle">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender:</label>
                                            <select class="form-control" name="gender">
                                                <option selected disabled>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Date of Birth:</label>
                                            <input type="date" class="form-control" name="dob" placeholder="COM 224">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Program:</label>
                                            <select class="form-control" name="program_id">
                                                <option selected disabled>Select Program</option>
                                                @foreach($program as $prog)
                                                <option value="{{ $prog->id }}">{{ $prog->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Department</label>
                                            <select class="form-control" name="department_id">
                                                <option selected disabled>Select Department</option>
                                                @foreach($department as $dept)
                                                <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Year:</label>
                                            <input type="text" class="form-control" name="year" placeholder="2017/2018">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Matric Number</label>
                                            <input type="text" class="form-control" name="matric_no" placeholder="AJP/ND/2017/COM/058">
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Student</button>
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

                            <h4 class="header-title mt-0 mb-1">All Students</h4><br>

                            <table id="basic-datatable" class="table table-striped dt-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Matric No</th>
                                        <th>Sex</th>
                                        <th>DOB</th>
                                        <th>Program</th>
                                        <th>Department</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($student as $stut)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $stut->fname }} {{ $stut->lname }} {{ $stut->middlename }}</td>
                                        <td>{{ $stut->matric_no }}</td>
                                        <td>{{ $stut->gender }}</td>
                                        <td>{{ $stut->dob }}</td>
                                        <td>{{ $stut->program->name }}</td>
                                        <td>{{ $stut->department->title }}</td>
                                        <td>{{ $stut->year }}</td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg3{{ $stut->id }}"><i class="uil-pen" title="Edit Department"></i></a> &nbsp; &nbsp; &nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg2{{ $stut->id }}"><i class="uil-trash-alt" title="Delete Department"></i></a>
                                        </td>
                                    </tr>
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg2{{ $stut->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Delete Student</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete {{ $stut->title }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('deletestudent', $stut->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Student</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade" id="bs-example-modal-lg3{{ $stut->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Student</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('updatestudent', $stut->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>First Name:</label>
                                                                    <input type="text" class="form-control" name="fname" value="{{ $stut->fname }}">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Last Name:</label>
                                                                    <input type="text" class="form-control" name="lname" value="{{ $stut->lname }}">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Other Name:</label>
                                                                    <input type="text" class="form-control" name="middlename" value="{{ $stut->middlename }}">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Gender:</label>
                                                                    <select class="form-control" name="gender">
                                                                        <option selected value="{{ $stut->id }}">{{ $stut->gender }}</option>
                                                                        <option disabled>Select Gender</option>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Date of Birth:</label>
                                                                    <input type="date" class="form-control" name="dob" value="{{ $stut->dob }}">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Program:</label>
                                                                    <select class="form-control" name="program_id">
                                                                        <option selected value="{{ $stut->program->id }}">{{ $stut->program->name }}</option>
                                                                        <option disabled>Select Program</option>
                                                                        @foreach($program as $prog)
                                                                        <option value="{{ $prog->id }}">{{ $prog->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Department</label>
                                                                    <select class="form-control" name="department_id">
                                                                        <option selected value="{{ $stut->department->id }}">{{ $stut->department->title }}</option>
                                                                        <option disabled>Select Department</option>
                                                                        @foreach($department as $dept)
                                                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Year:</label>
                                                                    <input type="text" class="form-control" name="year" value="{{ $stut->year }}">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Matric Number</label>
                                                                    <input type="text" class="form-control" name="matric_no" value="{{ $stut->matric_no }}">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Update Student</button>
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