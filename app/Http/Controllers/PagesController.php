<?php

namespace App\Http\Controllers;

use App\Models\labstudents;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function studentFeedback($student_id, $lab_id){
        $student = labstudents::where('user_id', $student_id)->where('lab_id', $lab_id)->get()->first();
        return view('teacher.feedback', ['student' => $student, 'student_id' => $student_id, 'lab_id' => $lab_id]);
    }

    public function studentFeedbacksave(Request $request, $student_id, $lab_id){
        $array = array(
            'teacher_feedback' => $request->feedback,
        );
        labstudents::where('user_id', $student_id)->where('lab_id', $lab_id)->get()->first()->update($array);
        return back()->with('success', 'Feedback Sent Successfully!');

    }

    public function studentcourses(){
        return view('student.courses');
    }

    public function addGrades(){
        return view('teacher.grades');
    }

    public function createCourse(){
        return view('teacher.create-course');
    }

    public function createLabs(){
        return view('teacher.create-labs');
    }

    public function studentProgress($student_id, $lab_id){
        $student = labstudents::where('user_id', $student_id)->where('lab_id', $lab_id)->get()->first();
        return view('teacher.progress', ['student' => $student, 'lab_id' => $lab_id]);
    }

    public function dashboard(){
        return view('teacher.dashboard');
    }
    
    public function studentperf(){
        return view('student.performence');
    }

    public function studentatt(){
        return view('student.attendence');
    }

    public function viewLab(){
        return view('teacher.live-lab');
    }

    public function login(){
        return view('teacher.login');
    }

    public function register(){
        return view('teacher.register');
    }

    public function addlabs(){
        return view('teacher.addlab');
    }

    public function viewCourses(){
        return view('teacher.mg-courses');
    }

    public function manageStudents(){
        return view('teacher.mg-students');
    }

    public function studentPerformence(){
        return view('teacher.student-performence');
    }

    public function manageLabs(){
        return view('teacher.teacher-mg-labs');
    }

    public function sendAlert(){
        return view('teacher.send-alert');
    }

    public function studentindex() {
        return view('student.dashboard');
    }

    public function studentcourse(){
        return view('student.addcourse');
    }
    
    public function studentLabs(){
        return view('student.studentLabs');
    }

    public function studentLabslive(){
        return view('student.studentLabslive');
    }

    public function studentlogin() {
        return view('student.login');
    }

    public function studentregister() {
        return view('student.register');
    }

    public function studentlab() {
        return view('student.course');
    }
}
