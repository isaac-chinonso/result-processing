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
                                                    <td>{{ $studentresult->student->lname }} {{ $studentresult->student->fname }} {{ $studentresult->student->middlename }}</td>
                                                    <td>Matric No:</td>
                                                    <td>{{ $studentresult->student->matric_no }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Program: </td>
                                                    <td>{{ $studentresult->student->program->name }}</td>
                                                    <td>Department:</td>
                                                    <td>{{ $studentresult->student->department->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Session:</td>
                                                    <td>{{ $studentresult->student->year }}</td>
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
                                                                
                                                                <?php $number = 1; ?>
                                                                @foreach($result as $rest)
                                                                
                                                                <tr>
                                                                    <td>{{ $number }}</td>
                                                                    <td>{{ $rest->course->course_code }}</td>
                                                                    <td>{{ $rest->course->title }}</td>
                                                                    <td>{{ $rest->score }}</td>
                                                                    <td>{{ $rest->unit }}</td>
                                                                    <td>{{ $rest->weight }}</td>
                                                                </tr>
                                                                <?php $number++; ?>
                                                                @endforeach
                                                                <tr>
                                                                    <th>GPA: </th>
                                                                    <th colspan="2">{{ $studentgpa }}</th>
                                                                    <th>Classification Key:</th>
                                                                    <th colspan="2">
                                                                        @if($studentgpa >= 3.5 && $studentgpa <= 4.0) DISTINCTION @elseif($studentgpa>= 3.0 && $studentgpa <= 3.49) UPPER CREDIT @elseif($studentgpa>= 2.5 && $studentgpa <= 2.99) LOWER CREDIT @elseif($studentgpa>= 2.0 && $studentgpa <= 2.49) PASS @elseif($studentgpa>= 0 && $studentgpa <= 1.99) FAIL @endif 
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