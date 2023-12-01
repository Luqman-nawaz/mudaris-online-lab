<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('student/home');
    }

    public function chat()
    {
        return view('student/layouts/chat');
    }

    public function IDE()
    {
        return view('student/layouts/IDE');
    }
    public function RSubject()
    {
        return view('student/layouts/RSubject');
    }
    public function groups()
    {
        return view('student/layouts/groups');
    }
    public function Quries()
    {
        return view('student/layouts/Quries');
    }

    public function performance()
    {
        return view('student/layouts/performance');
    }

    public function register_Course()
    {
        return view('student/layouts/register_Course');
    }
  
    public function   alert_question()
    {
        return view('student/layouts/alert_question');
    }

    public function   notification()
    {
        return view('student/layouts/notification');
    }
}
