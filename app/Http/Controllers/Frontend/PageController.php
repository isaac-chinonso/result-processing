<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Program;
use App\Models\Students;
use App\Models\Result;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['department'] = Department::where('status', '=', 1)->count();
        $data['course'] = Course::where('status', '=', 1)->count();
        $data['program'] = Program::where('status', '=', 1)->count();
        $data['student'] = Students::where('status', '=', 1)->count();
        return view('admin.dashboard', $data);
    }

    public function department()
    {
        $data['department'] = Department::where('status', '=', 1)->get();
        return view('admin.department', $data);
    }

    public function program()
    {
        $data['program'] = Program::where('status', '=', 1)->get();
        return view('admin.program', $data);
    }

    public function course()
    {
        $data['department'] = Department::where('status', '=', 1)->get();
        $data['course'] = Course::where('status', '=', 1)->get();
        return view('admin.course', $data);
    }

    public function student()
    {
        $data['department'] = Department::where('status', '=', 1)->get();
        $data['program'] = Program::where('status', '=', 1)->get();
        $data['student'] = Students::where('status', '=', 1)->get();
        return view('admin.student', $data);
    }

    public function computeresult()
    {
        $data['department'] = Department::where('status', '=', 1)->get();
        $data['student'] = Students::where('status', '=', 1)->get();
        $data['course'] = Course::where('status', '=', 1)->get();
        return view('admin.compute_result', $data);
    }

    public function result()
    {
        $data['student'] = Students::where('status', '=', 1)->get();
        return view('admin.check_result', $data);
    }

    public function resultdetails($id)
    {
        
        if (Result::where('student_id', '=', $id)->exists()) {
            $data['studentresult'] = Result::where('student_id', $id)->first();
            $data['result'] = Result::where('status', '=', 1)->where('student_id', $id)->get();
            $data['studentgpa'] =  $data['result']->sum('point')/$data['result']->sum('unit');   
            return view('admin.student_result', $data); 
        }
        else{
            $data['studentresult'] = Students::where('id', $id)->first();
            return view('admin.student_result1', $data);
        }
        
    }

    public function register()
    {
        return view('admin.register');
    }

    public function login()
    {
        return view('admin.login');
    }
}


