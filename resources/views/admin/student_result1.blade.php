@extends('layout.master2')
@section('title')
Student Result || Result Processing System
@endsection
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <div align="right">
                            <button id="printPageButton" onclick="myFunction()">Print Copy</button>
                        </div>
                        <div class="col-md-12">
                            <div align="center">
                                <img src="../../assets/images/AJAYI LOGO.jpg">
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="4">PERSONAL DETAILS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="table table-bordered" style="font-size: 17px;">
                                                <tr>
                                                    <td>Fullname: </td>
                                                    <td>{{ $studentresult->lname }} {{ $studentresult->fname }} {{ $studentresult->middlename }}</td>
                                                    <td>Matric No:</td>
                                                    <td>{{ $studentresult->matric_no }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Program: </td>
                                                    <td>{{ $studentresult->program->name }}</td>
                                                    <td>Department:</td>
                                                    <td>{{ $studentresult->department->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Session:</td>
                                                    <td>{{ $studentresult->year }}</td>
                                                    <td>Semester:</td>
                                                    <td>{{ $studentresult->semester }} Semester</td>
                                                </tr>
                                            </table>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">ExAMINATION RESULT ANALYSIS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table class="table table-bordered" style="font-size: 17px;">
                                                                <tr>
                                                                    <td>S/N</td>
                                                                    <td>Course Code</td>
                                                                    <td>Course Title</td>
                                                                    <td>Score</td>
                                                                    <td>Units</td>
                                                                    <td>Weight</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <th>GPA: </th>
                                                                    <th colspan="2"></th>
                                                                    <th>Classification Key:</th>
                                                                    <th colspan="2">
                                                                        </th>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
<script>
    function myFunction() {
        window.print();
    }
</script>

@endsection