<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Program;
use App\Models\Result;
use App\Models\Students;

class PostController extends Controller
{
    // Save Department
    public function savedepartment(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'shortcode' => 'required',
        ]);

        // Save Record into Department DB
        $department = new Department();
        $department->title = $request->input('title');
        $department->shortcode = $request->input('shortcode');
        $department->status = 1;
        $department->save();

        \Session::flash('Success_message', 'Department Added Successfully');

        return back();
    }

    // Save Program
    public function saveprogram(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'duration' => 'required',
        ]);

        // Save Record into Program DB
        $program = new Program();
        $program->name = $request->input('name');
        $program->duration = $request->input('duration');
        $program->status = 1;
        $program->save();

        \Session::flash('Success_message', 'Program Added Successfully');

        return back();
    }

    // Save Course
    public function savecourse(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'course_code' => 'required',
            'department_id' => 'required',
        ]);

        // Save Record into Course DB
        $course = new Course();
        $course->title = $request->input('title');
        $course->course_code = $request->input('course_code');
        $course->department_id = $request->input('department_id');
        $course->status = 1;
        $course->save();

        \Session::flash('Success_message', 'Course Added Successfully');

        return back();
    }

    // Save Student
    public function savestudent(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'middlename' => 'required',
            'matric_no' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'program_id' => 'required',
            'department_id' => 'required',
            'year' => 'required',
        ]);

        // Save Record into Student DB
        $student = new Students();
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->middlename = $request->input('middlename');
        $student->matric_no = $request->input('matric_no');
        $student->gender = $request->input('gender');
        $student->dob = $request->input('dob');
        $student->program_id = $request->input('program_id');
        $student->department_id = $request->input('department_id');
        $student->year = $request->input('year');
        $student->status = 1;
        $student->save();

        \Session::flash('Success_message', 'Student Added Successfully');

        return back();
    }

    // Update Department function
    public function updatedepartment(Request $request, $id)
    {
        $department = Department::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'shortcode' => 'required',
        ));

        $department = Department::find($id);

        $department->title = $request->input('title');
        $department->shortcode = $request->input('shortcode');
        $department->save();

        \Session::flash('Success_message', '✔ Department Updated Succeffully');

        return back();
    }

    // Update Program function
    public function updateprogram(Request $request, $id)
    {
        $program = Program::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
            'duration' => 'required',
        ));

        $program = Program::find($id);

        $program->name = $request->input('name');
        $program->duration = $request->input('duration');
        $program->save();

        \Session::flash('Success_message', '✔ Program Updated Succeffully');

        return back();
    }

    // Update Course function
    public function updatecourse(Request $request, $id)
    {
        $course = Course::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'course_code' => 'required',
            'department_id' => 'required',
        ));

        $course = Course::find($id);

        $course->title = $request->input('title');
        $course->course_code = $request->input('course_code');
        $course->department_id = $request->input('department_id');
        $course->save();

        \Session::flash('Success_message', '✔ Course Updated Succeffully');

        return back();
    }

    // Update Student function
    public function updatestudent(Request $request, $id)
    {
        $student = Students::find($id);
        // Validation
        $this->validate($request, array(
            'fname' => 'required',
            'lname' => 'required',
            'middlename' => 'required',
            'matric_no' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'program_id' => 'required',
            'department_id' => 'required',
            'year' => 'required',
        ));

        $student = Students::find($id);

        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->middlename = $request->input('middlename');
        $student->matric_no = $request->input('matric_no');
        $student->gender = $request->input('gender');
        $student->dob = $request->input('dob');
        $student->program_id = $request->input('program_id');
        $student->department_id = $request->input('department_id');
        $student->year = $request->input('year');
        $student->status = 1;
        $student->save();

        \Session::flash('Success_message', '✔ Student Updated Succeffully');

        return back();
    }

    public function deletedepartment($id)
    {
        // Delete Department
        $department = Department::find($id);
        $department->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Department');

        return back();
    }

    public function deleteprogram($id)
    {
        // Delete Program
        $program = Program::find($id);
        $program->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Program');

        return back();
    }

    public function deletecourse($id)
    {
        // Delete Course
        $course = Course::find($id);
        $course->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Course');

        return back();
    }

    public function deletestudent($id)
    {
        // Delete Student
        $student = Students::find($id);
        $student->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Student');

        return back();
    }

    // Save Course
    public function saveresult(Request $request)
    {
        // Validation
        $this->validate($request, [
            'student_id' => 'required',
            'semester' => 'required',
            'course_id' => 'required',
            'score' => 'required',
            'unit' => 'required',
            'weight' => 'required',
        ]);

        foreach ($request->input('course_id') as $item => $value) {
            $result = new Result();
            $result->student_id = $request->student_id;
            $result->semester = $request->semester;
            $result->course_id = $request->course_id[$item];
            $result->score = $request->score[$item];
            $result->unit = $request->unit[$item];
            $result->weight = $request->weight[$item];
            $result->point = $result->unit*$result->weight;
            $result->status = 1;
            $result->save();
        }

        \Session::flash('Success_message', 'Result Generated Successfully');

        return back();
    }
}
