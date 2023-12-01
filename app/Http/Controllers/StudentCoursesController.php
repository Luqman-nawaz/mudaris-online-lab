<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\labstudents;
use App\Models\student_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentCoursesController extends Controller
{
    public function studentcourse(){
        return view('student.addcourse');
    }

    public function studentsubmit(){
        return redirect('/dashboard');
    }

    public function studentperf(){
        $performence = labstudents::where('user_id', Auth::id())->get();
        return view('student.performence', ['performences' => $performence]);
    }

    public function studentatt(){
        $performence = labstudents::where('user_id', Auth::id())->get();
        return view('student.attendence', ['performences' => $performence]);
    }

    public function joinstudentcoursekey(Request $request){
        $course = courses::where('course_key', $request->course_key)->firstOrFail();
        $course = array(
            'student_id' => Auth::id(),
            'course_id' => $course->id,
        );
        
        if(student_courses::create($course)){
            return redirect('/student/courses');
        }else{
            return back();
        }
    }

    public function viewCourses(){
        return view('student.courses');
    }

    public function joinstudentcourse($id){
        $course = array(
            'student_id' => Auth::id(),
            'course_id' => $id,
        );

        if(!student_courses::where('student_id', Auth::id())->where('course_id', $id)->get()->isEmpty()){
            return back()->with('error', 'Course Already Enrolled!');
        }
        
        if(student_courses::create($course)){
            return redirect('/student/courses');
        }else{
            return back();
        }
    }

    public function studentindex() {
        return view('student.dashboard');
    }
}
