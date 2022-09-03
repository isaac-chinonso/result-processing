@extends('layout.master1')
@section('title')
Compute Result || Result Processing System
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
                        <h4 class="page-title">Results</h4>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 13px;" align="right">
                  
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-1">Compute Result</h4><br>
                            <form method="POST" action="{{ url('admin/generate-result') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Select Student Matric No</label>
                                            <select class="form-control" name="student_id">
                                                <option selected disabled>Select Student</option>
                                                @foreach($student as $stut)
                                                <option value="{{ $stut->id }}">{{ $stut->matric_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Select Semester</label>
                                            <select class="form-control" name="semester">
                                                <option selected disabled>Select Semester</option>
                                                <option value="First">First Semester</option>
                                                <option value="Second">Second Semester</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="row" id="fieldList">
                                        <div class="col-md-3">
                                            <label>Enter Course</label>
                                            <select class="form-control" name="course_id[]">
                                                <option selected disabled>Select Course</option>
                                                @foreach($course as $cors)
                                                <option value="{{ $cors->id }}">{{ $cors->course_code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Enter Score</label>
                                            <input type="text" name="score[]" class="form-control" placeholder="Enter Student Score">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Enter Course Unit</label>
                                            <input type="text" name="unit[]" class="form-control" placeholder="Enter Course Unit">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Enter Score Weight</label>
                                            <input type="text" name="weight[]" class="form-control" placeholder="Enter Score Weight">
                                        </div>
                                    </div><br>
                                    <div align="right">
                                        <button class="btn btn-secondary" id="addMore">Add more fields</button>
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <div align="right">
                                        <button class="btn btn-danger" type="reset">Reset Form</button>
                                        <button class="btn btn-success" type="submit">Generate Results</button>
                                    </div>
                                </div>
                            </form>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    $(function() {
        $("#addMore").click(function(e) {
            e.preventDefault();
            $("#fieldList").append("<br><br><br><div class='row'>");
            $("#fieldList").append("<div class='col-md-3'><select class='form-control' name='course_id[]'><option selected disabled>Select Course</option>@foreach($course as $cors)<option value='{{ $cors->id }}'>{{ $cors->course_code }}</option>@endforeach</select></div>");
            $("#fieldList").append("<div class='col-md-3'><input type='text' name='score[]' class='form-control' placeholder='Enter Student Score' /></div>");
            $("#fieldList").append("<div class='col-md-3'><input type='text' name='unit[]' class='form-control' placeholder='Enter Course Unit' /></div>");
            $("#fieldList").append("<div class='col-md-3'><input type='text' name='weight[]' class='form-control' placeholder='Enter Score Weight' /></div>");
            $("#fieldList").append("</div>");
        });
    });
</script>


@endsection