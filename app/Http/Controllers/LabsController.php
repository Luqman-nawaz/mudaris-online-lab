<?php

namespace App\Http\Controllers;

use App\Models\labs;
use App\Models\labstudents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LabsController extends Controller
{
    public function viewlabs($id){
        $labs = labs::where('course_id', $id)->get();
        return view('student.studentLabs', ['labs' => $labs]);
    }

    public function labsCompile($id, Request $request){

        $response = Http::post('https://api.jdoodle.com/v1/execute', [
            'clientId' => '81e32057bcd555d2a35874106c223149',
            'clientSecret' => '4bd22967ea884668da14d25da76a43a524db5f5a9357b0a55fc933e5503e6aef',
            'script' => $request->code,
            'versionIndex' => '0',
            'language' => 'php',
        ]);

        $result = $response->object();
        if(empty($result->output)){
            $output = $result->error;
        }else{
            $output = $result->output;
        }
        
        labstudents::where('user_id', Auth::id())->where('lab_id', $id)->update(['current_answer' => $request->code, 'compiler_result' => $output]);
        return back();
    }

    public function labsList(){
        return view('student.labs');
    }

    public function studentLabslive($id){
        $lab = labs::where('id', $id)->get()->first();
        
        if($lab->lab_date != date('Y-m-d')){
            $date = Carbon::parse($lab->lab_date)->diffForhumans();
            return redirect('/student/dashboard')->with('error', 'You can only perform this Lab in '. $date);
        }

        $ls = labstudents::where('user_id', Auth::id())->where('lab_id', $id)->get();
        $user_id = Auth::id();
        if($ls->isNotEmpty()){
            return view('student.studentLabslive', ['user_id' => $user_id, 'lab' => $lab, 'lab_id' => $id]);
        }

        $labstudent = array(
            'user_id' => $user_id,
            'lab_id' => $id,
            'attendence' => 'Present',
            'current_answer' => ' ',
            'compiler_result' => ' ',
            'teacher_feedback' => NULL,
            'score' => 'Ungraded',
        );
        
        labstudents::firstOrCreate($labstudent);
        return view('student.studentLabslive', ['lab' => $lab, 'user_id' => $user_id, 'lab_id' => $id]);
    }
}
