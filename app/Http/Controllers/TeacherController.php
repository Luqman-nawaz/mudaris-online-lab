<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\groups;
use App\Models\idle;
use App\Models\labs;
use App\Models\labstudents;
use App\Models\student_courses;
use App\Models\teacher;
use App\Models\users_groups;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{

    public function index(){
        return view('teacher.dashboard');
    }

    public function removeStudent($student_id, $course_id){
        $course = student_courses::where('student_id', $student_id)->where('course_id', $course_id)->get()->first()->delete();
        return back();
    }

    public function removeStudentGroup($id){
        $user_groups = users_groups::where('group_id', $id)->get();
        foreach($user_groups as $group){
            $group->delete();
        }
        $group = groups::find($id)->delete();
        return back();
    }

    public function idleStudents(Request $request){
        $array = array(
            'student_id' => $request->student_id,
            'lab_id' => $request->lab_id,
            'teacher_id' => $request->teacher_id,
            'course_id' => $request->course_id,
        );

        idle::create($array);
        return redirect('/student/labs/'. $request->lab_id.'/live');
    }

    public function createStudentGroups($id){
        return view('teacher.creategroups', ['course_id' => $id]);
    }

    public function viewStudentGroups($id){
        $groups = groups::where('course_id', $id)->get();
        return view('teacher.studentgroups', ['groups' => $groups, 'group_id' => $id]);
    }

    public function saveAlert($id, Request $request){
        $lab = labstudents::where('user_id', $request->user_id)->where('lab_id', $id)->get()->first();
        $lab->teacher_feedback = $request->alert;
        $lab->save();
        return back();
    }

    public function gradeStudent($lab_id, $user_id){
        $lab = labstudents::where('user_id', $user_id)->where('lab_id', $lab_id)->get()->first();
        return view('teacher.grade', ['lab' => $lab, 'lab_id' => $lab_id, 'user_id' => $user_id]);
    }

    public function saveGroup(Request $request){
        $group_name = $request->group_name;
        $grouparray = array(
            'group_name' => $group_name,
            'course_id' => $request->course_id,
        );

        $group = groups::create($grouparray);

        $array = array(
            'group_id' => $group->id,
            'user_id' => $request->student_one,
        );

        users_groups::create($array);

        $array = array(
            'group_id' => $group->id,
            'user_id' => $request->student_two,
        );

        users_groups::create($array);

        if($request->student_three != "null"){
            $array = array(
                'group_id' => $group->id,
                'user_id' => $request->student_three,
            );
    
            users_groups::create($array);
        }
        
        if($request->student_four != "null"){
            $array = array(
                'group_id' => $group->id,
                'user_id' => $request->student_four,
            );
    
            users_groups::create($array);
        }

        return back();

    }

    public function sendAlert($id){
        $lab = labstudents::where('lab_id', $id)->get();
        return view('teacher.send-alert', ['labs' => $lab, 'lab_id' => $id]);
    }

    public function savegradeStudent($lab_id, $user_id, Request $request){
        $lab = labstudents::where('user_id', $user_id)->where('lab_id', $lab_id)->get()->first();
        $lab->score = $request->marks;
        $lab->save();
        return redirect('/teacher/grade/'. $lab_id .'/students');
    }

    public function viewLab($id){
        $lab = labs::where('id', $id)->get()->first();
        return view('teacher.live-lab', ['lab' => $lab]);
    }

    public function viewStudents($id){
        $course = courses::where('id', $id)->where('created_by', Auth::id())->get()->first();
        return view('teacher.mg-students', ['courses' => $course]);
    }

    public function gradeLab($id){
        $user_id = Auth::id();
        $labs = labs::where('id', $id)->where('teacher_id', $user_id)->get()->first();
        return view('teacher.gradelabstudents', ['lab' => $labs, 'lab_id' => $id, 'user_id' => $user_id]);
    }

    public function save(Request $request){

        $password = Hash::make($request->password);

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:teachers',
            'password' => 'required',
        ]);
        
        $broker = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        );

        if(teacher::create($broker)){
            Auth::guard('teacher')->attempt($request->only('email', 'password'));
            $broker = Auth::guard('teacher')->user();
            return redirect('/teacher/dashboard');
        }else{
            return Redirect::back()->withErrors(['msg' => 'Could not register as a teacher!']);
        }
    }

    public function authlogin(Request $request){

        if(Auth::guard('teacher')->attempt($request->only('email', 'password'))){
            $broker = Auth::guard('teacher')->user();
            return redirect('/teacher/dashboard');
        }else{
            return Redirect::back()->withErrors(['msg' => 'Login credentials do not match.']);
        }
    }

    public function labsIndex(){
        $id = Auth::id();
        $labs = labs::where('teacher_id', $id)->get();
        return view('teacher.teacher-mg-labs', ['labs' => $labs]);
    }

    public function removeCourse($id){
        $course = courses::where('id', $id)->where('created_by', Auth::id())->get()->first();

        $groups = groups::where('course_id', $id)->get();
        foreach($groups as $group){
            $group->delete();
        }

        
        $labs = labs::where('course_id', $id)->get();
        foreach($labs as $lab){
            $lab->delete();
        }
        $course->delete();
        return back();
    }

    public function removeLab($id){
        $course = labs::where('id', $id)->where('teacher_id', Auth::id())->get()->first();
        $course->delete();
        return back();
    }

    public function createCourse(){
        return view('teacher.create-course');
    }

    public function saveCourse(Request $request){
        $course = [
            'course_name' => $request->course_name,
            'course_credit_hours' => $request->credit_hours,
            'course_description' => $request->description,
            'course_key' => Str::random(7),
            'created_by' => Auth::guard('teacher')->user()->id,
        ];

        if(courses::create($course)){
            return redirect('/teacher/courses');
        }else{
            return back();
        }
    }

    public function viewCourses(){
        return view('teacher.mg-courses');
    }

    public function createLabs(){
        return view('teacher.create-labs');
    }

    public function saveLabs(Request $request){
        $lab = [
            'course_id' => $request->course_id,
            'teacher_id' => 1,
            'lab_date' => $request->updated_at,
            'lab_name' => $request->name,
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'marks' => $request->grades,
        ];

        if(labs::create($lab)){
            return redirect('/teacher/courses');
        }else{
            return back();
        }

    }
}
